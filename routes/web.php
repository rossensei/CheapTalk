<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\PostComponent;
use App\Http\Livewire\CategoryComponent;
use App\Http\Livewire\CreatePost;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', PostComponent::class)->name('posts');
Route::get('/create-post', CreatePost::class)->name('create-post');
Route::get('/categories', CategoryComponent::class)->name('categories');
