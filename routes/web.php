<?php

use Illuminate\Support\Facades\Route;


Route::view('/',  'welcome')->name('welcome');
Route::view('/terms-of-use','static.terms-of-use')->name('terms-of-use');
Route::view('/privacy-policy','static.privacy-policy')->name('privacy-policy');

Route::view('/admin/dashboard',  'admin.dashboard' )->middleware(['auth','verified'])->name('admin.dashboard');
