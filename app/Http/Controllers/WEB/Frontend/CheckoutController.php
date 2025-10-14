<?php

namespace App\Http\Controllers\WEB\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Product;
use App\Models\Setting;
use App\Models\User;
use App\Models\SeoSetting;
use App\Models\TimeSlot;
use App\Models\Country;
use App\Models\Addresse;
use App\Models\MobileApp;
use App\Models\SectionTitel;
use App\Models\Cart;
use App\Models\CartAddons;
use App\Models\CartItem;
use App\Models\Coupon;
use App\Models\ApplyCoupon;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\RazorpayPayment;
use App\Models\PaystackAndMollie;
use App\Models\Flutterwave;
use App\Models\StripePayment;
use App\Models\Shipping;
use App\Models\BankPayment;
use App\Models\PaypalPayment;
use App\Models\Admin;
use App\Models\DeleveryArea;
use App\Models\InstamojoPayment;
use App\Models\ContactPage as ContactUs;
use Validator;
use Auth;

class CheckoutController extends Controller
{
    public function delivery(Request $request){
        if(Auth::user()){
            $data['DeleveryAreas'] = DeleveryArea::all();
            $data['seo_setting'] =  SeoSetting::where('id',12)->first();
            $data['setting'] =  Setting::first();
            $data['app'] =  MobileApp::first();
            $data['section'] =  SectionTitel::first();
            $data['slots'] = TimeSlot::orderBy('id','asc')->get();
            $data['branchs'] = Admin::where('status',1)->orderBy('id','asc')->get();
            $data['countries'] = Country::all();
            $data['address'] = Addresse::with('GetCountry','GetState','GetCity')->where('user_id',Auth::user()->id)->get();
            $data['cart'] = $request->session()->get('cart', []);
            $data['vatCharge'] = $data['setting']->vat_rate;
            $data['deleveryCharge'] = 0;
            $check = ApplyCoupon::with('coupon')->where(['user_id' => auth::user()->id])->first();
            if($check){
                if($check->coupon->offer_type == '%'){
                    $data['discount'] = ($check->coupon->discount / 100);
                }else{
                    $data['discount'] = $check->coupon->discount;
                }
            }else{
                $data['discount'] = 0;
            }
            return view('Frontend.Pages.checkout',$data);
        }else{
            $message = trans('translate.Please login first');
            $notification = array('message' => $message, 'alert-type' => 'error');
            return redirect()->route('login')->with($notification);
        }
    }

    public function pickUp(Request $request){
        if(Auth::user()){
            $data['seo_setting'] =  SeoSetting::where('id',12)->first();
            $data['setting'] =  Setting::first();
            $data['app'] =  MobileApp::first();
            $data['section'] =  SectionTitel::first();
            $data['slots'] = TimeSlot::orderBy('id','asc')->get();
            $data['contact'] = ContactUs::first();
            $data['branchs'] = Admin::where('status',1)->orderBy('id','asc')->get();
            $data['cart'] = $request->session()->get('cart', []);
            $data['deleveryCharge'] = 0;
            $check = ApplyCoupon::with('coupon')->where(['user_id' => auth::user()->id])->first();
            $data['vatCharge'] = $data['setting']->vat_rate;
            if($check){
                if($check->coupon->offer_type == '%'){
                    $data['discount'] = ($check->coupon->discount / 100);
                }else{
                    $data['discount'] = $check->coupon->discount;
                }
            }else{
                $data['discount'] = 0;
            }

            $data['cart_data'] =  Cart::where('user_id',auth::user()->id)->first();

            return view('Frontend.Pages.pickup',$data);
        }else{
            $message = trans('translate.Please login first');
            $notification = array('message' => $message, 'alert-type' => 'error');
            return redirect()->route('login')->with($notification);
        }
    }

    public function inResturent(Request $request){
        if(Auth::user()){
            $data['seo_setting'] =  SeoSetting::where('id',12)->first();
            $data['setting'] =  Setting::first();
            $data['app'] =  MobileApp::first();
            $data['section'] =  SectionTitel::first();
            $data['slots'] = TimeSlot::orderBy('id','asc')->get();
            $data['contact'] = ContactUs::first();
            $data['branchs'] = Admin::where('status',1)->orderBy('id','asc')->get();
            $data['cart'] = $request->session()->get('cart', []);
            $data['deleveryCharge'] = 0;
            $check = ApplyCoupon::with('coupon')->where(['user_id' => auth::user()->id])->first();
            $data['vatCharge'] = $data['setting']->vat_rate;
            if($check){
                if($check->coupon->offer_type == '%'){
                    $data['discount'] = ($check->coupon->discount / 100);
                }else{
                    $data['discount'] = $check->coupon->discount;
                }
            }else{
                $data['discount'] = 0;
            }

            $data['cart_data'] =  Cart::where('user_id',auth::user()->id)->first();

            return view('Frontend.Pages.inrestaurant',$data);
        }else{
            $message = trans('translate.Please login first');
            $notification = array('message' => $message, 'alert-type' => 'error');
            return redirect()->route('login')->with($notification);
        }
    }

