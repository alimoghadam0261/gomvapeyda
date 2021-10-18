<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class Googleauthcontroller extends Controller
{
    protected $namespaces = 'App\Http\Controllers';


    public function redirect(): \Symfony\Component\HttpFoundation\RedirectResponse
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback()
    {

//        try{
            $googleUser=Socialite::driver('google')->stateless()->user();
            $user=User::where('email',$googleUser->email)->first();
//    dd($googleUser);

            if ($user) {
                auth()->loginUsingId($user->id);
            }
else{
                $newuser=User::create([
                    'name'=>$googleUser->name,
                    'email'=>$googleUser->email,
                    'password'=>bcrypt(\Str::random(14)),
                ]);
                auth()->loginUsingId($newuser->id);
            }
        return redirect()->route('formads.index');


//        }
//        catch(\Exception $e){
//            return "خطا در ارتباط لطفا بعد از چند ثانیه دوباره وارد شوید";
//        }





    }
}
