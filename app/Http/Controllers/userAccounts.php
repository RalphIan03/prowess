<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userAccounts extends Controller
{
    public function userpage(){
        return view('admin.users');
    }
}
