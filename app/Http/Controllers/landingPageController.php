<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class landingPageController extends Controller
{
    public function landing(){
        return view('LandingPage.landinpage');
    }
}
