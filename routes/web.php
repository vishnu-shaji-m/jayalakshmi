<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
<<<<<<< HEAD
Route::get('/brides', [FrontendController::class, 'brides'])->name('brides');
=======
Route::get('/categoryListing', [FrontendController::class, 'categoryListing'])->name('categoryListing');
Route::get('/subCategoryListing', [FrontendController::class, 'subCategoryListing'])->name('subCategoryListing');
>>>>>>> e7019b4d7e3e85e880d6046cec9cdc9b866cb600
 

