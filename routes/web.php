<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\User\{Index, Create};
use App\Livewire\Team\TeamComponent;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    // Route::get('/dashboard',UserComponent::class)->name('user.show');
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::prefix('users')->name('users.')->group(function () {
        Route::get('/', Index::class)->name('index');
        Route::get('/create', Create::class)->name('create');
    });
});
Route::get('/teams',TeamComponent::class)->name('team.show');

// Route::get('/userentry',UserEntryComponent::class)->name('userentry.show');
// Route::get('/userentry/create', UserEntryComponent::class)->name('userentry.create');