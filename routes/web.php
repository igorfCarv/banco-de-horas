<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\User\{UserComponent, UserEntryComponent};

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
});


Route::get('/userentry',UserEntryComponent::class)->name('userentry.show');
Route::get('/userentry/create', UserEntryComponent::class)->name('userentry.create');