<?php

use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

Route::view('/', 'welcome');

Route::view('home', 'livewire.pages.courses.home')
    ->middleware(['auth', 'verified'])
    ->name('home');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/course', [CourseController::class, 'index'])
    ->name('courses.index');

Route::get('/courses/{id}', [CourseController::class, 'show'])
    ->name('courses.show');

Route::get('/courses/{id}/video', [CourseController::class, 'video'])
    ->name('courses.video');

Route::post('/logout', function (Request $request) {

    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/');
})->name('logout');

require __DIR__ . '/auth.php';
