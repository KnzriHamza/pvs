<?php

use App\Http\Controllers\WhatsappMessageController;
use App\Http\Controllers\AiImageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [WhatsappMessageController::class, 'index'])->name('dashboard');
    Route::delete('/delete/{id}', [WhatsappMessageController::class, 'destroy'])->name('deleteMessage');
    Route::get('/dashboard/aiChat/generate', [WhatsappMessageController::class, 'generateChat'])->name('whatsapp');
    Route::get('/dashboard/image', [AiImageController::class, 'index'])->name('imageGen');
    Route::get('/dashboard/image/generate', [AiImageController::class, 'generateImage'])->name('imageGen');
});
