<?php

namespace App\Http\Controllers;

use App\Models\about;
use App\Models\Category;
use Illuminate\Http\Request;

class AboutController extends Controller
{

    public function index()
    {
        return  view('aboute');
    }

    public function about()
    {
        return view('admin.msg.index');
}

    public function create()
    {
        $countabout=about::all()->count();
        $about=about::all();
        return view('admin.msg.index',compact('about','countabout'));
    }



    public function store(Request $request)
    {
        about::create($request->all());
        return redirect()->back();
    }


    public function show(about $about)
    {
        //
    }


    public function edit(about $about)
    {
        //
    }


    public function update(Request $request, about $about)
    {
        //
    }


    public function destroy(about $about)
    {
        $about->delete();
        return redirect()->back();

    }
}
