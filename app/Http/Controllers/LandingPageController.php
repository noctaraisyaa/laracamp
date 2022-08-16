<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Camps;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Carbon\Carbon;
use Illuminate\Support\Facades\App;

class LandingPageController extends Controller
{


    public function index(Request $request)
    {
        $camps = Camps::get();
        return view('landing_page', [
            'camps' => $camps,

        ]);
    }
}