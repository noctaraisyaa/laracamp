<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCheckoutRequest;
use App\Models\Camps;
use App\Models\Checkout;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index(Camps $camps)
    {
        return view('checkout', compact('camps'));
    }

    public function store(StoreCheckoutRequest $request, Camps $camps)
    {
        if($camps->isRegistered){
            return redirect()->route('dashboard')->with('error', "You already checkout the $camps->title bootcamp."); 
        }
        else{
        Checkout::create([
            'users_id' => Auth::user()->id,
            'camps_id' => $camps->id,
            'card_number' => $request->card_number,
            'expired' => $request->expired,
            'cvc' => $request->cvc,

        ]);

        $user = User::where('id', Auth::user()->id)->update([
            'occupation' => $request->occupation
        ]);
    
        return view('success_checkout');
    }
    
   
        // return redirect('/dashboard')->with('error','You have already make your purchases!');
    
    }
}
