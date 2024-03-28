<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use App\Models\Sawaorder;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class SawaorderController extends Controller
{
    public function AddForm(Service $service){
        
        return view('sawaorders.add-order-form',['service'=>$service]);
    }

    public function ShowOrder(Sawaorder $sawaorder){
       $username = User::find($sawaorder->user_id)->name;
        return view('dash.orderpage',['order'=>$sawaorder,'owner'=>$username]);
    }

    public function Destroy($id){
        $sawaorder = Sawaorder::find($id);
        $theq = public_path('storage/'.$sawaorder->qr);
        
        unlink($theq);
        
        if($sawaorder->file != null && $sawaorder->file != ''){
            $orderfile = 'sawafiles/'.$sawaorder->file;
            Storage::delete($orderfile);
        }
        
        //$qrf = 'storage/'.$sawaorder->qr;
        //Storage::delete($orderfile);
        $sawaorder->delete();
        //return redirect(route('dashboard'))->with('delete','Order deleted successfully');
        return back();
    }

    public function OrderUpdate(Sawaorder $sawaorder){
        if($sawaorder->title != request()->get('title')){
            $sawaorder->title = request()->get('title');
        }
        if($sawaorder->description != request()->get('description')){
            $sawaorder->description = request()->get('description');
        }
        if($sawaorder->url != request()->get('url')){
            $sawaorder->url = request()->get('url');
        }
        if(request()->file('order-file') != null){
            $uid = request()->user()->id;
            $ext = request()->file('order-file')->extension();
            $name = time().'-'.$uid.'.'.$ext; 
            request()->file('file')->storeAs('ordersfiles',$name,'public');
            $sawaorder->file = Storage::path($name);
        }
        
        return redirect(route('dashboard'))->with('updated','Your order has been updated');
    }

    public function AddOrder(){
       
        request()->validate([
            'order-file' => 'nullable | file | max:500 | mimes:docx,pdf,xlxs,jpg,jpeg,png,bmp,gif,mp4,wmv,'
        ]);
        //$userid = auth()->user()->id;
        $userid = request()->user()->id;
        $serviceid = request()->get('order-type');
        $title = request()->get('order-title');
        $description = request()->get('order-description');
        $url = request()->get('order-url');

        $sorder =  Sawaorder::create([
            'title'=>$title,
            'user_id'=>$userid,
            'service_id'=>$serviceid,
            'description'=>$description,
            'type'=>$serviceid,
            'url'=>$url,
            'file'=>'',
            'qr'=>'',
        ]);
        $sorder->save();

        $ext = request()->file('order-file')->extension();
        $fname = time().'-'.'odr.'.$ext;
        $file_path = request()->file('order-file')->storeAs('orders',$fname,'sawafiles');

        $stringurl = url('/sawaorders/order/'.$sorder->id);
        $image = QrCode::size(200)->generate($stringurl);
        $qrname = time().'u'.$userid.'qr.svg';
        $qrfulname = 'qrs/'.$qrname;
        $qr_path = Storage::disk('public')->put($qrfulname,$image);

        $sorder->file = $file_path;
        $sorder->qr = $qrfulname;
        $sorder->save();

        $message = request()->user()->name . ' has added request';
        $not = Notification::create([
            'message' => $message,
            'user_id' => 2,
            'type' => 1,
            'sended'=>false,
            'contentid' => $sorder->id,
        ]);
        $not->save();

        return redirect(route('sawaorder.payment'));

    }

    public function UpdateOrder($id){
        $order = Sawaorder::find($id);
        $title = $order->service->title_en;
        return view('sawaorders.update-order-form',['order'=>$order,'title'=>$title]);
    }

    public function DoUpdate(){
        $id = request()->get('order-id');
        $order = Sawaorder::find($id);

        $title = request()->get('order-title');
        $description = request()->get('order-description');
        $url = request()->get('order-url');
        
        if(request()->file('order-file') != null){
            $orderfile = 'sawafiles/'.$order->file;
            Storage::delete($orderfile);
            $ext = request()->file('order-file')->extension();
            $fname = time().'-'.'odr.'.$ext;
            $file_path = request()->file('order-file')->storeAs('orders',$fname,'sawafiles');
            $order->file = $file_path;
        }
        $order->title = $title;
        $order->description = $description;
        $order->url = $url;
        $order->save();

        return redirect(route('sawaorder.updateorder',$order->id))->with('success','Order has been upated');
    }

    public function FileDownload(){
        $file = request()->get('name');
        $url = 'sawafiles/'.$file;
        return Storage::download($url);
    }

    public function CompleteForm($id){
        $title = Sawaorder::find($id)->title;
        return view('sawaorders.complete-order-form',['orderid'=>$id,'title'=>$title]);
    }
}
