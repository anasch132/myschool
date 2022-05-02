<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactsController;

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

Route::get('/', [ContactsController::class, 'index']);
Route::post('/store-contact', [ContactsController::class, 'store']);
Route::delete('/delete-contact/{id}', [ContactsController::class, 'destroy']);
Route::put('/edit-contact/{id}', [ContactsController::class, 'update']);
Route::get('/edit/{id}', [ContactsController::class, 'show']);
Route::get('/add', function () {
    return view('add');
});
