<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Camps;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Carbon\Carbon;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        return view('login');
    }

    public function google(){
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback(){
        $user = Socialite::driver('google')->user();

       
            $finduser = User::where('google_id', $user->id)->first();
            if($finduser){
 
                Auth::login($finduser);
                return redirect('/dashboard');
     
            }
            else{
             
               
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'password' => Hash::make('Helpdesk123'),
                    'updated_at' => null,
                    'google_id' => $user->id
                ]);
          
    
                Auth::login($newUser);
                return redirect('/dashboard');
            
        }
     
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        $request->session()->regenerate();
       Auth::logout();
       return Redirect('login');
    }
}