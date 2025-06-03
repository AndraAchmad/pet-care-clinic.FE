<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClinicController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ProfileController;

// ✅ Public Pages
Route::get('/', fn() => view('home'))->name('home');
Route::get('/about', fn() => view('about'))->name('about');
Route::get('/services', fn() => view('services'))->name('services');
Route::get('/contact', fn() => view('contact'))->name('contact');
Route::get('/download', fn() => view('download'))->name('download');
Route::get('/clinics-list', [ClinicController::class, 'publicIndex'])->name('clinics.public');

// ✅ Auth Routes (Breeze/Jetstream)
require __DIR__.'/auth.php';

// ✅ User Area (with auth)
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('clinics', ClinicController::class);
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/edit', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile/edit', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::put('/profile/edit/password', [ProfileController::class, 'updatePassword'])->name('profile.updatePassword');
    Route::post('/profile/edit/photo', [ProfileController::class, 'updatePhoto'])->name('profile.photo');
});

// ✅ Admin Login Routes
Route::get('/admin/login', [AuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');

// ✅ Admin Area (with auth + admin middleware)
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', fn() => view('admin.dashboard'))->name('admin.dashboard');
    Route::get('/analytics', fn() => view('admin.analytics'))->name('admin.analytics');
    Route::get('/profile', fn() => view('admin.profile'))->name('admin.profile');
});
