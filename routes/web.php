<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomController;
// use App\Http\Controllers\TodoController;
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

// Route::get('/', function () {
//     // return 'Hello';
//     return view('welcome');
// });

// Route::get('/about', function () {
//     // return 'about';
//     // return view('welcome');
// });

Route::get('welcome', [WelcomController::class, 'index']);
Route::get('about', [WelcomController::class, 'about']);

Route::get('/todo', [App\Http\Controllers\TodoController::class, 'index']);
Route::post('/todo/store', [App\Http\Controllers\TodoController::class, 'store']);
Route::delete('/todo/{id}/delete', [App\Http\Controllers\TodoController::class, 'destroy']);

// Request or Route
// Controller 
// View

// Model
