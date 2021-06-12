<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\FeedbackMail;

class FeedbackController extends Controller
{
    public function send() {
        $comment = 'Уведомление о том, что на сайт пришло сообщение';
        $toEmail = "liudmila.kurtis@mail.ru";
        Mail::to($toEmail)->send(new FeedbackMail($comment));
        return 'Сообщение отправлено на адрес '. $toEmail;
    }
}
