<?php

use Illuminate\Support\Facades\Route;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
   return new UserResource($request->user());
})->name('user');

Route::get('/check_user', function () {
   $user = Auth::user();
   if (!$user) {
      return response([
         'data' => [
            'auth' => false,
            'user' => null,
         ]
      ]);
   }
   return response([
      'data' => [
         'auth' => true,
         'user' => new UserResource($user),
      ]
   ]);
})->name('user.check_user');
