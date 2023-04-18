<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SearchController;

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

Route::get('blog/{slug}',  [BlogController::class, 'getSingle']);

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/blog', function () {
    return view('pages.blog');
});

Route::get('/order', function () {
    return view('pages.order');
});

Route::get('/order-end', function () {
    return view('pages.order-end');
});

Route::get('/rolunk', function () {
    return view('pages.about');
});




Auth::routes();

Route::get('/member', [HomeController::class, 'index'])->name('member');

Route::get('/programs',[HomeController::class,'ProgramsController'])->name('programs');

Route::get('/search', [SearchController::class, 'search'])->name('search');

Route::get('/eloadsok',[HomeController::class,'PresentationsController'])->name('eloadsok');

Route::get('/utmutatok',[HomeController::class,'GuideController'])->name('utmutatok');

Route::get('/tudastar',[HomeController::class,'KnowledgeStoresController'])->name('tudastar');

Route::get('/naptar',[HomeController::class,'CalendarsController'])->name('naptar');


