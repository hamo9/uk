<?php

namespace App\Http\Controllers\User;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class ContactControler extends Controller
{


    public function index()
    {
        return view('pages.contact-us');
        
    }

    public function send_contact(Request $request)
    {

        $email = 'european.nile.university@gmail.com';

        try {
            $maildata = [
                'title' => $request->subject,
                'name' => $request->name,
                'email' => $request->email,
                'message' => $request->message
            ];
    
            Mail::to($email)->send(new ContactMail($maildata));

            return redirect()->back()
                ->with('success', 'Created successfully!');
        } catch (\Exception $e){
            return redirect()->back()
                ->with('error', 'Error during the sending!');
        }

        return redirect()->back()
                ->with('success', 'send successfully!');
    }
}
