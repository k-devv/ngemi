<?php

use App\Http\Controllers\Web\LandingController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingController::class, 'index'])->name('landing.index');
Route::get('/contact', fn () => view('landing.pages.contact'))->name('contact');
