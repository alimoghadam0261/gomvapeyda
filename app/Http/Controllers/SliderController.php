<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{

    public function index()
    {
$count=Slider::all()->count();
$sliders=Slider::paginate(5);
return view('admin.slider.index',compact('sliders','count'));
    }


    public function create()
    {
        return view('admin.slider.create');
    }


    public function store(Request $request)
    {
        if ($request['image']) {
            $file =$request['image'];
            $img1 =$this->IamgeUpload($file , 'uploads/slider/');
        }else{
            $img1='img/logo/logo.png';
        }
        $slider= Slider::create([
            'title' => $request['title'],
            'content' => $request['content'],
            'img' => $img1,
            'user_id' => auth()->id()
        ]);
        return redirect()->back();
    }


    public function show(Slider $slider)
    {


    }
    public function edit(Slider $slider)
    {
return view('admin.slider.edit',compact('slider'));

    }


    public function update(Request $request, Slider $slider)
    {
        if ($request['image']) {
            $file =$request['image'];
            $img1 =$this->IamgeUpload($file , 'uploads/slider/');
        }else{
            $img1='img/logo/logo.png';
        }
        $slider->update([
            'title' => $request['title'],
            'content' => $request['content'],
            'img' => $img1,
            'user_id' => auth()->id(),
        ]);

        return redirect()->back();
    }



    public function destroy(Slider $slider)
    {

    }
}
