<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Mail\SendRegistrationMail;
use Mail;
class registrationController extends Controller
{
    public function SendRegistrationMail()
    {
        $email = 'positronx@gmail.com';
   
        $maildata = [
            'title' => 'Laravel Mail Sending Example with Markdown',
            'url' => 'https://www.positronx.io'
        ];
  
        Mail::to($email)->send(new SendRegistrationMail($maildata));
   
        dd("Mail has been sent successfully");
    }
}