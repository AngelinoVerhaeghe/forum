<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiscussionsController;
use App\Http\Controllers\RepliesController;

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

Auth::routes();

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('index');

Route::resource('discussions', DiscussionsController::class);

Route::resource('discussions/{discussion}/replies', RepliesController::class);

Route::post('discussions/{discussion}/replies/{reply}/mark-as-best-reply', [\App\Http\Controllers\DiscussionsController::class, 'reply'])->name('discussions.best-reply');
