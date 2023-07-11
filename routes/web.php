<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Post\PostController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

/**
 * Home Route
 */
Route::get('/', [PostController::class, 'index']);

/**
 * Authentication route
 */
Route::view('/login', 'auth.signin', ['title' => 'Sign In']);
Route::view('/signup', 'auth.signup', ['title' => 'Sign Up']);
Route::post('/login', [AuthController::class, 'Register']);
Route::post('/login', [AuthController::class, 'Authenticate']);
Route::post('/logout', [AuthController::class, 'Logout']);

/**
 * Article behaviour route
 */
Route::resource('/article', PostController::class)->middleware('auth');
