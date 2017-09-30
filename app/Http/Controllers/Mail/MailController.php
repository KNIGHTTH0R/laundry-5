<?php

namespace App\Http\Controllers\Mail;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mail;

class MailController extends Controller
{
    /*
    * create basic email function 
    * @return email/email view
    */ 
    public function basic_email()
    {
        $data=['name'=>'Laundry'];
        Mail::send(['text'=>'mail/mail'], $data, function($message)
        {
            $message->to('edyang91@hotmail.com','Zihang Yang')->subject('Send mail from laravel with Laundry');
            $message->from('aip_laundry@163.com','Laundry');
        });
        echo "Basics Email was sent!";
    }
}
