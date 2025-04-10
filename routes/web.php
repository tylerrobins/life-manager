<?php

use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\Auth\LogoutController;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Passwords\Confirm;
use App\Livewire\Auth\Passwords\Email;
use App\Livewire\Auth\Passwords\Reset;
use App\Livewire\Auth\Register;
use App\Livewire\Auth\Verify;
use App\Livewire\Finance\Accounts;
use App\Livewire\Finance\AddTransaction;
use App\Livewire\Finance\Budget;
use App\Livewire\Finance\Transactions;
use App\Livewire\General\Profile;
use App\Livewire\Health\Exercise;
use App\Livewire\Health\Food;
use App\Livewire\Health\Metrics;
use App\Livewire\Home\General;
use App\Livewire\Home\Records;
use App\Livewire\Home\Tasks;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

Route::middleware('guest')->group(function () {
    Route::get('login', Login::class)
        ->name('login');

    Route::get('register', Register::class)
        ->name('register');
});

Route::get('password/reset', Email::class)
    ->name('password.request');

Route::get('password/reset/{token}', Reset::class)
    ->name('password.reset');

Route::middleware('auth')->group(function () {
    Route::get('email/verify', Verify::class)
        ->middleware('throttle:6,1')
        ->name('verification.notice');

    Route::get('password/confirm', Confirm::class)
        ->name('password.confirm');
});

Route::middleware('auth')->group(function () {
    Route::get('email/verify/{id}/{hash}', EmailVerificationController::class)
        ->middleware('signed')
        ->name('verification.verify');

    Route::post('logout', LogoutController::class)
        ->name('logout');

    Route::view('/app', 'app')->name('app');

    Route::get('/finance/add_transaction', AddTransaction::class)->name('finance/add');
    Route::get('/finance/transactions', Transactions::class)->name('finance/transactions');
    Route::get('/finance/budget', Budget::class)->name('finance/budget');
    Route::get('/finance/accounts', Accounts::class)->name('finance/accounts');

    Route::get('/health/exercise', Exercise::class)->name('health/exercise');
    Route::get('/health/food', Food::class)->name('health/food');
    Route::get('/health/metrics', Metrics::class)->name('health/metrics');

    Route::get('/home/general', General::class)->name('home/general');
    Route::get('/home/records', Records::class)->name('home/records');
    Route::get('/home/tasks', Tasks::class)->name('home/tasks');

    Route::get('/profile', Profile::class)->name('profile');
});
