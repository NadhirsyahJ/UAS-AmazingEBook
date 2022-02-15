<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\MaintenanceController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
});

Route::get('/', [HomepageController::class, 'index'])->name('home');

Route::get('/signup', [HomepageController::class, 'toRegisterPage'])->middleware('guest');
Route::post('/request-register', [HomepageController::class, 'requestSignUp']);

Route::get('/login', [HomepageController::class, 'toLoginPage'])->middleware('guest');
Route::post('/request-login', [HomepageController::class, 'requestLogin']);

Route::post('/logout', [HomepageController::class, 'logout'])->middleware('auth');

Route::get('/ebook-detail/{id_ebook}', [BookController::class, 'showEBookDetail'])->middleware('auth');
Route::post('/request-rent', [BookController::class, 'requestRent'])->middleware('auth');

Route::get('/cart', [OrderController::class, 'toCartPage'])->middleware('auth');
Route::post('/deleteitem', [OrderController::class, 'requestDelete'])->middleware('auth');
Route::post('/submitorder', [OrderController::class, 'proceedOrder'])->middleware('auth');

Route::get('/profile', [ProfileController::class, 'index'])->middleware('auth');
Route::post('/request-update-profile', [ProfileController::class, 'updateProfileData'])->middleware('auth');

Route::get('/maintenance-account', [MaintenanceController::class, 'index'])->middleware('theadmin');
Route::post('/deleteaccount', [MaintenanceController::class, 'requestDelete'])->middleware('theadmin');
Route::get('/role-updates/{id_account}', [MaintenanceController::class, 'toRoleUpdates'])->middleware('theadmin');
Route::post('/request-update-role', [MaintenanceController::class, 'requestRoleUpdates'])->middleware('theadmin');
