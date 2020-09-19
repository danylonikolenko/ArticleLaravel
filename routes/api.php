<?php

use Illuminate\Http\Request;



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

Route::get('/user', function (Request $request) {
    $rez = DB::table('users')->get();
    return response()->json($rez);
});
Route::get('/articles', function (Request $request) {
    $rez = DB::table('articles')->get();
    return response()->json($rez);
});
Route::get('/comments', function (Request $request) {
    $rez = DB::table('comments')->get();
    return response()->json($rez);
});
