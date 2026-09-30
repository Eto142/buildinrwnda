<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProposalController;
use Illuminate\Support\Facades\Route;

// Home — Rwanda 2000
Route::get('/', function () {
    return view('home.homepage');
});

Route::post('/submit-proposal', [ProposalController::class, 'store'])->name('proposal.submit');

Route::get('/admin', function () {
    return redirect()->route('admin.dashboard');
})->middleware('auth:admin');

Route::get('/login', [AdminController::class, 'showLogin'])->name('login');
Route::post('/login', [AdminController::class, 'login'])->middleware('throttle:6,1')->name('login.submit');
Route::get('/admin/login', [AdminController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login'])->middleware('throttle:6,1')->name('admin.login.submit');
Route::middleware('auth:admin')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/proposals', [AdminController::class, 'index'])->name('proposals.index');
    Route::get('/proposals/{proposal}', [AdminController::class, 'show'])->name('proposals.show');
    Route::get('/proposals/{proposal}/document', [AdminController::class, 'download'])->name('proposals.document');
    Route::post('/logout', [AdminController::class, 'logout'])->name('logout');
});
