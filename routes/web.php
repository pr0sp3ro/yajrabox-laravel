<?php

use App\DataTables\UserDataTable;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function (UserDataTable $dataTable) {
    return $dataTable->render('index');
});

// Auth::routes();

// Route::get('/home', [HomeController::class, 'index'])->name('home');
// Route::get('/home/get-users', [HomeController::class, 'getUsers'])->name('home.get.users');
