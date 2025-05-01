<?php

use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Frontend Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/blog-1', [HomeController::class, 'blog1'])->name('blog1');
Route::get('/blog-2', [HomeController::class, 'blog2'])->name('blog2');
Route::get('/blog-details', [HomeController::class, 'blogDetails'])->name('blog.details');
Route::get('/featured', [HomeController::class, 'featured'])->name('featured');
Route::get('/use-cases', [HomeController::class, 'useCases'])->name('use.cases');
Route::get('/copywrite', [HomeController::class, 'copywrite'])->name('copywrite');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/register', [HomeController::class, 'register'])->name('register');
Route::get('/pricing', [HomeController::class, 'pricing'])->name('pricing');
Route::get('/privacy-policy', [HomeController::class, 'privacyPolicy'])->name('privacy.policy');
Route::get('/terms-service', [HomeController::class, 'termsService'])->name('terms.service');

// Home Variants Routes
Route::get('/index-2', [HomeController::class, 'index2'])->name('home2');
Route::get('/index-3', [HomeController::class, 'index3'])->name('home3');
Route::get('/index-4', [HomeController::class, 'index4'])->name('home4');
Route::get('/index-5', [HomeController::class, 'index5'])->name('home5');
Route::get('/index-6', [HomeController::class, 'index6'])->name('home6');
Route::get('/index-7', [HomeController::class, 'index7'])->name('home7');