    public function applyCoupon(Request $request)
    {
        $coupon = Coupon::where(['code' => $request->coupon, 'status' => 'active'])->first();

        if (!$coupon) {
            $message = trans('Your provided coupon is invalid');
            return $request->ajax()
                ? response()->json(['status' => 'error', 'message' => $message])
                : redirect()->back()->with(['message' => $message, 'alert-type' => 'error']);
        }

        if ($coupon->expired_date < date('Y-m-d')) {
            $message = trans('Your provided coupon has expired');
            return $request->ajax()
                ? response()->json(['status' => 'error', 'message' => $message])
                : redirect()->back()->with(['message' => $message, 'alert-type' => 'error']);
        }

        if ($coupon->apply_qty >= $coupon->max_quantity) {
            $message = trans('Your provided coupon limit is exceeded');
            return $request->ajax()
                ? response()->json(['status' => 'error', 'message' => $message])
                : redirect()->back()->with(['message' => $message, 'alert-type' => 'error']);
        }

        $userId = auth()->user()->id;
        $cart = Cart::where('user_id', $userId)->first();

        if (!$cart) {
            $message = trans('No active cart found');
            return $request->ajax()
                ? response()->json(['status' => 'error', 'message' => $message])
                : redirect()->back()->with(['message' => $message, 'alert-type' => 'error']);
        }

        //  Prevent adding more than one coupon to a order
        if (!empty($cart->coupon_id)) {
            $message = trans('You already applied a coupon to this order');
            return $request->ajax()
                ? response()->json(['status' => 'error', 'message' => $message])
                : redirect()->back()->with(['message' => $message, 'alert-type' => 'error']);
        }

        // Check if this user has used this coupon before (in any past order)
        $hasUsedBefore = ApplyCoupon::where(['user_id' => $userId, 'copun_id' => $coupon->id])->exists();
        if ($hasUsedBefore) {
            $message = trans('You have already used this coupon before');
            return $request->ajax()
                ? response()->json(['status' => 'error', 'message' => $message])
                : redirect()->back()->with(['message' => $message, 'alert-type' => 'error']);
        }

        ApplyCoupon::create([
            'user_id' => $userId,
            'copun_id' => $coupon->id,
        ]);

        //  Store original total before any discount (only once)
        if (is_null($cart->total_before_discount)) {
            $cart->total_before_discount = $cart->grand_total;
        }

        $baseTotal = $cart->total_before_discount ?? $cart->grand_total;

        //  Calculate discount
        $discountAmount = $coupon->offer_type === '%'
            ? $baseTotal * ($coupon->discount / 100)
            : $coupon->discount;

        $grandTotal = max(0, $baseTotal - $discountAmount);

        $cart->update([
            'discount_amount' => $discountAmount,
            'grand_total' => $grandTotal,
        ]);

        $cart->update([
            'discount_amount' => $discountAmount,
            'grand_total' => $grandTotal,
        ]);

        $message = trans('Coupon applied successfully');

        if ($request->ajax()) {
            return response()->json([
                'status' => 'success',
                'message' => $message,
                'discount_amount' => number_format($discountAmount, 2),
                'grand_total' => number_format($grandTotal, 2),
            ]);
        }

        return redirect()->back()->with(['message' => $message, 'alert-type' => 'success']);
    }



