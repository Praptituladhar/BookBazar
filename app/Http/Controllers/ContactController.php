<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Contact;
use Validator,Redirect,Response,File;
use Session;

class ContactController extends Controller
{
    public function contact() {
        return view('contact');
    }
    public function postcontact(Request $request) {
        $request->validate(
            [
              'name'=> 'required|max: 30',
              'email'=> 'required|email',
              'phone_number'=> 'required|max:10',
              'message'=> 'required|max: 200',
            ]
          );
          dd($request);
          $data = $request->all();
          try {
            Contact::create(
            [
              'name'=> $data['name'],
              'email'=> $data['email'],
              'phone_number'=> $data['phone_number'],
              'message'=> $data['message']
            ]
          );
          Session::flash('success','Your message has been successfully send.');
        }
          catch(Exception $ex)
          {
            Session::flash('error','Your message has exceeded the limit.');
          }
          return redirect('contact');
    }
}
