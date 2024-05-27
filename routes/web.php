<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('weight.index');
});

Route::get('/xocial', function () {
    return view('xocial');
});

Route::post('/weight', function () {
    if (!isset($_POST["weight"])) {
        return '';
    }

    \App\Models\User::create([
        'name' => 'Hello',
        'email' => 'mohammedjammeh@yahoo.com',
        'password' => '123',
        'remember_token' => 'hello',
    ]);

    return 'Successfully stored!';
});
