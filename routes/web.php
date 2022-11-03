<?php

use App\Http\Controllers\RecordController;
use Illuminate\Support\Facades\Route;

Route::resource('/', RecordController::class)->names('records');

Route::controller(RecordController::class)->group(function(){

    Route::get('/', [RecordController::class, 'index'])->name('records.index');
    Route::get('/records', [RecordController::class, 'records'])->name('records.records');
    Route::get('/devices/{id}', [RecordController::class, 'devices'])->name('records.devices');
});

