<?php

namespace App\Http\Controllers;
use App\Mail\test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Controller
{

    public function send(Request $request) {

        
        $userName = $request->input('userName');
        $email = $request->input('email');
        $content = (string) $request->input('content');
        $subject = $request->input('subject');
   
        $response = Mail::to($email)->send(new test($userName,  $subject, $content));

        
        

        return view('alert', ['userName' => $userName, "content" => $content, 'subject' => $subject]);


    }
    

}
