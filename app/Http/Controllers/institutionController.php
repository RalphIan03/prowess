<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class institutionController extends Controller
{
   public function heipage(){
    return view('admin.hei');
   }

   public function industrypage(){
    return view('admin.industry');
   }

   public function reportpage(){
    return view('admin.institutionReport');
   }
}
