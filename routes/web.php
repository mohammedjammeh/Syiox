<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
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
