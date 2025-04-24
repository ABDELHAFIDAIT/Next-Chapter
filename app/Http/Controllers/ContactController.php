<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function showContact(){
        return view('pages.contact');
    }


    public function sendContactEmail(Request $request){
        $validator = Validator::make($request->all(), [
            'f_name' => 'required|string|max:255',
            'l_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'profession' => 'required|string|max:255',
            'message' => 'required|string|max:5000',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $f_name = $request->input('f_name');
        $l_name = $request->input('l_name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $profession = $request->input('profession');
        $content = $request->input('message');

        $toEmail = 'abdelhafid02002@gmail.com';

        Mail::to($toEmail)->send(new ContactMail($f_name, $l_name, $email, $phone, $profession, $content));

        return redirect()->back();
    }
}
