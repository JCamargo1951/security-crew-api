<?php

use Illuminate\Support\Facades\Route;

Route::get('/users', function () {
    return response()->json([
        'users' => [
            ['id' => 1, 'name' => 'Alice'],
            ['id' => 2, 'name' => 'Bob'],
            ['id' => 3, 'name' => 'Charlie'],
        ],
    ], 200);
});