<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/brides', [FrontendController::class, 'brides'])->name('brides');
Route::get('/categoryListing', [FrontendController::class, 'categoryListing'])->name('categoryListing');
Route::get('/subCategoryListing', [FrontendController::class, 'subCategoryListing'])->name('subCategoryListing');
Route::get('/faq', [FrontendController::class, 'faq'])->name('faq');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
 

