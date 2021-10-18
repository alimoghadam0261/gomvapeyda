<?php

namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\formads;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Transaction;
use Shetabit\Visitor\Models\Visit;
use Shetabit\Visitor\Traits\Visitor;


class FormadsController extends Controller
{

    public function index(Request $request ,formads $formats)
    {

        $user=Auth::user();
        $formads=$user->formads();
//        $user=User::all();
        $transaction=Transaction::all();


        $category=Category::where('parrent',0)->get();
//        $test=auth()->user()->name;
//         User::where('name',$test)->with('formads')->get()->sortBy(function($x){
//          $x->formads->count();
//});

        return view('formads',compact('category','formads','user','transaction'));

    }





    public function create()
    {
        $count=formads::all()->count();
        $formads1=Formads::orderBy('id','Desc')->paginate(10);
        $category=Category::where('parrent',0)->get();


        return view('admin.formads.index',compact('formads1','count','category'));
    }


    public function store(Request $request)
    {


        $this->validate($request , [

            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'mojdegani'=>'numeric',
        ]);




        if ($request['img']) {
            $file=$request['img'];
            $img1=$this->IamgeUpload($file,'img/uploads/ads/');
        }
        else {
            $img1='img/logo/logo1.png';
        }
        if($request['status']){
            $status=$request['status'];
        }
        else {
            $status='off';
        }


        $formads= formads::create([
            'name'=>$request['name'],
            'status'=>$status,
            'category'=>$request['category'],
            'price'=>$request['price'],
            'phone'=>$request['phone'],
            'address'=>$request['address'],
            'mojdegani'=>$request['mojdegani'],
            'img'=>$img1,
            'content'=>$request['content'],
            'user_id'=>auth()->user()->id
        ]);
        $formads->categories()->sync($request['category']);

        if($formads['price'] !== 'رایگان')
        {
            return redirect('/transactions/pay?formads_id=' . $formads->id);
        }


        $msg='آگهی شما با موفقیت ثبت شد بعد از بررسی کارشناسان انتشار می باید';

        return redirect()->route('formads.index')->with('success',$msg);

    }


    public function show(formads $formads)
    {

    }

    public function edit(formads $formads)
    {
//        $formads=Formads::orderBy('id','Desc')->paginate(3);
        $category=Category::where('parrent',0)->get();
        return view('admin.formads.edit',compact('formads','category'));
    }

    public function update(Request $request, formads $formads)
    {
        if ($request['img']) {
            $file=$request['img'];
            unlink($formads->img);
            $img1=$this->IamgeUpload($file,'img/uploads/ads/');
        }
        else {
            $img1=$formads->img;
        }

        if (!isset($request['status'])) {
            $status=$request['status'];
        }
        else{
            $status='on';
        }
        $formads->update([
            'name'=> $request['name'],
            'category'=>$request['category'],
            'price'=>$request['price'],
            'phone'=>$request['phone'],
            'address'=>$request['address'],
            'mojdegani'=>$request['mojdegani'],
            'img'=>$img1,
            'status'=>$status,
            'content'=>$request['content']
        ]);


        return redirect()->back();

    }


    public function destroy(formads $formads)
    {

        if ($formads->img!='img/logo/logo1.png') {
            unlink($formads->img);
        }
        $formads->delete();
        return redirect()->back();
    }
    public function del( formads $formads){
        $formads->delete();
        return redirect()->back();
    }


    public function single(formads $formads,Request $request )
    {
//
// $count1= DB::table('formads')->increment('viwecount');
           formads::find($formads->id)->increment('viwecount');

        return view('single',compact('formads'));


    }


}
