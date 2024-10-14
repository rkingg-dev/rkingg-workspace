<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Dashboard Route
Route::get('/', function () {
    return view('Dashboard');
});

// What's New Route (Changelog)
Route::get('/whats-new', function () {
    return view('whats-new'); // Create a view file named 'whats-new.blade.php' in 'resources/views'
})->name('whats-new');


// Projects Route
Route::get('/projects', function () {
    return view('projects'); // Create a view file named 'projects.blade.php' in 'resources/views'
})->name('projects');


// Websites Route
Route::get('/websites', function () {
    return view('websites'); // Create a view file named 'websites.blade.php' in 'resources/views'
})->name('websites');

// Tasks Route
Route::get('/tasks', function () {
    return view('tasks'); // Create a view file named 'tasks.blade.php' in 'resources/views'
})->name('tasks');

// Notes Route (like Pastebin)
Route::get('/notes', function () {
    return view('notes'); // Create a view file named 'notes.blade.php' in 'resources/views'
})->name('notes');

// Users Route
Route::get('/users', function () {
    return view('users'); // Create a view file named 'users.blade.php' in 'resources/views'
})->name('users');

// Payment History Route (Transactions)
Route::get('/transactions', function () {
    return view('transactions'); // Create a view file named 'transactions.blade.php' in 'resources/views'
})->name('transactions');
