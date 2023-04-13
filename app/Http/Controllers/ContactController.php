<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(Request $request)
    {



        return view('contact');

    }



    public function save_contact(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $subject = $request->subject;
        $message = $request->message;
        $data = [
            "name" => $name,
            "email" => $email,
            "subject" => $subject,
            "message" => $message,
        ];
        $contact_obj = Contact::create($data);
        return redirect()->route('contact')->with('success', 'Successfully Saved');
    }

}