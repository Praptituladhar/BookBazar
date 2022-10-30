<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Models\User;
use App\Models\Admin;
use App\Models\Cart;
use App\Models\Productentry;

use App\Models\checkout;
use Validator,Redirect,Response,File;
Use App\Image;
Use App\Post;
use Hash;
use Session;


class AuthController extends Controller
{
    public function welcome() {
        $addcategory = DB::select('select* from addcategory');
        $productentry = DB::table('productentry')
        ->join('addcategory','productentry.category_name','=','addcategory.add_category')
        ->select('addcategory.*','productentry.*')
        ->limit(4)
        ->get();
        return view('welcome',['productentry' => $productentry,'addcategory' => $addcategory]);
        // return view('welcome');
    }
   
    public function aboutus() {
        return view('aboutus');
    }
    public function products() {
        // condition for display of category
        $productentry = DB::table('productentry')
        ->join('addcategory','productentry.category_name','=','addcategory.add_category')
        ->select('productentry.*')
        ->where('productentry.category_name','=','Classic Ratan Big Adult Single Seater')
        ->get();
        return view('products',['productentry' => $productentry]);
    }
    public function products2() {
        // condition for display of category
        $productentry = DB::table('productentry')
        ->join('addcategory','productentry.category_name','=','addcategory.add_category')
        ->select('productentry.*')
        ->where('productentry.category_name','=','Classic Rattan Double Seater')
        ->get();
        return view('products2',['productentry' => $productentry]);
    }
    public function products3() {
        // condition for display of category            
        $productentry = DB::table('productentry')
        ->join('addcategory','productentry.category_name','=','addcategory.add_category')
        ->select('productentry.*')
        ->where('productentry.category_name','=','Premium Elegance Rattan Big Adult Single Seater')
        ->get();
        return view('products3',['productentry' => $productentry]);
    }
    public function products4() {
        // condition for display of category
        $productentry = DB::table('productentry')
        ->join('addcategory','productentry.category_name','=','addcategory.add_category')
        ->select('productentry.*')
        ->where('productentry.category_name','=','Premium Fancy Rattan Single Seater')
        ->get();
        return view('products4',['productentry' => $productentry]);
    }
    function search(Request $req) {
        $products = DB::table('productentry')
        ->where('pname', 'like', '%'.$req->input('query').'%')
        ->get();
        return view('/search',['productentry'=>$products]);
    }
    public function services() {
        return view('services');
    }
    public function deliveryinfo() {
        return view('deliveryinfo');
    }
    public function warrenty() {
        return view('warrenty');
    }
    public function quality() {
        return view('quality');
    }
    public function gallery() {
        return view('gallery');
    } 
    public function descriptionFxn($id) {
        $product = Productentry::find($id);
        return view('description',compact('product'));
    }
    public function checkout() {
        $productentry = DB::table('cart')
        ->join('productentry','cart.product_id','=','productentry.id')
        ->select('productentry.*','cart.id as cart_id')
        ->get();
        $total = DB::table('cart')
        ->join('productentry','cart.product_id','=','productentry.id')
        ->select('productentry.*','cart.id as cart_id')->sum('productentry.current_price');
        return view('checkout',['productentry' => $productentry, 'total' => $total]);
    }
    public function postcheckout(Request $request) {
        $request->validate(
            [
                'email' => 'required|email'
            ]
        );
        $name = $request->input('name');
        $email = $request->input('email');
        $mobile = $request->input('mobile');
        $address = $request->input('address');
        $city = $request->input('city');
        return redirect('https://uat.esewa.com.np/epay#/');
    }
    function removefromCart($id) {
        Cart::destroy($id);
        return redirect('/');
    }
    public function insertform(){
        return view('insertform');
        }
    public function create(Request $request){
    $first_name = $request->input('first_name');
    $last_name = $request->input('last_name');
    $city_name = $request->input('city_name');
    $email = $request->input('email');
    $data=array('first_name'=>$first_name,"last_name"=>$last_name,"city_name"=>$city_name,"email"=>$email);
    DB::table('form')->insert($data);
    echo "Record inserted successfully.<br/>";
    echo '<a href = "/insert">Click Here</a> to go back.';
    }
    public function privacy_policy(){
        return view('privacy_policy');
    }

    public function verify(Request $request)
    {
        $status = $request->q;
        $oid = $request->oid;
        $refID = $request->refId;
        $amt = $request->amt;

        $url = "https://uat.esewa.com.np/epay/transrec";
        $data =[
            'amt'=> $amt,
            'rid'=> $refID,
            'pid'=>'890y-0984-dujs6700',
            'scd'=> 'EPAYTEST'
        ];

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($curl);
        curl_close($curl);
        if(strpos($response, "Success") == true){
            // dd('transaction was successful');
            return view('/success');
        }else{
            // dd('transaction was not successful');
            return view('/fail');
        }
    }
    public function success(){
        return view('success');
    }
    public function fail(){
        return view('fail');
    }
}
