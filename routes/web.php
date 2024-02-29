<?php

use App\Http\Controllers\ProduitController;
use App\Http\Controllers\UtilisateurController;
use Illuminate\Support\Facades\Route;

Route::fallback(function () {return view('404');});
Route::get('/home', [ProduitController::class, 'index'])->name('home')->middleware('checkuser');
Route::get('/detail/{RefPdt}', [ProduitController::class, 'detail'])->name('detail');
Route::get('/delete/{RefPdt}', [ProduitController::class, 'destroy'])->name('delete');
Route::get('/create', [ProduitController::class, 'create'])->name('create');
Route::post('/create', [ProduitController::class, 'save'])->name('save');






Route::get('/login', [UtilisateurController::class, 'login'])->name('login');
Route::post('/login', [UtilisateurController::class, 'authentifier'])->name('authentifier');
Route::get('/logout', [UtilisateurController::class, 'logout'])->name('logout');