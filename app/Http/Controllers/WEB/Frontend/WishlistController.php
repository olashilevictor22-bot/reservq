<?php

namespace App\Http\Controllers\WEB\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Wishlist;

class WishlistController extends Controller
{
    public function index()
    {
        $wishlist = session('wishlist', []);

        return $wishlist;
    }

    public function add($product_id)
    {

        if (auth()->check()) {
            $user_id = auth()->user()->id;
            if (!Wishlist::where('user_id', $user_id)->where('product_id', $product_id)->exists()) {
                Wishlist::create(['user_id' => $user_id, 'product_id' => $product_id]);

                $message = trans('translate.Item added to wishlist');
                $notification = ['message' => $message, 'alert-type' => 'success'];
            } else {
                $message = trans('translate.Item already added in wishlist');
                $notification = ['message' => $message, 'alert-type' => 'error'];
            }
        } else {
            $message = trans('translate.You have to login first');
            $notification = ['message' => $message, 'alert-type' => 'error'];
            return redirect()->route('login')->with($notification);
        }

        return redirect()->back()->with($notification);

    }

    public function remove($product_id)
    {
        if (auth()->check()) {
            $user_id = auth()->user()->id;
            Wishlist::where('user_id', $user_id)
                    ->where('product_id', $product_id)
                    ->delete();
            $message = trans('translate.Item removed successfully');
            $notification = ['message' => $message, 'alert-type' => 'success'];
        } else {
            $message = trans('translate.You have to login first');
            $notification = ['message' => $message, 'alert-type' => 'error'];
        }

        return redirect()->back()->with($notification);
    }
}
