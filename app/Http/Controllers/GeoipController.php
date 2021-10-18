<?php

namespace App\Http\Controllers;


use App\Models\Geoip;
use Illuminate\Http\Request;

class GeoipController extends Controller
{

    public function index()
    {
        $geoip=geoip()->getLocation($_SERVER['REMOTE_ADDR']);
        return view('/geoip',compact('geoip'));
    }


    public function create()
    {
        $geoip=Geoip::all();

        return view('admin.msg.index',compact('geoip'));
    }


    public function store(Request $request)
    {
//        Geoip::create([
//
//            'ip'=>$request['ip'],
//            'country'=>$request['country'],
//            'city'=>$request['city'],
//            'timezone'=>$request['timezone'],
//
//        ]);


        Geoip::create($request->all());
        return redirect()->route('index');




    }

    public function show(Geoip $geoip)
    {
        //
    }


    public function edit(Geoip $geoip)
    {
        //
    }


    public function update(Request $request, Geoip $geoip)
    {
        //
    }


    public function destroy(Geoip $geoip)
    {
        //
    }
}
