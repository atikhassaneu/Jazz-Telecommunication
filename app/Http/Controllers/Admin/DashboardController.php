<?php

namespace App\Http\Controllers\Admin;

use App\Contact;
use App\Service;
use App\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public  function index(){
        $sliders = Slider::all();
        $services = Service::all();
        $unreadContacts = Contact::all()->where('seen',0);

        return view('admin.dashboard.index', compact('sliders','services','unreadContacts'));
    }
}
