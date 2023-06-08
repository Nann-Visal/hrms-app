<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::fallback(function () {
    return "<h1>Sorry, the page you are looking for is not exist.</h1>";
});

// Route Main Page follow Menu Items
Route::get('/dashboard',function(){
    return view('dashboards.index');
});
Route::get('/projects',function(){
    return view('projects.index-project');
});
Route::get('/tasks',function(){
    return view('projects.index-task');
});
Route::get('/departments',function(){
    return view('departments.index');
});
Route::get('/employees',function(){
    return view('employees.index-employees');
});
Route::get('/takeleaves',function(){
    return view('employees.index-takeleaves');
});
Route::get('/pendingleaves',function(){
    return view('employees.index-pendingleaves');
});
Route::get('/attendants',function(){
    return view('employees.index-attendants');
});
Route::get('/events',function(){
    return view('events.index');
});
Route::get('/payments',function(){
    return view('payments.index');
});
Route::get('/payments',function(){
    return view('payments.index');
});
Route::get('/overtimes',function(){
    return view('overtimes.index');
});

//logut
Route::get('/signin',function(){
    return view('auths.index-signin');
});
Route::get('/signup',function(){
    return view('auths.index-signup');
});