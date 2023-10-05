<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Mealselectcontroller;
use App\Http\Middleware\Authenticate;
use App\Http\Controllers\CalendarController;

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

// 元来の記述
// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });




Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';





// 


// ->middleware('auth');



//下記自分で追記

Route::get('/reset',[UserController::class,'reset'])->name('reset');

Route::get('/bootstrap', function () {
    return view('bootstrap');
});

Route::get('/', function () {
    return view('home.index');
});

Route::get('/logon', function () {
    return view('home.logon');
})->name('logon');


// Route::get('/test', function () {
//     return view('test');
// })->name('test');

Route::get('/recet', function () {
    return view('home.recet');
})->name('recet');

Route::get('/create', function () {
    return view('home.create');
})->name('create');

Route::get('/top', function () {
    return view('home.top');
})->name('top');

Route::get('/testtop', function () {
    return view('testtop');
})->name('testtop');

Route::get('/calendar', function () {
    return view('calendar');})->name('calendar');

// Route::get('/calendar',[CalendarController::class,'show'])->name('calendar');

// Route::get('/events', [\App\Http\Controllers\EventController::class, 'index']);


Route::get('/setEvents',  [\App\Http\Controllers\EventController::class, 'setEvents']);

// Route::get('/setEvents/{user_id}',  [\App\Http\Controllers\EventController::class, 'setEvents']);

Route::get('/test',  [\App\Http\Controllers\EventController::class, 'test'])->name('test');

Route::get('/addform{date}{user_id}',  [\App\Http\Controllers\EventController::class, 'date']);

Route::get('/addform', function () {
    return view('home.addform');
})->name('addform');

Route::get('/editevent{id}',  [\App\Http\Controllers\EventController::class, 'editeventform']);

Route::post('/editupdate',  [\App\Http\Controllers\EventController::class, 'editupdate'])->name('editupdate');


Route::post('/editdelete',  [\App\Http\Controllers\EventController::class, 'editdelete'])->name('editdelete');




// Route::get('/addmenuform', function () {
//     return view('home.addmenuform');
// })->name('addmenuform');

Route::post('/addmenuform',  [\App\Http\Controllers\EventController::class, 'addmenuform'])->name('addmenuform');

Route::get('/addmenuform',  [\App\Http\Controllers\EventController::class, 'addmenuform'])->name('addmenuform');

// Route::post('/schedule-add',[\App\Http\Controllers\EventController::class, 'scheduleAdd'])->name('scheduleAdd');
// Route::post('/ajax/editEventDate',[\App\Http\Controllers\EventController::class, 'editEventDate']);


Route::post('/addmenu',  [\App\Http\Controllers\EventController::class, 'addmenu'])->name('addmenu');

Route::get('/addmenu',  [\App\Http\Controllers\EventController::class, 'addmenu'])->name('addmenu');


Route::post('/addmenber',  [\App\Http\Controllers\EventController::class, 'addmenber'])->name('addmenber');

// Route::get('/addmenberform', function () {
//     return view('home.addmenberform');
// })->name('addmenberform');

Route::post('/addmenberform',  [\App\Http\Controllers\EventController::class, 'addmenberform'])->name('addmenberform');

Route::get('/addmenberform',  [\App\Http\Controllers\EventController::class, 'addmenberform'])->name('addmenberform');
