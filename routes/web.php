<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\institutionController;
use App\Http\Controllers\sampleController;
use App\Http\Controllers\landingPageController;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\moreOptionsController;
use App\Http\Controllers\pendingScholarController;
use App\Http\Controllers\scholarReportController;
use App\Http\Controllers\userAccounts;
use App\Http\Controllers\formController;

Route::get('/',[landingPageController::class, 'landing']);

Route::get('/dashboard',[HomeController::class, 'index']);

Route::get('/login', [logincontroller::class,'loginpage']);

//schoolar menu
Route::get('/scholarinfo',[sampleController::class, 'index']);
Route::get('/pendingscholar', [pendingScholarController::class,'pendingscholar']);
Route::get('/scholarreport',[scholarReportController::class, 'scholReport']);

//instittution menu
Route::get('/hei',[institutionController::class, 'heipage']);
Route::get('/industry',[institutionController::class, 'industrypage']);
Route::get('/institutionreport',[institutionController::class, 'reportpage']);

//moreoptions
Route::get('/email',[moreOptionsController::class, 'emailpage']);

//users
Route::get('/userlist',[userAccounts::class, 'userpage']);

Route::get('/signup',[formController::class, 'signupform']);
Route::get('/industrysignup',[formController::class, 'industryform']);