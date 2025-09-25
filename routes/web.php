<?php

use App\Models\Address;
use App\Models\Category;
use App\Models\Course;
use App\Models\Post;
use App\Models\Profile;
use Illuminate\Support\Facades\Route;
use App\Models\User;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/prueba', function () {

    $post = Post::find(1);

    return $post->tags;
});
