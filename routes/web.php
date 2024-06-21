<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\OverTimeController;
use App\Http\Controllers\AttendantController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TakeLeaveController;
use App\Http\Controllers\PendingLeaveController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //dashboard action
    Route::controller(DashboardController::class)->name('dashboards.')->group(function(){
        Route::get('/','index')->name('index');
    });

    //project action
    Route::controller(ProjectController::class)->name('projects.')->group(function(){
        Route::get('/projects','index')->name('index-project');
        Route::get('/projects/create','create')->name('create');
        Route::get('/projects/{id}','show')->name('show');
        Route::post('/projects/store','store')->name('store');
        Route::get('/projects/{id}/edit','edit')->name('edit');
        Route::put('/projects/{id}','update')->name('update');
        Route::delete('projects/{id}','destroy')->name('destroy');

    });

    //task action
    Route::controller(TaskController::class)->name('tasks.')->group(function(){
        Route::get('/tasks','index')->name('index-task');
        Route::get('/tasks/create','create')->name('create');
        Route::get('/tasks/{id}','show')->name('show');
        Route::post('/tasks/store','store')->name('store');
        Route::get('/tasks/{id}/edit','edit')->name('edit');
        Route::put('tasks/{id}','update')->name('update');
        Route::delete('tasks/{id}','destroy')->name('destroy');
    });

    //employees action
    Route::controller(EmployeeController::class)->name('employees.')->group(function(){
        Route::get('/employees','index')->name('index-employees');
        Route::get('/employees/create','create')->name('create');
        Route::get('/employees/{id}','show')->name('show');
        Route::post('/employees/store','store')->name('store');
        Route::get('/employees/{id}/edit','edit')->name('edit');
        Route::put('/employees/{id}','update')->name('update');
        Route::delete('/employees/{id}','destroy')->name('destroy');
    });

    //takeleave action
    Route::controller(TakeLeaveController::class)->name('takeleaves.')->group(function(){
        Route::get('/takeleaves','index')->name('index-takeleaves');
        Route::get('/takeleaves/create','create')->name('create');
        Route::get('/takeleaves/{id}','show')->name('show');
        Route::post('/takeleaves/store','store')->name('store');
        Route::get('/takeleaves/{id}/edit','edit')->name('edit');
        Route::put('/takeleaves/{id}','update')->name('update');
        Route::delete('/takeleaves/{id}','destroy')->name('destroy');
    });

    //pendingleave action
    Route::controller(PendingLeaveController::class)->name('pendingleaves.')->group(function(){
        Route::get('/pendingleaves','index')->name('index-pendingleaves');
        Route::get('/pendingleaves/create','create')->name('create');
        Route::get('/pendingleaves/{id}','show')->name('show');
        Route::post('/pendingleaves/store','store')->name('store');
        Route::get('/pendingleaves/{id}/edit','edit')->name('edit');
        Route::put('/pendingleaves/{id}','update')->name('update');
        Route::delete('/pendingleaves/{id}','destroy')->name('destroy');
    });

    //attendant action
    Route::controller(AttendantController::class)->name('attendants.')->group(function(){
        Route::get('/attendants','index')->name('index-attendants');
        Route::get('/attendants/create','create')->name('create');
        Route::post('/attendants/store','store')->name('store');
        Route::get('/attendants/{id}/edit','edit')->name('edit');
        Route::put('/attendants/{id}','update')->name('update');
        Route::delete('/attendants/{id}','destroy')->name('destroy');
    });

    //event action
    Route::controller(EventController::class)->name('events.')->group(function(){
        Route::get('/events','index')->name('index');
        Route::get('/events/create','create')->name('create');
        Route::get('/events/{id}','show')->name('show');
        Route::post('/events/store','store')->name('store');
        Route::get('/events/{id}/edit','edit')->name('edit');
        Route::put('/events/{id}','update')->name('update');
        Route::delete('/events/{id}','destroy')->name('destroy');
    });

    //payment action
    Route::controller(PaymentController::class)->name('payments.')->group(function(){
        Route::get('/payments','index')->name('index');
        Route::get('/payments/create','create')->name('create');
        Route::get('/payments/{id}','show')->name('show');
        Route::post('/payments/store','store')->name('store');
        Route::get('/payments/{id}/edit','edit')->name('edit');
        Route::put('/payments/{id}','update')->name('update');
        Route::delete('/payments/{id}','destroy')->name('destroy');
    });

    //overtime action
    Route::controller(OverTimeController::class)->name('overtimes.')->group(function(){
        Route::get('/overtimes','index')->name('index');
        Route::get('/overtimes/create','create')->name('create');
        Route::post('/overtimes/store','store')->name('store');
        Route::get('/overtimes/{id}/edit','edit')->name('edit');
        Route::put('/overtimes/{id}','update')->name('update');
        Route::delete('/overtimes/{id}','destroy')->name('destroy');
    });
});

require __DIR__.'/auth.php';
