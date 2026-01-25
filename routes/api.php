<?php

use Illuminate\Support\Facades\Route;

Route::get('/info', function () {
    return response()->json([
        'app' => config('app.name'),
        'version' => config('app.version'),
        'environment' => config('app.env'),
    ]);
});

Route::prefix('v1')->group(function () {
    require base_path('routes/api/v1/auth.php');
    require base_path('routes/api/v1/users.php');
});