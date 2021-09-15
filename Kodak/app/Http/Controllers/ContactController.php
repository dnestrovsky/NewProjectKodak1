<?php

namespace App\Http\Controllers;

use App\Mail\FeedbackMail;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(ContactRequest $req) {
        $contact = new Contact();
        $contact->name = $req->input('name');
        $contact->phone = $req->input('phone');
        $contact->email = $req->input('email');
        $contact->message = $req->input('message');


        $toEmail = "kodak.floresti@mail.ru"; //почта для получения всех писем
        Mail::to($toEmail)->send(new FeedbackMail($contact));
//        Mail::to($data->email)->send(new FeedbackMail($data));

        $contact->save();
        return redirect()->route('contact')->with('success', 'Сообщение отправлено!');
    }

    public function allData(){
        return view('messages', ['data' => Contact::orderBy('created_at','desc') -> paginate(3)]);
    }

    public function messagesAdmin(){
        return view('main-dashboard', ['data1' => Contact::orderBy('created_at','desc') -> paginate(4)]);
    }

    public function showmessage($id){
        $contact = new Contact();
        return view('one-message', ['data' => $contact->find($id)]);
    }

    public function deleteMessage($id){
        Contact::find($id)->delete();
        return redirect()->route('messages-data')->with('success', 'Сообщение было удалено');
    }

    public function changeLocale($locale){
        session(['locale'=> $locale]);
        App::setLocale($locale);
        return redirect() ->back();

    }

}
