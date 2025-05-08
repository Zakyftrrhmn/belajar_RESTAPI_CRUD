<?php

use App\Http\Controllers\API\MahasiswaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// // http://127.0.0.1:8000/api/mahasiswa
// // route::get('/mahasiswa', function () {
// //     return 'ok';
// // });

// // http://127.0.0.1:8000/api/mahasiswa
// route::get('/mahasiswa', [MahasiswaController::class, 'index']);

// // tampilkan data berdasarkan id
// // http://127.0.0.1:8000/api/mahasiswa/1
// route::get('/mahasiswa/{mahasiswa}', [MahasiswaController::class, 'show']);

// // tambah data
// // http://127.0.0.1:8000/api/mahasiswa
// route::post('/mahasiswa', [MahasiswaController::class, 'store']);

// // ubah data
// // http://127.0.0.1:8000/api/mahasiswa/1
// route::put('/mahasiswa/{mahasiswa}', [MahasiswaController::class, 'update']);

// // hapus data
// // http://127.0.0.1:8000/api/mahasiswa/1
// route::delete('/mahasiswa/{mahasiswa}', [MahasiswaController::class, 'destroy']);


// Persingkat semua route
Route::apiResource('mahasiswa', MahasiswaController::class);
