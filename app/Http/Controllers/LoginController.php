<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Camps;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Carbon\Carbon;
use Illuminate\Support\Facades\App;

class LoginController extends Controller
{


    public function index(Request $request)
    {
        return view('login');
    }
}