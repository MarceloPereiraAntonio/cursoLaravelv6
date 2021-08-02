<?php



Route::get('/', function () {
    $helloWord ='Hello Word';

    return view('welcome', compact('helloWord'));
});
