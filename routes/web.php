<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;

// PAGES

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('auth.register');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('auth.login');

Route::get('/contact/create', [ContactController::class, 'create'])->name('contact.create');
Route::get('/', [ContactController::class, 'index'])->name('contact.index');
Route::get('/contact/{id}/edit', [ContactController::class, 'edit'])->name('contact.edit');
// Route::get('/contacts/search', [ContactController::class, 'searchUsers'])->name('contact.search');

// /**
//  * @Authenticated pages
//  */
// // Authenticated Pages
// Route::group(['middleware' => 'auth.custom'], function () {
//     Route::get('/contact/create', [ContactController::class, 'create'])->name('contact.create');
//     Route::get('/', [ContactController::class, 'index'])->name('contact.index');
//     Route::get('/contact/{id}/edit', [ContactController::class, 'edit'])->name('contact.edit');
// });

// FORM SUBMISSION

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::put('/contact/{id}',[ContactController::class, 'update'])->name('contact.update');

// Route::destroy('contact/{id}', [ContactController::class, 'destroy']->name('contact.destroy'));
