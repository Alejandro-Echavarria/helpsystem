<?php

use App\Http\Controllers\RecordController;
use Illuminate\Support\Facades\Route;

Route::resource('/', RecordController::class)->names('records');

