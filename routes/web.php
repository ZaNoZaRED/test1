<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppealController;
Route::get('/form', function () {
    return view('welcome');
});
Route::get('/', function () {
    return redirect()->action(
        [AppealController::class, 'index']
    );
});
