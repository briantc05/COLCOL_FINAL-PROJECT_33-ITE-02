<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;

Route::get('/', function() {
    return view('welcome');
});

Route::get('/', function () {
    $blogs = [];
    if (auth()->check())    {
        $blogs = auth()->user()->usersBlogs()->latest()->get();

    }
    return view('home', ['blogs' => $blogs]);
    // $blogs = Blog::all();  Shows all the blog contents on the table
    //  $blogs = Blog::where('user_id'. auth()->id())->get(); | Shows all the blog contents of a specific user on the table

});

Route::post('/register', [UserController::class, 'register']);
Route::post('/logout', [UserController::class, 'logout']);
Route::post('/login', [UserController::class, 'login']);

// Blog post related routes
Route::post('blogs/create', [BlogController::class, 'createBlog']);
Route::get('blogs/edit/{blog}', [BlogController::class, 'editBlog']);
Route::put('blogs/edit/{blog}', [BlogController::class, 'updateBlog']);
Route::delete('blogs/delete/{blog}', [BlogController::class, 'deleteBlog']);
