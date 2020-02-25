<?php

namespace App\Http\Controllers\Admin;

use App\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{

    public function index()
    {
        $services = Service::simplePaginate(4);
        return view('admin.service.index',compact('services'));
    }


    public function create()
    {

    }


    public function store(Request $request)
    {
        $request->validate([
           'title' => 'required',
           'description' => 'required',
           'icon' => 'required'
        ]);

        $service = new Service();
        $service-> title = $request->title;
        $service->description = $request->description;
        $service->icon = $request->icon;
        $service->save();
        return redirect()->route('admin.service.index');
    }

    public function show($id)
    {

    }


    public function edit($id)
    {

    }


    public function update(Request $request)
    {
        $service = Service::find($request->id);
        $service->title = $request->title;
        $service->description = $request->description;
        $service->icon = $request->icon;
        $service->save();
        return redirect()->back();
    }

    public function destroy($id)
    {
        $service  = Service::find($id);
        $service->delete();
        return redirect()->back();
    }
}
