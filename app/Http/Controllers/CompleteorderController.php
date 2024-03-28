<?php

namespace App\Http\Controllers;

use App\Models\Completeorder;
use App\Models\Notification;
use App\Models\Sawaorder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CompleteorderController extends Controller
{
    public function ViewAllCompleted(){
        $comps = Completeorder::all();

        return view('test',['comp'=>$comps]);
    }

    public function CompleteForm($id){
        $title = Sawaorder::find($id)->title;
        return view('sawaorders.complete-order-form',['orderid'=>$id,'title'=>$title]);
    }

    public function ViewCompleted($id){
        $comp = Completeorder::where('sawaorder_id',$id)->first();
        $ord = $comp->sawaorder;
        $uid = Sawaorder::find($comp->sawaorder_id)->user_id;
        if(!request()->user()->admin ){
        if(!request()->user()->admin && request()->user()->id != $uid){
            return redirect(route('dashboard'))->with('danger','You are not allowed to view this content');
        }
        }

        return view('sawaorders.showcompleted',['comp'=>$comp,'ord'=>$ord]);
    }

    public function Complete(){
        $desc = request()->get('complete-description');
        $orderid = request()->get('sawaorder-id');
        $userid = Sawaorder::find($orderid)->user->id;
        
        
        $ext = request()->file('complete-file')->extension();
        $fname = time().'-'.'odr'.$ext;
        $file_path = request()->file('complete-file')->storeAs('orders',$fname,'sawafiles');
        
        $completed = Completeorder::create([
                'sawaorder_id'=>$orderid,
                'desc'=>$desc,
                'file'=>$file_path
            ]
        );
        $completed->save();
        
        $comsawa = Sawaorder::find($orderid);
        $comsawa->completed = true;
        $comsawa->save();

        $uiid = Sawaorder::find($orderid)->user_id;
        $message = 'your order is completed';
        $not = Notification::create([
            'message' => $message,
            'user_id' => $userid,
            'type' => 3,
            'sended'=>false,
            'contentid' => $uiid,
        ]);
        $not->save();

        return redirect(route('complete.showcompleted',$orderid))->with('success','This order Has been completed');
    }

    public function UpdateComplete(Completeorder $completedorder){
        $desc = request()->get('desc');
        
        if(request()->file('complete-file') != null){
            $orderfile = 'sawafiles/'.$completedorder->file;
            Storage::delete($orderfile);
            $ext = request()->file('order-file')->extension();
            $fname = time().'-'.'odr.'.$ext;
            $file_path = request()->file('order-file')->storeAs('orders',$fname,'sawafiles');
            $completedorder->file = $file_path;
        }

        $completedorder->desc = $desc;
        $completedorder->save();

        return redirect(route('complete.showcompleted',$completedorder->sawaorder_id));
    }
}
