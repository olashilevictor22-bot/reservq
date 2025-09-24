<?php

namespace App\Http\Controllers\WEB\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\OptionalItem;
use App\Models\Setting;
use Session;
class CartController extends Controller
{
    public function changeTheme($theme){

        if($theme == 1){
            Session::put('selected_theme', 'theme_one');
        }elseif($theme == 2){
            Session::put('selected_theme', 'theme_two');
        }else{
            Session::put('selected_theme', 'theme_one');
        }

        return redirect()->route('index');
    }

    public function addToCart(Request $request ,$product)
    {
        $cart = session()->get('cart', []);
        $existingProduct = collect($cart)->firstWhere('product_id', $product);

        if ($existingProduct) {
            $message = trans('translate.Your requested item already in cart');
            $notification = ['message' => $message, 'alert-type' => 'error'];
        } else {
            // Product does not exist in the cart, add it
            $findProduct = Product::where('id',$product)->first();
            $cartItem = [
                'product_id' => $product,
                'size' => [],
                'addons' => [],
                'qty' => 1,
                'price' => $findProduct->price,
                'total' => $findProduct->price,
            ];

            $cart[] = $cartItem;
            session()->put('cart', $cart);

            $message = trans('translate.Item added to cart successfully');
            $notification = ['message' => $message, 'alert-type' => 'success'];
        }

        return redirect()->back()->with($notification);
    }

    public function addProduct(Request $request)
    {
         $rules = [
            'product_id'=>'required',
            'size'=>'required',
        ];
        $customMessages = [
            'product_id.required' => trans('translate.Product is required'),
            'size.required' => trans('translate.Size is required'),
        ];
        $this->validate($request, $rules,$customMessages);

        list($size, $price) = explode(',', $request['size']);

        $cart = session()->get('cart', []);
        $existingProduct = collect($cart)->firstWhere('product_id', $request->input('product_id'));

        if ($existingProduct) {
            $message = trans('translate.Item already added');
            $notification = ['message' => $message, 'alert-type' => 'error'];
        } else {

            $product_id = $request->input('product_id');
            $size = $size;
            $size_price = $price;
            $addons = $request->input('addons', []);
            $addons_qty = $request->input('addons_qty', []);
            $qty = $request->input('qty', 1);
            $addonsWithQty = [];
            $adonsPrice = 0;

            foreach ($addons as $index => $addon) {
                $quantity = isset($addons_qty[$index]) ? $addons_qty[$index] : 1;
                $addonsWithQty[$addon] = $quantity;

                $findadons = OptionalItem::where('id',$addon)->first();

                if ($findadons) {
                    $adonsPrice += $findadons->price * $quantity;
                }
            }

            $findProduct = Product::where('id',$product_id)->first();

            $price = ($size_price* $qty) + $adonsPrice;

            $cartItem = [
                'product_id' => $product_id,
                'size' => [
                    $size => $size_price,
                ],
                'addons' => $addonsWithQty,
                'addon_price' => $adonsPrice,
                'qty' => $qty,
                'price' => $size_price,
                'total' => $price,
            ];

            $cart[] = $cartItem;
            session()->put('cart', $cart);

            $message = trans('translate.Item added to cart successfully');
            $notification = ['message' => $message, 'alert-type' => 'success'];
        }
        return redirect()->back()->with($notification);
    }

    public function removeProduct(Request $request, $product_id)
    {
        $cart = $request->session()->get('cart', []);
        $productIndex = array_search($product_id, array_column($cart, 'product_id'));
        unset($cart[$productIndex]);
        $cart = array_values($cart);

        $message = trans('translate.Item removed successfully');
        $notification = ['message' => $message, 'alert-type' => 'success'];
        $request->session()->put('cart', $cart);
        return redirect()->back()->with($notification);
    }

    public function cartIncrement(Request $request, $product_id)
    {
        $cart = $request->session()->get('cart', []);
        $productIndex = array_search($product_id, array_column($cart, 'product_id'));

        if ($productIndex !== false) {
            $cart[$productIndex]['qty'] += 1;
            $cart[$productIndex]['total'] =  ($cart[$productIndex]['qty'] * $cart[$productIndex]['price']) + $cart[$productIndex]['addon_price'];
            $request->session()->put('cart', $cart);

            $message = trans('translate.Cart updated successfully');
            $notification = ['message' => $message, 'alert-type' => 'success'];
        } else {
            $message = trans('translate.Product not found');
            $notification = ['message' => $message, 'alert-type' => 'error'];
        }
        return redirect()->back()->with($notification);
    }

    public function cartDecremet(Request $request, $product_id)
    {

        $cart = $request->session()->get('cart', []);
        $productIndex = array_search($product_id, array_column($cart, 'product_id'));
        if ($productIndex !== false) {
            $cart[$productIndex]['qty'] -= 1;
            if ($cart[$productIndex]['qty'] <= 0) {
                unset($cart[$productIndex]);
                $message = trans('translate.Item removed from cart');
            } else {
                $cart[$productIndex]['total'] = ($cart[$productIndex]['qty'] * $cart[$productIndex]['price']) + $cart[$productIndex]['addon_price'];
                $message = trans('translate.Cart updated successfully');
            }
            $cart = array_values($cart);
            $request->session()->put('cart', $cart);
            $notification = ['message' => $message, 'alert-type' => 'success'];
        } else {
            $message = trans('translate.Product not found');
            $notification = ['message' => $message, 'alert-type' => 'error'];
        }

        return redirect()->back()->with($notification);
    }

    public function cartUpdate(Request $request, $product_id)
    {
        list($size, $price) = explode(',', $request['size']);

        $cart = $request->session()->get('cart', []);
        $productIndex = array_search($product_id, array_column($cart, 'product_id'));

        if ($productIndex !== false) {
            $size = $size;
            $size_price = $price;
            $addons = $request->input('addons', []);
            $addons_qty = $request->input('addons_qty', []) ?: [1];
            $qty = $request->input('qty', 1);
            $addonsWithQty = [];
            $adonsPrice = 0;

            foreach ($addons as $index => $addon) {
                $quantity = isset($addons_qty[$index]) ? $addons_qty[$index] : 1;
                $addonsWithQty[$addon] = $quantity;

                $findadons = OptionalItem::where('id', $addon)->first();

                if ($findadons) {
                    $adonsPrice += $findadons->price * $quantity;
                }
            }

            $findProduct = Product::where('id', $product_id)->first();

            $price = ($size_price* $qty) + $adonsPrice;

            // Update the existing item in the cart
            $cart[$productIndex] = [
                'product_id' => $product_id,
                'size' => [
                    $size => $size_price,
                ],
                'addons' => $addonsWithQty,
                'addon_price' => $adonsPrice,
                'qty' => $qty,
                'price' => $size_price,
                'total' => $price,
            ];

            session()->put('cart', $cart);
            $message = trans('translate.Cart updated successfully');
            $notification = ['message' => $message, 'alert-type' => 'success'];
        } else {
            $message = trans('translate.Product not found');
            $notification = ['message' => $message, 'alert-type' => 'error'];
        }

        return redirect()->back()->with($notification);
    }



}
