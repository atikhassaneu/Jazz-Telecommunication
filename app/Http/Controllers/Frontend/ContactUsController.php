<?php

namespace App\Http\Controllers\Frontend;

use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactUsController extends Controller
{
    public  function index(){
        return view('frontend.contact-us');
    }
    public function store(Request $request){
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;

        $contact->save();
        session()->flash('success','your contact sent successfully');
        return redirect()->route('contactUs');
    }

}
