<?php
use App\Http\Controllers\AdminContactController;
use App\Http\Controllers\CarteController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/',[HomeController::class, 'index'])->name('home');

Route::get('/contact',[ContactController::class,'index']) ->name('contact');

Route::get('/Carte', [CarteController::class,'index'])->name('Carte');

Route::get('/admin/contact',[AdminContactController::class,'index']) ->name('admin.contact.index');

