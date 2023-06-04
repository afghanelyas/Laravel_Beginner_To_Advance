<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostCommentController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;

Route::get('ping', function(){
    $mailchimp = new \MailchimpMarketing\ApiClient();

$mailchimp->setConfig([
	'apiKey' => config('services.mailchimp.key'),
	'server' => 'us10'
]);
$response = $mailchimp->lists->addListMember("f38c3f622b", [
    "email_address" => "hamid@gmail.com",
    "status" => "pending",
]);
dd($response);
});



Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('posts/{post:slug}', [PostController::class, 'show']);
Route::post('posts/{post:slug}/comments', [PostCommentController::class, 'store']);

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');



Route::get('login', [SessionController::class, 'create'])->middleware('guest');
Route::post('login', [SessionController::class, 'store'])->middleware('guest');

Route::post('logout', [SessionController::class, 'destroy'])->middleware('auth');