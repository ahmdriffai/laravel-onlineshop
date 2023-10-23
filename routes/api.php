<?php

use App\Product;
use App\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/rating', function() {
    $rating = Rating::all();
    return response()->json($rating);
});

Route::get('/product', function() {
    $rating = Product::all();
    return response()->json($rating);
});
