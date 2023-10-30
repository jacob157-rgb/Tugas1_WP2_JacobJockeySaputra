<?php

use App\Http\Controllers\LecturerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
Route::get('/', function() {
    return view('landing');
});

Route::get('/students', [StudentController::class, 'index']);
Route::get('/students/tambah', [StudentController::class, 'tambah']);
Route::post('/students/simpan', [StudentController::class, 'simpan']);
Route::get('/students/tampil/{id}', [StudentController::class, 'tampil']);
Route::get('/students/ubah/{id}', [StudentController::class, 'ubah']);
Route::put('/students/perbarui/{id}', [StudentController::class, 'perbarui']);
Route::get('/students/hapus/{id}', [StudentController::class, 'hapus']);

Route::resource('/lecturers', LecturerController::class);