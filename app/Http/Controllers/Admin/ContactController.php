<?php

namespace App\Http\Controllers\Admin;

use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index(){
        $contacts = Contact::simplePaginate(4);
        return view("admin.contact.index",compact('contacts'));
    }

    public function show($id){
        $contact = Contact::find($id);
        $contact->seen = 1;
        $contact->save();
        return view ('admin.contact.show',compact('contact'));
    }

    public function destroy($id){
        $contact = Contact::find($id);
        $contact->delete();
        return redirect()->back();
    }
}
