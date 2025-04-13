<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::middleware(['auth'])->group(function () {
    Route::prefix('settings')->name('settings.')->group(function () {
        Route::get('/profile', \App\Livewire\Settings\Profile::class)->name('profile');
        Route::get('/password', \App\Livewire\Settings\Password::class)->name('password');
        Route::get('/appearance', \App\Livewire\Settings\Appearance::class)->name('appearance');
    });
});

require __DIR__.'/auth.php';
