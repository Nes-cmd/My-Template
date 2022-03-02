<?php
use Illuminate\Support\Facades\Route;


Route::view('home', 'home')->middleware('auth');

Route::view('/','landing')->name('landing');
Route::view('pricing', 'pages.pricing')->name('pricing');
Route::view('blog-grid', 'pages.blog-grid')->name('blog-grid');
Route::view('blog-detail', 'pages.blog-detail')->name('blog-detail');
