<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\formads;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
       $count= Category::all()->count();

        $cat = Category::where('parrent','0')->get();
        return view('admin.category.index', compact('cat','count'));
    }


    public function create()
    {
        $cat = Category::where('parrent', 0)->get();
        return view('admin.category.create', compact('cat'));
    }


    public function store(Request $request)
    {

        Category::create($request->all());
        return redirect()->back();
    }


    public function show(Category $category)
    {

    }


    public function edit(Category $category)
    {
        $cat = Category::where('parrent', 0)->get();
        return view('admin.category.edit', compact('category','cat'));
    }


    public function update(Request $request, Category $category)
    {
        if (isset($request['status'])) {
            $status=$request['status'];
        }
        else{
            $status='off';
        }

$category->update([
    'title'=>$request['title'],
    'sort'=>$request['sort'],
    'parrent'=>$request['parrent'],
    'status'=>$status,

]);
        return redirect()->back();
    }


    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->back();
    }

    public function category(Category $category)
    {

        $formads=$category->formads()->paginate(9);
        return view('category', compact('formads','category'));
}
}
