<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    public function Destroy($id){
        Service::find($id)->delete();
        return redirect(route('dashboard'))->with('delete','Order deleted successfully');
    }

    public function updateview($id){
        $serv = Service::find($id);

        return view('sawaservices.update-service-form',['service'=>$serv]);
    }

    public function ServiceUpdate(){
        if(!Auth::user()->admin){
            return route('dashboard');
        }
        $ord = intval(request()->get('service-old-order'));
        $service = Service::where('order',0)->first();
        
        $thetitle = request()->get('name-en');
        $ttitlear = request()->get('name-ar');
        $jptitlea = request()->get('name-jp');
        $theprice = request()->get('service-price');

        $service->title_en = $thetitle;
        $service->title_ar = $ttitlear;
        $service->title_jp = $jptitlea;
        $service->order = $ord;
        $service->price = $theprice;
        $service->save();
    
        if(request()->file('service-icon') != null){
            $orderfile = 'public/'.$service->file;
            Storage::delete($orderfile);
            $uid = request()->user()->id;
            $ext = request()->file('service-icon')->extension();
            $name = time().'-'.$uid.'.'.$ext; 
            $serive_icon = request()->file('file')->storeAs('icons',$name,'public');
            $service->icon = $serive_icon;
            $service->save();
            
        }
        
        return redirect(route('dashboard'))->with('success','serviceupdated');
    }
    public function AddService()  {
        if(!Auth::user()->admin){
            return route('dashboard');
        }
        $nameen = request()->get('name-en');
        $namear = request()->get('name-ar');
        $namejp = request()->get('name-jp');
        $price  = request()->get('service-price');
        $order  = request()->get('service-order');
        $icon = "";

        $servs = Service::create([
            'title_en'=>$nameen,
            'title_ar'=>$namear,
            'title_jp'=>$namejp,
            'order'=>$order,
            'price'=>$price,
            'icon'=>$icon,
        ]);
        $servs->save();

        if(request()->file('service-icon') != null ){
            $ext = request()->file('service-icon')->extension();
            $fname = time().'-'.'odr.'.$ext;
            $file_path = request()->file('service-icon')->storeAs('icons',$fname,'public');
            $servs->icon = $file_path;
            $servs->save();
        }

        return redirect(route('dashboard'))->with('success','Service has been added successfully');
    }
}
