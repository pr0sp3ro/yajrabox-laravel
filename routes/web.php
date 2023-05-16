<?php

use App\DataTables\UserDataTable;
use Illuminate\Support\Facades\Route;

Route::get('/', function (UserDataTable $dataTable) {
    return $dataTable->render('index');
});
