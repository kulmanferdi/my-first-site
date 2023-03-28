<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::view('/contact', 'contact');

Route::view('/' , 'welcome', ['name' => 'John']); 

Route::get('/pass-array', function () { 
    $tasks = [
        'Go to the store',
        'Go to the market',
        'Go to the work'
    ];     
    return view('tasklist')->withTasks($tasks);
});

Route::get('/request-test', function () { 
    return view('request-inputs', [     
    'title' => request('title'),     
    ]);     
}); 

Route::get('/posts/{post}', function ($post) { 
    return view('post', [
        'post' => $post     
    ]);     
}); 