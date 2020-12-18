<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/GET/posts', [App\Http\Controllers\Controller::class, 'GET_posts']);
Route::get('/GET/posts/{id}', [App\Http\Controllers\Controller::class, 'GET_posts_id']);
Route::get('/GET/posts/{id}/comments', [App\Http\Controllers\Controller::class, 'GET_posts_id_comments']);
Route::get('/GET/comments/postId/{postId}', [App\Http\Controllers\Controller::class, 'GET_comments_postId']);
Route::get('/GET/posts/userId/{userId}', [App\Http\Controllers\Controller::class, 'GET_posts_userId']);

Route::post('/POST/posts', [App\Http\Controllers\Controller::class, 'POST_posts']);
Route::put('/PUT/posts', [App\Http\Controllers\Controller::class, 'PUT_posts']);
Route::patch('/PATCH/posts', [App\Http\Controllers\Controller::class, 'PATCH_posts']);
Route::delete('/DELETE/posts', [App\Http\Controllers\Controller::class, 'DELETE_posts']);
