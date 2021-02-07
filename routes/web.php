<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'home']);

Route::get('/eso', [HomeController::class, 'eso']);

Route::get('/github', static function() {
   return redirect('https://github.com/xdarkyne');
});
Route::get('/discord', static function() {
   return redirect('https://discord.gg/2JjnKs5sqP');
});
