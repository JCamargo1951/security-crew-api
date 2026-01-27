<?php

use Database\Seeders\DatabaseSeeder;
use Illuminate\Support\Facades\Route;

Route::get('/info', function () {
    return response()->json([
        'app' => config('app.name'),
        'version' => config('app.version'),
        'environment' => config('app.env'),
    ]);
});

Route::get('/seed', function (DatabaseSeeder $database) {
    try {
        $database->run();
        return response()->json(['message' => 'Database seeded successfully.'], 200);
    } catch (\Throwable $th) {
        return response()->json(['message' => 'Database seeding failed.', 'error' => $th->getMessage()], 500);
    }
});

Route::prefix('v1')->group(function () {
    require base_path('routes/api/v1/auth.php');
    require base_path('routes/api/v1/users.php');
    require base_path('routes/api/v1/links.php');
});