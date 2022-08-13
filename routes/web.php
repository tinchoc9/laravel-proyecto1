<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use Whoops\Run;

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
/*
//solicitamos los datos
Route::get('/', 'UserController@index');
//guardamos los datos(clientes)
Route::post('users','Usercontroller@store')->name('user.store');
//borramos un cliente
Route::delete('users{user}','UserController@delete')->name('user.delete');
*/

Route::get('/', [UserController::class,'index'])->middleware('auth');
Route::post('users', [UserController::class, 'store'])->name('users.store');
Route::delete('users/{user}', [UserController::class,'delete'])->name('users.delete');

