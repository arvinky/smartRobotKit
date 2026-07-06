<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;

Route::get('/', function () {
    return view('home');
});

/* DOWNLOAD PDF */
Route::get('/download/{file}', function ($file) {

    $path = public_path('manual/' . $file);

    if (!file_exists($path)) {
        abort(404);
    }

    return Response::download($path);

});

Route::get('/', function () {
    return view('home');
});

Route::get('/produk/{robot}', function ($robot) {
    return view('detail', compact('robot'));
});