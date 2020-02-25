<?php

namespace App\Http\Controllers\Frontend;

use App\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    public  function index(){
        $services = Service::all();

        return view('frontend.service',compact('services'));
    }

    public  function show($id){
        $service = Service::find($id);
        return view('frontend.single_service',compact('service'));

    }
}
