<?php

use Illuminate\Support\Facades\Route;

Route::get('/auth', function () {
    return response()->json([
        'user' => [
            'id' => 1,
            'name' => 'Alice',
        ]
    ], 200);
});