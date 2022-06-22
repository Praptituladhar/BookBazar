<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Add_item;
use Validator,Redirect,Response,File;
Use App\Image;
use Hash;
use Session;
class AdditemController extends Controller
{
    public function add_item_form()
    {
        $category = DB::table('category')->select('category')->get();
        return view ('add_item', ['category'=>$category]);
    }
    public function postaddbook(Request $request)
    {
        $request->validate([
            'bookName'=>'required',
            'author'=>'required',
            'isbn'=>'required|integer',
            'description'=>'required',
            'filepath'=>'required',
            'price'=>'required|integer',
            'condition'=>'required'
        ]);
        $query = DB::table('book')->insert([
            'bookname'=>$request->input('bookName'),
            'author'=>$request->input('author'),
            'isbn'=>$request->input('isbn'),
            'description'=>$request->input('description'),
            'image'=>$request->input('filepath'),
            'price'=>$request->input('price'),
            'condition'=>$request->input('condition')
        ]);
        if($query)
        {
            return redirect()->back()->with('success', 'Your book description has been added');   
        }
        else
        {
            return redirect()->back()->with('unsucessful', 'Your book description has not been added');   
        }
    }
    public function add_category_form()
    {
        return view('add_category');
    }
    public function postaddcategory(Request $request)
    {
        $request->validate([
            'category'=>'required'
        ]);
        $query = DB::table('category')->insert(['category'=>$request->input('category')]);
        if($query)
        {
            return redirect('/add_item')->with('success', 'Your book category has been added');   
        }
        else
        {
            return redirect()->back()->with('unsucessful', 'Your book category has not been added');   
        }
    }
    
}
