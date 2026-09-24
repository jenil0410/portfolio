<?php

use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes - Jenil Desai Portfolio ("Systems in Motion")
|--------------------------------------------------------------------------
*/

Route::get('/', [PortfolioController::class, 'home'])->name('portfolio.home');
Route::get('/work', [PortfolioController::class, 'work'])->name('portfolio.work');
Route::get('/work/{slug}', [PortfolioController::class, 'show'])->name('portfolio.work.show');
Route::get('/experience', [PortfolioController::class, 'experience'])->name('portfolio.experience');
Route::get('/products', [PortfolioController::class, 'products'])->name('portfolio.products');
Route::get('/about', [PortfolioController::class, 'about'])->name('portfolio.about');
Route::get('/contact', [PortfolioController::class, 'contact'])->name('portfolio.contact');
