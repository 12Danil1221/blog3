<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Mail\Mailer as MailMailer;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailer;
use Illuminate\Support\Facades\Mail as FacadesMail;
use Mail;
use Symfony\Component\Mailer\Mailer as MailerMailer;

class mailController extends Controller
{
    public function send()
    {
        Mail::send(['text' => 'mail'], ['name', 'Web dev blog'], function($message){
            $message->to('danilfilippov04@mail.ru', 'To web dev blog')->subject('Verification email');
            $message->from('danilfilippov04@mail.ru', 'Web dev blog');
        });
    }

    public function __invoke(){

    }
}
