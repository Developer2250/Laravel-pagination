<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('paginate', function () {
    return User::query()->paginate();
});

Route::get('simple-paginate', function () {
    return User::query()->simplePaginate();
});
