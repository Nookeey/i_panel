<?php

use App\Http\Controllers\LangController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TranslationController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Dashboard', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
})->middleware(['auth', 'verified']);

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // route for page
    Route::get('/page', [PageController::class, 'index'])->name('page.index');
    Route::get('/page/create', [PageController::class, 'create'])->name('page.create');
    Route::post('/page', [PageController::class, 'store'])->name('page.store');
    Route::get('/page/{page}', [PageController::class, 'show'])->name('page.show');
    Route::get('/page/{page}/edit', [PageController::class, 'edit'])->name('page.edit');
    Route::patch('/page/{page}', [PageController::class, 'update'])->name('page.update');
    Route::delete('/page/{page}', [PageController::class, 'destroy'])->name('page.destroy');

    // route for lang
    Route::get('/lang', [LangController::class, 'index'])->name('lang.index');
    Route::get('/lang/create', [LangController::class, 'create'])->name('lang.create');
    Route::post('/lang', [LangController::class, 'store'])->name('lang.store');
    Route::get('/lang/{lang}', [LangController::class, 'show'])->name('lang.show');
    Route::get('/lang/{lang}/edit', [LangController::class, 'edit'])->name('lang.edit');
    Route::patch('/lang/{lang}', [LangController::class, 'update'])->name('lang.update');
    Route::delete('/lang/{lang}', [LangController::class, 'destroy'])->name('lang.destroy');

    // route for translation
    Route::get('/translation', [TranslationController::class, 'index'])->name('translation.index');
    Route::get('/translation/create', [TranslationController::class, 'create'])->name('translation.create');
    Route::post('/translation', [TranslationController::class, 'store'])->name('translation.store');
    Route::get('/translation/{translation}', [TranslationController::class, 'show'])->name('translation.show');
    Route::get('/translation/{translation}/edit', [TranslationController::class, 'edit'])->name('translation.edit');
    Route::patch('/translation/{translation}', [TranslationController::class, 'update'])->name('translation.update');
    Route::delete('/translation/{translation}', [TranslationController::class, 'destroy'])->name('translation.destroy');
});

require __DIR__ . '/auth.php';
