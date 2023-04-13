<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\MapelController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/kelas/inputkelas',[KelasController::class,'inputkelas']);
Route::get('/kelas/detailkelas/{id}', [KelasController::class, 'detailkelas']);
Route::get('/kelas/listkelas', [KelasController::class, 'viewlistkelas']);
Route::put('/kelas/updatekelas/{id}',[KelasController::class,'updatekelas']);
Route::get('/siswa/listsiswa', [SiswaController::class, 'listsiswa']);
Route::get('/siswa/detailsiswa/{id}', [SiswaController::class, 'detailsiswa']);
Route::get('/mapel/detailmapel', [MapelController::class, 'detailmapel']);
Route::post('/mapel/inputmapel',[MapelController::class,'inputmapel']);
