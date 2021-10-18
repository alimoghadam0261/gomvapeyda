<?php

namespace App\Http\Controllers;

use http\Client\Curl\User;
use Illuminate\Http\Request;
use App\Http\Requests\PasswordresetRequest;

class RestPasswordController extends Controller
{
    public function index()
    {
        return view('auth.passwords.reset');
    }


    public function changepassword( PasswordresetRequest $request)
    {



        $user=User::find($request->id);
        $user->pasword = bcrypt ($request->password) ;
        $user->update();


    }

}
