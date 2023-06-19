<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use App\Models\Product;

class CartController extends Controller
{
    public function getCart(){
        if(Auth::check()){
            $userId =Auth::user()->id;

            $carts = Cart::where('user_id',$userId)->get();
            if(!$carts){
                return view('cart');
            }
            $new_carts = $this->getProductsDetails($carts);
            $total = $this->calculateTotal($new_carts);

            return view('cart',["carts"=>$new_carts, "total"=>$total]);
        }else{
            return redirect()->intended('signup');
        }

    }

    private function calculateTotal($carts){
        $total =0;
        foreach($carts as $cart){
            $total = $total + $cart->product->price;
        }
        return $total;
    }

    private function getProductsDetails($carts){
        $new_carts = [];
        foreach($carts as $cart){
            $product = Product::where('id',$cart->product_id)->first();
            $cart['product'] = $product;
            array_push($new_carts,$cart);
        }
        return $new_carts;
    }


    public function addToCart(Request $request){
        Cart::create($request->all());
        return redirect()->intended('cart');

    }

    public function deleteFromCart(Request $request){
        Cart::where('id',$request->cart_id)->delete();
        return redirect()->intended('cart');
    }
}
