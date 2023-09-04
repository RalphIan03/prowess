<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class scholarReportController extends Controller
{
    public function scholReport(){
        return view('admin.scholarReport');
    }
}
