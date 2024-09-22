<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\GroupActivityController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::post('/clients', [ClientController::class, 'store'])->name('clients.store');
    Route::resource('clients', ClientController::class);
    Route::resource('activities', GroupActivityController::class);

    // Rutas para el perfil del usuario
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Rutas para sesiones dentro de actividades
    Route::get('/activities/{activity}/sessions/create', [SessionController::class, 'create'])->name('activities.sessions.create');
    Route::post('/activities/{activity}/sessions', [SessionController::class, 'store'])->name('activities.sessions.store');
    Route::get('/activities/{activity}/sessions/{session}', [SessionController::class, 'show'])->name('activities.sessions.show');

    // Rutas para sesiones dentro de clientes
    Route::get('/clients/{client}/sessions/create', [SessionController::class, 'create'])->name('clients.sessions.create');
    Route::post('/clients/{client}/sessions', [SessionController::class, 'store'])->name('clients.sessions.store');
    Route::get('/clients/{client}/sessions/{session}', [SessionController::class, 'showClientSession'])->name('clients.sessions.show');

    Route::delete('/sessions/{session}', [SessionController::class, 'destroy'])->name('sessions.destroy');

    Route::get('activities/{activity}/sessions/{session}', [SessionController::class, 'show'])->name('activities.sessions.show');
    Route::get('activities/{activity}/sessions/{session}/edit', [SessionController::class, 'editActivitySession'])->name('activities.sessions.edit');
    
    Route::put('sessions/{session}', [SessionController::class, 'update'])->name('sessions.update');
    Route::get('clients/{client}/sessions/{session}/edit', [SessionController::class, 'edit'])->name('clients.sessions.edit');
});
