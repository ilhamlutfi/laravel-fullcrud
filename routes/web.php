<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

// Route::get('student', [StudentController::class, 'index']);
// Route::post('student', [StudentController::class, 'store']);
// Route::get('student/{student}', [StudentController::class, 'show']);
// Route::delete('student/{id}', [StudentController::class, 'destroy']);
// Route::put('student/{student}', [StudentController::class, 'update']);

// resource hanya untuk method (index, show, store, update, destroy)
Route::resource('student', StudentController::class)->only([
    'index', 'show', 'store', 'update', 'destroy'
])->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
