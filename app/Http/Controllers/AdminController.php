<?php



namespace App\Http\Controllers;





use App\Models\about;



use App\Models\formads;

use App\Models\Geoip;
use App\Models\Slider;

use App\Models\User;

use Shetabit\Visitor\Models\Visit;



class AdminController extends Controller

{

    public function index()

    {



        $countslider=Slider::all()->count();

        $countformads=formads::all()->count();

        $countabout=about::all()->count();

        $countuser=User::all()->count();
        $geoip=Geoip::all();
        $geoipcount=Geoip::all()->count();

        return view('admin.admin',compact('countslider','countformads','countabout','countuser','geoip','geoipcount'));

   }

  public function showpage()
    {
        return redirect('login');
   }

}

