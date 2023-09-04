<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formController extends Controller
{
    public function signupform(){
        return view('forms.signup-form');
    }


    public function industryform(){
        return view('forms.industry-form');
    }
}
