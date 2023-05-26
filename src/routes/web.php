<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReplyController;
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('layouts.app', [MainPageController::class]);
//})->name('home');

//Route::get('/dashboard', function () {
//    return view('layouts.dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

//Route::get('/', [AuthenticatedSessionController::class, 'create']);
Route::get('/', [MainPageController::class, 'index'])->name('home.index');
//Route::get('/singleticket/', [MainPageController::class, 'show'])->name('home.show')->parameters(['ticket' => 'ticket:slug']);
//Route::resource('/ticket', TicketController::class)->parameters(['ticket' => 'ticket:slug']);

//Route::get('/ticket/{ticket:slug}/', [TicketController::class, 'show'])->name('guest.ticket.show');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

//    Route::resource('/ticket', TicketController::class);
    Route::resource('/ticket', TicketController::class)->parameters(['ticket' => 'ticket:slug']);

    Route::prefix('/ticket/{ticket:slug}')->group(function () {
        Route::resource('/reply', ReplyController::class);
    });
});

require __DIR__.'/auth.php';