    public function processOrder(Request $request){

        $req_type =$request->type;
        if(Auth::user()){

            $rules = [
                'delevery_day'=>'required',
                'delevery_time'=>'required',
                'branch'=>'required',
            ];
            $customMessages = [
                'delevery_day.required' => trans('translate.Delivery day is required'),
                'delevery_time.required' => trans('translate.Delivery time is required'),
                'branch.required' => trans('translate.Branch is required'),
            ];
            $this->validate($request, $rules,$customMessages);

            if( $request->type == 'delivery'){
                if($request->address_id == ''){
                     $message = 'Address is required';
                    $notification = array('message' => $message, 'alert-type' => 'error');
                    return redirect()->back()->with($notification);
                }
                $findAddress = Addresse::where('id',$request->address_id)->first();
                if($findAddress){
                    $shipping = DeleveryArea::where('id',$findAddress->area_id)->first();
                    if($shipping){
                         $delevery_charge = $shipping->fee;
                    }else{
                         $delevery_charge = 0;
                    }
                }else{
                     $delevery_charge = 0;
                }
            }else{
                 $delevery_charge = 0;
            }
            $check = Cart::where(['user_id' => auth::user()->id])->first();
            if($check){
                $cart = Cart::find($check->id);
                $cart->user_id = auth::user()->id;
                $cart->type = $req_type;
                $cart->number_of_gest = $request->number_of_gest;
                $cart->address_id = $request->address_id;
                $cart->delevery_day = $request->delevery_day;
                $cart->delevery_time_id = $request->delevery_time;
                $cart->discount_amount = $request->discount_amount;
                $cart->delevery_charge = $delevery_charge;
                $cart->vat_charge = $request->vat_charge;
                $cart->total = $request->total;
                $cart->grand_total = $request->grand_total + $delevery_charge;
                $cart->save();
            }else{
                $cart = new Cart();
                $cart->user_id = auth::user()->id;
                $cart->type = $req_type;
                $cart->number_of_gest = $request->number_of_gest;
                $cart->address_id = $request->address_id;
                $cart->delevery_day = $request->delevery_day;
                $cart->delevery_time_id = $request->delevery_time;
                $cart->discount_amount = $request->discount_amount;
                $cart->delevery_charge = $delevery_charge;
                $cart->vat_charge = $request->vat_charge;
                $cart->total = $request->total;
                $cart->grand_total = $request->grand_total + $delevery_charge;
                $cart->save();

            }

            return redirect()->route('select.payment.method');

        }else{
            $message = trans('translate.Please login first');
            $notification = array('message' => $message, 'alert-type' => 'error');
            return redirect()->route('login')->with($notification);
        }
    }

    public function selectPayment(Request $request){
        $data['razorpay'] = RazorpayPayment::first();
        $data['paypal_payment'] = PaypalPayment::first();
        $data['paystack'] = PaystackAndMollie::first();
        $data['flutterwave'] = Flutterwave::first();
        $data['stripe'] = StripePayment::first();
        $data['bankPayment']  = BankPayment::first();
        $data['instamojo'] = InstamojoPayment::first();

        $data['seo_setting'] =  SeoSetting::where('id',12)->first();
        $data['setting'] =  Setting::first();
        $data['app'] =  MobileApp::first();
        $data['section'] =  SectionTitel::first();
        $data['cart_data'] =  Cart::where('user_id',auth::user()->id)->first();
        $data['cart'] = $request->session()->get('cart', []);
        $cart =  Cart::where('user_id',Auth::user()->id)->first();
        $data['order_total'] =  $cart->grand_total;

        return view('Frontend.Pages.select_payment',$data);
    }

    public function checkOut(Request $request){
        $cart_detils = Cart::where(['user_id' => auth::user()->id])->first();
         $cartData = $request->session()->get('cart', []);

        $payment_method = "CashOnDelivery";
        $payment_status = "Pending";

        $order = new Order();
        $order->user_id = auth::user()->id;
        $order->type = $cart_detils->type;
        $order->number_of_gest = $cart_detils->number_of_gest;
        $order->address_id = $cart_detils->address_id;
        $order->delevery_day = $cart_detils->delevery_day;
        $order->delevery_time_id = $cart_detils->delevery_time_id;
        $order->discount_amount = $cart_detils->discount_amount;
        $order->delevery_charge = $cart_detils->delevery_charge;
        $order->vat_charge = $cart_detils->vat_charge;
        $order->total = $cart_detils->total;
        $order->grand_total = $cart_detils->grand_total;
        $order->payment_method = $payment_method;
        $order->payment_status = $payment_status;
        $order->order_status = 1;

        if($order->save()){
            // Save order items
            foreach ($cartData as $item) {
                OrderItem::create([
                    'order_id' => $order->id,
                    'product_id' => $item['product_id'],
                    'size' => $item['size'],
                    'addons' => $item['addons'],
                    'qty' => $item['qty'],
                    'total' => $item['total'],
                ]);
            }

            Cart::where('user_id', auth()->user()->id)->delete();
            // ApplyCoupon::where('user_id', auth()->user()->id)->delete();
            Session::forget('cart');
        }

        $message = trans('translate.Thanks for your order. Your order has been placed');
        $notification = array('message' => $message, 'alert-type' => 'success');
        return redirect()->route('index')->with($notification);
    }


}
