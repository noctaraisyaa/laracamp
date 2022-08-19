<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        $checkouts = Checkout::where('users_id', Auth::user()->id)->get();
       
            return view('dashboard', compact('user', 'checkouts'));
        
    }
}
