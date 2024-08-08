<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;

Route::get('/', [BlogController::class, 'showAllBlogs'])->name('welcome');
Route::get('/blogs', function () {
    $blogs = [];
    if (auth()->check())    {
        $blogs = auth()->user()->usersBlogs()->latest()->get();

    }
    return view('home', ['blogs' => $blogs]);
    // $blogs = Blog::all();  Shows all the blog contents on the table
    //  $blogs = Blog::where('user_id'. auth()->id())->get(); | Shows all the blog contents of a specific user on the table

});

Route::get('/register', [UserController::class, 'goRegister']);
Route::get('/logout', [UserController::class, 'goLogout']);
Route::get('/login', [UserController::class, 'gologin']);

Route::post('/register', [UserController::class, 'register']);
Route::post('/logout', [UserController::class, 'logout']);
Route::post('/login', [UserController::class, 'login']);

// Blog post related routes
Route::post('blogs/create', [BlogController::class, 'createBlog']);
Route::get('blogs/edit/{blog}', [BlogController::class, 'editBlog']);
Route::put('blogs/edit/{blog}', [BlogController::class, 'updateBlog']);
Route::delete('blogs/delete/{blog}', [BlogController::class, 'deleteBlog']);

// Generate Random Avatars
Route::get('/user/{name}/avatar', 'UserController@createAvatar');
