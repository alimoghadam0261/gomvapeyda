<?php

namespace App\Http\Controllers;

use App\Models\formads;
use App\Models\Geoip;
use Illuminate\Http\Request;
use Notification;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(formads $formads ,Request $request)
    {

        $ipInfo = geoip()->getLocation($_SERVER['REMOTE_ADDR']);

        $geoip = new Geoip();
       $geoipcount=Geoip::all()->count();
//        dd($ipInfo['ip']);
        $geoip->ip = $ipInfo['ip'];
        $geoip->country = $ipInfo['country'];
        $geoip->city = $ipInfo['city'];
        $geoip->timezone = $ipInfo['timezone'];
        $geoip->save();




if (isset($request['txt_search'])) {
    $formads=formads::search($request->all());
    $searchcount=formads::all()->count();
  
}
      else{
          $formads=Formads::where('status','on')->orderBy('id','DESC')->paginate(30);
      }

        $searchcount=formads::all()->count();

    return view('index', compact('formads','searchcount','geoipcount'));






    }
}
