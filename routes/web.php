<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('pages.home');
})->name('home');
Route::get('/Product', function () {
    return view('pages.plp');
})->name('plp');
Route::get('/Product/{i}', function () {
    return view('pages.pdp');
})->name('pdp');
Route::get('/login', function () {
    return view('pages.login');
})->name('show_login');


Route::middleware('auth')->prefix('admin')->group(function () {
    Route::prefix('book')->group(function () {
        Route::post('/', function () {
            return view('pages.admin.book.index');
        });
        Route::post('/add', function () {
            return view('pages.admin.book.add');
        });
        Route::post('/edit/{id}', [BookController::class, 'form_update']);
    });
});