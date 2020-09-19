<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Article;
use Illuminate\Support\Facades\Route;

Route::get('/', 'ShowArticleController@show');

Route::post('/add/article', "ArticleController@addArticle");

Route::post('/addComment/', "Comment@add");

Route::get('/articleShow/{id}', "ArticleShow@show");

Route::get('/showArticleUpdate', "ArticleShow@showUpdate");

Route::post('/make/reg', "Registration@registrationF");

Route::get('/deleteArticle/{id}', "DeleteArticle@deleteArticle");
Route::post('/changeArticle/{id}', "ArticleController@updateArticle");
Route::get('/showUser', "ShowUser@show");
Route::post('/changeUser/{id}', "ShowUser@updateUser");
Route::get('/deleteUser/{id}', "ShowUser@deleteUser");


Route::get('/deleteComment/{id_comment}', "Comment@deleteComment");

Route::post('/changeComment/{id_comment}', "Comment@change");



Route::post('/login', "Login@log_in");
Route::get('/logout', "Login@logout");

