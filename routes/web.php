<?php

use App\Http\Controllers\client\AboutController;
use App\Http\Controllers\client\ContactsController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\client\PriceController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('client.home');
Route::get('/about', [AboutController::class, 'index'])->name('client.about');
Route::get('/price', [PriceController::class, 'index'])->name('client.price');
Route::get('/contacts', [ContactsController::class, 'index'])->name('client.contacts');