<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request){
        $validatedData = $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);
        // print_r($validatedData);
        // die();
    
        // Send the email using the validated data
        Mail::to('info@chikuweb.in')->send(new ContactFormMail($validatedData));
    
        // return redirect('/contact')->with('success', 'Your message has been sent successfully!');

    }
   
}
