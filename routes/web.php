<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/categoryListing', [FrontendController::class, 'categoryListing'])->name('categoryListing');
Route::get('/subCategoryListing', [FrontendController::class, 'subCategoryListing'])->name('subCategoryListing');
Route::get('/privacy', [FrontendController::class, 'privacy'])->name('privacy');

