<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;

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
        return view('messages', ['data' => Contact::orderBy('created_at','desc') -> paginate(4)]);
    }

    public function messagesAdmin(){
        $contact = new Contact();
        return view('main-dashboard', ['data1' => Contact::orderBy('created_at','desc') -> paginate(3)]);
    }

    public function showmessage($id){
        $contact = new Contact();
        return dd($contact->find($id));
        //return view('one-message', ['data' => $contact->find($id)]);
    }

    public function deleteMessage($id){
        Contact::find($id)->delete();
        return redirect()->route('messages-data')->with('success', 'Сообщение было удалено');
    }
}
