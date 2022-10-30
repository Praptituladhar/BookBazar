<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Models\User;
use App\Models\Cart;
use App\Models\checkout;

use Validator,Redirect,Response,File;
Use App\Image;
Use App\Post;
use Hash;
use Session;
class CartController extends Controller
{ 
    public function cartlist() {
        
        $productentry = DB::table('cart')
        ->join('productentry','cart.product_id','=','productentry.id')
        ->select('productentry.*','cart.id as cart_id')
        ->get();
        return view('/cartlist',['productentry' => $productentry]);
    }
    public function postcart(Request $req) {
        $cart= new Cart;
        $cart->product_id = $req->product_id;
        $cart->save();
         return redirect('/');
    }
    static function cartitem() {
         return Cart::where('product_id','>',0)->count();
    }
    function removeCart($id) {
        Cart::destroy($id);
        return redirect('cartlist');
    }
}
