<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

Route::get('/', function () {
    return view('master');
});

Route::controller(PortfolioController::class)->group(function () {
    Route::get('/download/resume', 'DownloadResume')->name('download.resume');
    Route::post('/send/message', 'SendMessage')->name('send.message');
});
