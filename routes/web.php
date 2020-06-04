<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Auth::routes();

//********************************GET********************************
//LoginController
Route::get('/login/freelancer', 'Auth\LoginController@showFreelancerLoginForm')->name('freelancer_login');
Route::get('/login/client', 'Auth\LoginController@showClientLoginForm')->name('client_login');

//RegisterController
Route::get('/register/freelancer', 'Auth\RegisterController@showFreelancerRegisterForm')->name('freelancer_register');
Route::get('/register/client', 'Auth\RegisterController@showClientRegisterForm')->name('client_register');

//ClientController
Route::get('/client', 'ClientController@clientDashboard')->name('client_dashboard');

//AdminController
Route::get('/freelancer', 'FreelancerController@FreelancerDashboard')->name('freelancer_dashboard');
Route::get('/freelancer/profile', 'FreelancerController@FreelancerShowProfile')->name('freelancer_profile');

//HomeController
Route::get('/home', 'HomeController@index')->name('home');

//********************************POST********************************
//LoginController
Route::post('/login/freelancer', 'Auth\LoginController@FreelancerLogin')->name('freelancer_login');
Route::post('/login/client', 'Auth\LoginController@ClientLogin')->name('client_login');

//RegisterController
Route::post('/register/freelancer', 'Auth\RegisterController@createFreelancer')->name('freelancer_register');
Route::post('/register/client', 'Auth\RegisterController@createClient')->name('client_register');

//FreelancerController
Route::post('/freelancer/firstname', 'FreelancerController@firstName')->name('freelancer_firstname');
Route::post('/freelancer/lastname', 'FreelancerController@lastName')->name('freelancer_lastname');
Route::post('/freelancer/about', 'FreelancerController@About')->name('freelancer_about');
Route::post('/freelancer/categroy', 'FreelancerController@Category')->name('freelancer_category');

