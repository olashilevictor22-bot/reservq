<?php

namespace App\Http\Controllers\WEB\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Setting;
use App\Models\EmailTemplate;
use App\Mail\OrderConfirmedMail;
use App\Helpers\MailHelper;
use Auth;
use Mail;

class OrderController extends Controller
{
    public function allOrder(){
        $setting =  Setting::first();
        $order = Order::with('userName')->orderBy('id','DESC')->get();

        return view('Admin.pages.order.all_order', compact('order', 'setting'));
    }

    public function deliveryOrder(){
        $data['setting'] =  Setting::first();
        $data['order'] = Order::with('userName')->orderBy('id','DESC')->where('type','delivery')->paginate(10);
        return view('Admin.pages.order.delivery_order',$data);
    }

    public function pickupOrder(){
        $data['setting'] =  Setting::first();
        $data['order'] = Order::with('userName')->orderBy('id','DESC')->where('type','pickup')->paginate(10);
        return view('Admin.pages.order.pickup_order',$data);
    }

    public function inresturentOrder(){
        $data['setting'] =  Setting::first();
        $data['order'] = Order::with('userName')->orderBy('id','DESC')->where('type','inresturent')->paginate(10);
        return view('Admin.pages.order.inresturent_order',$data);
    }

    public function OrderDetils($id){
        $data['setting'] =  Setting::first();
        $data['order'] = Order::find($id);
        $data['OrderItem'] = OrderItem::where('order_id',$id)->get();
        return view('Admin.pages.order.order_detils',$data);
    }

    public function OrderDelete($id)
    {
        try{
            OrderItem::where('order_id',$id)->delete();
            Order::where('id',$id)->delete();

            $message = "Delete successfully";
            $notification = array('message'=>$message,'alert-type'=>'success');
            return redirect()->back()->with($notification);

        }catch(\Exception $e)
        {
            $message = $e->getMessage();
            $notification = array('message'=>$message,'alert-type'=>'success');
            return redirect()->back()->with($notification);
        }
    }

    public function OrderChange(Request $request, $id)
    {
        $order = Order::find($id);
        $order->payment_status = $request->payment_status;
        $order->order_status = $request->order_status;

        if($order->save()){
            MailHelper::setMailConfig();
            $setting = Setting::first();
            $template=EmailTemplate::where('id',7)->first();
            $subject=$template->subject;
            $message=$template->description;
            if($order->order_status == 1){
                $orderStatus = 'Pending';
            }
            if($order->order_status == 3){
                $orderStatus = 'Confirmed';
            }else{
                $orderStatus = 'Success';
            }
            $message = str_replace('{{user_name}}',$order->userName->name,$message);
            $message = str_replace('{{order_status}}',$orderStatus,$message);
            $message = str_replace('{{payment_status}}',$order->payment_status,$message);
            $message = str_replace('{{delevery_day}}',$order->delevery_day,$message);
            $message = str_replace('{{delevery_time_id}}',$order->TimeSlt->slot,$message);
            $message = str_replace('{{number_of_gest}}',$order->number_of_gest,$message);
            $message = str_replace('{{type}}',$order->type,$message);
            Mail::to($order->userName->email)->send(new OrderConfirmedMail($message,$subject));
        }
        $message = "successfully Changed";
        $notification = array('message'=>$message,'alert-type'=>'success');
        return redirect()->back()->with($notification);
    }

    public function show($id)
    {
        $data['setting'] =  Setting::first();
        $data['order'] = Order::find($id);
        $data['OrderItem'] = OrderItem::where('order_id',$id)->get();
        if (request()->is('print*')) {
            // If it's a print request, load the print view
            return view('Admin.pages.order.print_invoice', $data);
        }
        return view('Admin.pages.order.invoice',$data);
    }




}
