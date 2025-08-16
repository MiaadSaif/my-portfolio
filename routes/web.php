<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/work', [PageController::class, 'work'])->name('work');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
/*Route::get('/', [PageController::class, 'index'])->name('portfolio'); */
Route::get('/project-details/{id}', [PageController::class, 'getProjectDetails']);

