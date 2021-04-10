<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\App;

class ContactController extends Controller
{
    public function submit(ContactRequest $req) {
        $contact = new Contact();
        $contact->name = $req->input('name');
        $contact->phone = $req->input('phone');
        $contact->email = $req->input('email');
        $contact->message = $req->input('message');

        $contact->save();

        return redirect()->route('home')->with('success', 'Сообщение отправлено');


    }

    public function allData(){
        $contact = new Contact();
        return view('messages', ['data' => Contact::orderBy('created_at','desc') -> paginate(6)]);
    }

    public function messagesAdmin(){
        $contact = new Contact();
        return view('main-dashboard', ['data1' => Contact::orderBy('created_at','desc') -> paginate(3)]);
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
        $currentLocale = App::getLocale();
        return redirect() ->back();

    }

}
