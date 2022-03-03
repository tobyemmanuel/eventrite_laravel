<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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
    $event = event::all();
    return view('index', compact('event'));
});

Route::get('/home', [HomeController::class, 'redirect']);

Route::get('/add_event_view', [AdminController::class, 'add_view']);

Route::get('/manage_event_view', [AdminController::class, 'manage_event_view']);

Route::post('/upload_event', [AdminController::class, 'upload']);

Route::get('event/{id}', [HomeController::class, 'showEvent']);

Route::post('/eventreg', [HomeController::class, 'eventReg'])->name('event.reg');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
