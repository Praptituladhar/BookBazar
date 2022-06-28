<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomepageController extends Controller
{
    public function display()
    {
        return view('homepage');
    }
    public function search(Request $request)
    {
        $search = $request->input('search');
        $books = DB::table('book')
                     ->where('title', 'LIKE', "%{$search}%")
                     ->orWhere('body', 'LIKE', "%{$search}%")
                     ->get();
        return view('search', compact('books'));

    }
    public function playcard()
    {
        return view('playcard');
    }
    public function policy()
    {
        return view('privacy_policy');
    }
}
