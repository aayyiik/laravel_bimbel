<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BabController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KemajuanController;
use App\Http\Controllers\MuridController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Models\Role;
use App\Models\User;
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

Route::get('/dashboard',[DashboardController::class,'index']);

// ================ DASHBOARD ============== //
Route::group(['middleware'=> ['auth']], function(){

    Route::group(['middleware'=> ['cek_login:1']], function(){

        Route::get('/dashboardStafPages',[DashboardController::class,'indexStaf']);
        

                // ================ Murid ================== //

                Route::get('/murid',[MuridController::class, 'index']);
                Route::get('murid/{id}/edit',[MuridController::class, 'edit']);
                Route::get('/murid/create',[MuridController::class, 'create']);
                Route::post('/murid/store',[MuridController::class,'store']);
                Route::post('murid/{id}/update',[MuridController::class, 'update']);
                Route::get('murid/{id}/delete',[MuridController::class,'delete']);


                // ================= Guru =================== //
                Route::get('/guru',[UserController::class,'indexGuru']);
                Route::get('/guru/create',[UserController::class,'createGuru']);
                Route::get('/guru/{id}/edit',[UserController::class, 'editguru']);
                Route::post('/guru/{id}/update',[UserController::class, 'updateGuru']);
                Route::get('/guru/{id}/delete',[UserController::class, 'deleteGuru']);
                Route::post('/guru/store',[UserController::class,'storeGuru']);

                // ================= ORTU =================== //
                Route::get('/ortu',[UserController::class,'indexOrtu']);
                Route::get('/ortu/{id}/edit',[UserController::class, 'editOrtu']);
                Route::post('/ortu/{id}/update',[UserController::class, 'updateOrtu']);
                Route::get('/ortu/{id}/delete',[UserController::class, 'deleteOrtu']);
                Route::get('/ortu/create',[UserController::class,'createOrtu']);
                Route::post('/ortu/store',[UserController::class,'storeOrtu']);

                // ================= STAF =================== //
                Route::get('/staf',[UserController::class,'indexStaf']);
                Route::get('/staf/create',[UserController::class,'createStaf']);
                Route::get('/staf/{id}/edit',[UserController::class, 'editstaf']);
                Route::get('/staf/{id}/delete',[UserController::class, 'deleteStaf']);
                Route::post('/staf/{id}/update',[UserController::class, 'updateStaf']);
                Route::post('/staf/store',[UserController::class,'storeStaf']);


                // ================= ROLE =================== //
                Route::get('/role',[RoleController::class,'index']);
                Route::get('/role/create',[RoleController::class,'create']);
                Route::post('/role/store',[RoleController::class,'store']);
                Route::get('/role/{id}/edit',[RoleController::class,'edit']);
                Route::get('/role/{id}/delete',[RoleController::class,'delete']);
                Route::post('/role/{id}/update',[RoleController::class,'update']);
                
                // ================ + USER ================== //
                Route::get('/create/user',[UserController::class,'tambah']);
                Route::post('/proses/user',[UserController::class,'proses']);

        
      
    });

    Route::group(['middleware'=> ['cek_login:3']], function(){
        Route::get('/ortuPagesKemajuan',[KemajuanController::class,'detailOrtu']);
        Route::get('/ortuPagesKemajuan/{id}',[KemajuanController::class,'getData']);
        Route::get('/ortuPagesKemajuan/{id}/detail',[KemajuanController::class,'detail']);

    });

    Route::group(['middleware'=> ['cek_login:2']], function(){
        Route::get('/dashboardGuruPages',[DashboardController::class,'indexGuru']);
        
        // ================= BUKU =================== //
        Route::get('/buku',[BukuController::class,'index']);
        Route::get('/buku/create',[BukuController::class,'create']);
        Route::post('/buku/store',[BukuController::class,'store']);
        Route::get('buku/{id}/edit',[BukuController::class,'edit']);
        //tambahkan route delete 
        Route::get('buku/{id}/delete', [BukuController::class, 'delete']);
        //jika sudah siap mari jalankan di web nya.
        Route::post('buku/{id}/update',[BukuController::class,'update']);

        // ================ BAB ===================== //
        Route::get('buku/{id}/bab',[BabController::class,'index']);
        Route::get('/bab/create',[BabController::class,'create']);
        Route::post('/bab/store',[BabController::class,'store']);
        Route::get('bab/{id}/edit',[BabController::class,'edit']);
        Route::post('bab/{id}/update',[BabController::class,'update']);

        // ================ KEMAJUAN ================= //
        Route::get('/kemajuan/{id}',[KemajuanController::class,'index']);
        Route::get('/kemajuan/{id}/create',[KemajuanController::class,'create']);
        Route::post('/kemajuan/{id}/store',[KemajuanController::class,'store']);
        Route::get('kemajuan/{id}/detail',[KemajuanController::class,'detail']);
    });
}); 





