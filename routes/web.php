<?php

use App\Http\Controllers\StudentController;
use App\Models\Student;
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
    return view('login');
});
Route::get('/home', [StudentController::class, 'index']);

Route::get('/add', [StudentController::class, 'input']);


Route::post('/store', [StudentController::class, 'store']);

Route::get('/{id}/edit', [StudentController::class, 'edit']);

Route::put('/update/{id}',[StudentController::class, 'update']);

Route::delete('/update/{id}',[StudentController::class,'destroy']);