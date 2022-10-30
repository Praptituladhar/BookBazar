<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Producentry;
use App\Models\addcategory;
use Validator,Redirect,Response,File;
Use App\Image;
use Hash;
use Session;

class AdminController extends Controller
{
    public function productentry() {
        // $addcategory = Admin::addcategory()->id;
        $addcategory = DB::select('select* from addcategory');
        return view('productentry',['addcategory' => $addcategory]);
    }
    public function addcategory() {
        return view('addcategory');
    }
    public function admin() {
        return view('admin');
    }

    public function postadmin(Request $request) {

        $request->validate(
            [
                'pname'=> 'required|max:30',
                'pcategory'=> 'required',
                'current_price'=> 'required|min:0',
                'description'=> 'required',
                'quantity'=> 'required|min:1',
                'photo' => 'photo | mimes: jpeg, png, jpg, gif, svg',
                'author' => 'required',
                'isbn' => 'integer',
                'format' => 'string',
                'language' => 'required',
                'release_date' => 'date',
                'publisher' => 'string',
                'pages' => 'integer',
                'condition' => 'string'
            ]
        );
        $data = $request->all;

        try {
            $photo = $request->file('fileUpload');
            $new_name = rand() . '.' . $photo->getClientOriginalExtension(); 
            $photo->move(public_path("images"), $new_name);
           
            $insert_array =
                [
                    'pname'=> $data['pname'],
                    'pcategory'=> $data['pcategory'],
                    'current_price'=> $data['current_price'],
                    'description'=> $data['description'],
                    'quantity'=> $data['quantity'],
                    'author'=>$data['author'],
                    'isbn'=> $data['isbn'],
                    'format'=> $data['format'],
                    'language'=> $data['language'],
                    'release_date'=> $data['release_date'],
                    'publisher'=> $data['publisher'],
                    'pages'=> $data['pages'],
                    'condition'=> $data['condition'],
                    'photo' => $new_name,
                    'created_at' => now(),
                    'updated_at' => now()
                ];
            Admin::create($insert_array);
            Session::flash('success','Your data was successfully stored.');
        }
        catch(Exception $ex){
            return redirect('admin');
        }
        return redirect('home');
    }
    public function postproductentry(Request $request){
        $request->validate(
            [
                'photo1' => 'photo1 | mimes: jpeg, png, jpg, gif, svg',
            ]
        );
        $photo1 = $request->file('img1');

        $new_name1 = rand() . '.' . $photo1->getClientOriginalExtension(); 

        $photo1->move(public_path("images"), $new_name1);

        $pname = $request->input('pname');
        $category_name = $request->input('category_name');
        $current_price = $request->input('current_price');
        $description = $request->input('description');
        $author = $request->input('author');
        $isbn = $request->input('isbn');
        $format = $request->input('format');
        $quantity = $request->input('quantity');
        $language = $request->input('language');
        $release_date = $request->input('release_date');
        $publisher = $request->input('publisher');
        $pages = $request->input('pages');
        $condition = $request->input('condition');
        
        $data = array (
            'pname' => $pname,
            'category_name' => $category_name,
            'current_price' => $current_price,
            'description' => $description,
            'quantity' => $quantity,
            'author' => $author,
            'isbn' => $isbn,
            'format' => $format,
            'language' => $language,
            'release_date' => $release_date,
            'publisher' => $publisher,
            'photo1' => $new_name1,
            'pages' => $pages,
            'condition' => $condition,
            'created_at' => now(),
            'updated_at' => now()
        );

        DB::table('productentry')->insert($data);
        Session::flash('success','Your data was successfully stored.');
        return redirect('productentry');
    }

    public function postaddcategory(Request $request){
        $add_category = $request->input('add_category');
        $data = array (
            'add_category' => $add_category
        );
        DB::table('addcategory')->insert($data);
        Session::flash('success','Your data was successfully stored.');
        return redirect('addcategory');
    }
}
