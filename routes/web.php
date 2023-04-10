<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Models\Camp;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\User\CheckoutController;

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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/login', function () {
    return view('login');
})->name('login');


Route::get('checkout/{camp:slug}', [CheckoutController::class, 'create'])->name('checkout.create');


Route::get('/success-checkout', function () {
    return view('success_checkout');
})->name('success_checkout');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// socialite
Route::get('/sign-in-google', [UserController::class, 'google'])->name('user.login.google');

Route::get('/auth/google/callback', [UserController::class, 'handleProviderCallback'])->name('user.google.callback');
require __DIR__ . '/auth.php';
