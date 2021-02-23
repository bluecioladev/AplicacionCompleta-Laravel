<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('admin/users','App\Http\Controllers\AdminUsersController');

Route::post('admin/users/create','App\Http\Controllers\AdminUsersController@store')->name('admin.create');

//Route::patch('admin/users/edit','App\Http\Controllers\AdminUsersController@update')->name('admin.edit');

