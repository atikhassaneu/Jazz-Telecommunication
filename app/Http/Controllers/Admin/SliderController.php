<?php

namespace App\Http\Controllers\Admin;

use App\Slider;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

class SliderController extends Controller
{

    public function index()
    {
        $sliders = DB::table('sliders')->simplePaginate(3);
//        return $sliders;
       return view('admin.slider.index',compact('sliders'));
    }

    public function create()
    {
        return view("admin.slider.create");
    }

    public function store(Request $request)
    {
        $image = $request->file('image');
        if (isset($image)){
            if (!file_exists('uploads/slider')){
                mkdir("uploads/slider",777,true);
            }
            $imageName = str_slug(Carbon::now()).uniqid().".jpg";
            $temp_image = Image::make($image);
            $temp_image->save("uploads/slider/".$imageName);
            $slider = new Slider();
            $slider->img_slug = $imageName;
            $slider->save();
            return redirect()->route("admin.slider.index");
        }else{
            return redirect()->route("admin.slider.index");
        }

    }

    public function show($id)
    {

    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

    }


    public function destroy($id)
    {
        $slider = Slider::find($id);
        if (file_exists("uploads/slider/".$slider->img_slug)){
            unlink("uploads/slider/".$slider->img_slug);
        }
        $slider->delete();
        return redirect()->route("admin.slider.index");
    }
}
