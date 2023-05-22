<?php


use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;

use App\Models\Post;
use Spatie\YamlFrontMatter\YamlFrontMatter;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {

    return view('posts', [
        'posts' => Post::all()
    ]);
});


Route::get('posts/{post:slug}', function (Post $post) { // Post::where('slug','post')->firstOrfail();
    return view('post', [
        'post' => $post
    ]);
});


