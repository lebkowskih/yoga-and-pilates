<?php

use App\Http\Controllers\AjaxController;
use App\Livewire\DashboardComponent;
use App\Livewire\HomeComponent;
use App\Livewire\ShowLessons;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', HomeComponent::class)->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', DashboardComponent::class)->name('dashboard');
    Route::get('/lessons', ShowLessons::class)->name('lessons');
    Route::get('/events', [AjaxController::class, 'getLessons'])->name('events');
});