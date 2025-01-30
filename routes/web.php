<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeminiController;


Route::get('/', [GeminiController::class, 'index'])->name('');
Route::post('/process-prompt', [GeminiController::class, 'process'])->name('process.prompt');
