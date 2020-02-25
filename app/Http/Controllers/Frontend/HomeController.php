<?php

namespace App\Http\Controllers\Frontend;

use App\Service;
use App\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class homeController extends Controller
{
   public function index(){
       $sliders = Slider::all();
//       $services = Service::all()->take(3);
       return view('frontend.home',compact('sliders'));
   }
}
