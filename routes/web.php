<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\EventController;
use App\Models\Event;

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

Route::get('/home', function () {
    return view('welcome');
});

Route::resource('/todos', TodoController::class);
// Route::get('/todos', function () {
//     return view('todos');
// });

Route::resource('/events', EventController::class);

Route::get('/calendar', function () {
    return view('calendar');
});

Route::get('/board', function () {
    return view('board');
});

Route::get('/events-feed', function () {
    $path = storage_path() . "/json/events.json";
    return json_decode($events, true);
    // $events = Event::select('title', 'start_time AS start', 'end_time AS end')->get();
    // return json_encode(compact('events')['events']);
});

Route::fallback(function() {
    return view('notfound');
});

Route::get('/db-test', function () {
    try {         
         echo \DB::connection()->getDatabaseName();     
    } catch (\Exception $e) {
          echo 'None';
    }
});

Route::get('/db-migrate', function() {
    Artisan::call('migrate');
    echo Artisan::output();
});


