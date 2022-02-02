<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MuridController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
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


// ================ AUTH =================== //
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/postlogin',[AuthController::class,'postlogin'])->name('postlogin');
Route::get('/logout',[AuthController::class,'logout']);


// ================ DASHBOARD ============== //
Route::group(['middleware'=> ['auth']], function(){
    Route::group(['middleware'=> ['cek_login:1']], function(){
        Route::get('/dashboard',[DashboardController::class,'index']);
    });
});

// ================ Murid ================== //

Route::get('/murid',[UserController::class, 'index']);
Route::get('murid/{id}/edit',[UserController::class, 'edit']);
Route::get('/murid/create',[UserController::class, 'create']);
Route::post('/murid/store',[UserController::class,'store']);
Route::post('murid/{id}/update',[UserController::class, 'update']);
Route::get('murid/{id}/delete',[UserController::class,'delete']);


// ================= Guru =================== //
Route::get('/guru',[UserController::class,'indexGuru']);

// ================= ORTU =================== //
Route::get('ortu',[UserController::class,'indexOrtu']);

// ================= ROLE =================== //
route::get('/role',[RoleController::class,'index']);