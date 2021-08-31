<?php

namespace App\Http\Controllers;

use App\Mail\testMail;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;

use App\Models\Email;
use Error;

class MailController extends Controller
{

    public function sendMail(){
        return view('mail.send');
    }

    public function sentMail(Request $req){
        //return $req;
        //return Email::all();
        $details = [
            'title' => 'Mail From Geeks And Technology',
            'body' => $req->mail
        ];
        
        Mail::to('arefink9100@gmail.com')->send(new testMail($details));

        $email = new Email;
        $email->mail = $req->mail;
        $done = $email->save();

        if($done){
            echo "Email Has Been Sent";
        }else{
            echo "Error";
        }
        
    }
}
