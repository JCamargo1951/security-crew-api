<?php

use Illuminate\Support\Facades\Route;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
   return new UserResource($request->user());
});
