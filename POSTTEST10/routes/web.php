<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

Route::get('/form', [OrderController::class, 'showFormPenduduk'])->name('show-form-penduduk');

Route::post('/submit-data', [OrderController::class, 'submitData'])->name('submit-data');

Route::get('/', function () {
    return redirect()->route('show-form-penduduk'); // Mengubah rute ke show-form-penduduk
});