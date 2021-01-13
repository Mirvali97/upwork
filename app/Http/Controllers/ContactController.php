<?php

namespace App\Http\Controllers;
use App\Contact;

use Dotenv\Validator;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ContactController extends Controller
{
     public function index(){
         return view('contact');
     }




     public function store(Request $request){
         $data = request()->validate([
            'name' => 'required|min:7',
            'surname' => 'required',
            'message' => 'required',
            'email' => 'required',
            'phone' => 'required',
         ]);
         $message = new Contact();
         $message->name = $request->name;
         $message->surname = $request->surname;
         $message->message = $request->message;
         $message->email = $request->email;
         $message->phone = $request->phone;
         $message->save();
         return redirect('/');
     }

}
