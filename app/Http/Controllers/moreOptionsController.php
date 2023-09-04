<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class moreOptionsController extends Controller
{
    public function emailpage(){
        return view('admin.email');
    }
}
