<?php

use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\GameController;
use App\Http\Controllers\Backend\MultipleGameController;
use App\Http\Controllers\Backend\TagController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\FrontGameController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

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


Auth::routes();
//-----------------frontend Routes --------
Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/category/{slug}', [FrontGameController::class, 'categoryGame'])->name('categoryGame');
Route::get('/game/{slug}', [FrontGameController::class, 'gamePlay'])->name('gamePlay');
Route::get('/all-game', [FrontGameController::class, 'all_games'])->name('all_games');
Route::get('/best-games', [FrontGameController::class, 'best_games'])->name('best.games');
Route::get('/featured-games', [FrontGameController::class, 'featured_games'])->name('featured.games');
Route::get('/terms', [FrontendController::class, 'termsCondition'])->name('termsCondition');
Route::get('/privacy', [FrontendController::class, 'privacy'])->name('privacy');


//---------backend Routes --------------

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [DashboardController::class, 'profile'])->name('admin.profile');
    Route::put('/profile/update', [DashboardController::class, 'profile_update'])->name('admin.profile.update');
    Route::get('/password-change', [DashboardController::class, 'password_change'])->name('admin.password.change');
    Route::put('/password/update', [DashboardController::class, 'password_update'])->name('admin.password.update');
    //multiple game
    Route::get('/multiple/game/create', [MultipleGameController::class, 'create'])->name('game.multiple.create');
    Route::post('/multiple/game/store', [MultipleGameController::class, 'store'])->name('game.multiple.store');
    Route::get('/custom-description', [MultipleGameController::class, 'custom_description'])->name('custom_description');
    Route::post('/custom-description/store', [MultipleGameController::class, 'custom_description_store'])->name('custom_description.store');
    //game--
    Route::get('/game/index', [GameController::class, 'index'])->name('game.index');
    Route::get('/game/create', [GameController::class, 'create'])->name('game.create');
    Route::post('/game/store', [GameController::class, 'store'])->name('game.store');
    Route::get('/game/edit/{id}', [GameController::class, 'edit'])->name('game.edit');
    Route::post('/game/update/{id}', [GameController::class, 'update'])->name('game.update');
    Route::delete('/game/destroy/{id}', [GameController::class, 'destroy'])->name('game.destroy');
    Route::delete('/selected-game', [GameController::class, 'selectedGameDelete'])->name('selectedGameDelete');
    Route::get('/allgame-deleted', [GameController::class, 'allGamedelete'])->name('allGame.delete');

    //category and tag--
    Route::resource('/category', CategoryController::class);
    Route::resource('/tag', TagController::class);
    Route::resource('/banner', BannerController::class);
});


//Config cache clear
Route::get('clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    Artisan::call('optimize');
    dd("All clear!");
});