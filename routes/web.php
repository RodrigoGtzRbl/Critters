<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrittersController;
use App\Http\Controllers\WelcomeController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [WelcomeController::class, 'index']);

Route::get('/dashboard', function () {
    return redirect()->route('profile.edit');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::group(['prefix' => 'critters', 'as' => 'critters.', 'middleware' => ['auth']], function() {
    Route::get('/register', [CrittersController::class, 'create'])->name('register');
    Route::post('/', [CrittersController::class, 'store'])->name('store');
    Route::get('/', [CrittersController::class, 'index'])->name('index');
    Route::get('/myRegisters', [CrittersController::class, 'myRegisters'])->name('myRegisters');
    Route::get('/{id}', [CrittersController::class, 'showById'])->name('showById');
    Route::get('/{id}/edit', [CrittersController::class, 'edit'])->name('edit');
    Route::put('/{id}', [CrittersController::class, 'update'])->name('update');
    Route::delete('/{id}', [CrittersController::class, 'destroy'])->name('destroy');
});

Route::get(
    '/show/all/{start?}',
    [CrittersController::class, 'showAll']
)->name('critters.all');

require __DIR__.'/auth.php';
