<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pendingScholarController extends Controller
{
    public function pendingscholar(){
        return view('admin.pendingStudent');
    }
}
