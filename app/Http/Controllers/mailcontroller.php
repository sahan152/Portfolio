<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\contactmail;

class mailcontroller extends Controller
{
    function sendcontactmail(Request $request){
        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');
        $details = [
            'title'=>'New Message From '.$name,
            'message'=>$message,
            'name'=>$name,
            'email'=>$email,
        ];
        
        $sent = Mail::to('sahansandeepa152@gmail.com')->send(new contactmail($details));
        if ($sent) {
            return back()->with('success', 'Email sent successfully!');
        } else {
            return back()->with('error', 'Failed to send email');
        }
    }
}
