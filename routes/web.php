<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\KulinerController;
use App\Http\Controllers\UserController;

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

// UserAuthentication

Route::post("/login", [App\Http\Controllers\UserAuthentication::class, "Login"])->name('login');
Route::post("/logout", [App\Http\Controllers\UserAuthentication::class, "LogOut"])->name('logout');
Route::post("/register", [App\Http\Controllers\UserAuthentication::class, "Register"])->name('register');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');
// End Auth

// ===== ADMIN FAUZI ======

Route::prefix('/dashboard')->group(function () {
    Route::get('/wisata', function () {
        return view('pages.wisata.index');
    })->name('wisata.index');
    Route::resource('wisata', WisataController::class)->parameters([
        'wisata' => 'wisataId'  // Ubah parameter default
    ]);
});

Route::prefix('/dashboard')->group(function () {
    Route::get('/kuliner', function () {
        return view('pages.kuliner.index');
    })->name('kuliner.index');
    Route::resource('kuliner', KulinerController::class)->parameters([
        'kuliner' => 'kulinerId'  // Ubah parameter default
    ]);
});

Route::prefix('/dashboard')->group(function () {
    Route::get('/user', function () {
        return view('pages.user.index');
    })->name('user.index');
    Route::resource('user', UserController::class)->parameters([
        'user' => 'userId'  // Ubah parameter default
    ]);
});

// ===== END ADMIN ======



//====== USER ======
Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/elements', function () {
    return view('elements');
});

Route::get('/kuliner', function () {
    return view('kuliner');
})->name('kuliner');

Route::get('/kotabogor', function () {
    return view('kotabogor');
});

Route::get('/kabupatenbogor', function () {
    return view('kabupatenbogor');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/detailwisata', function () {
    return view('detailwisata');
});

Route::get('/detailkuliner', function () {
    return view('detailkuliner');
})->name('detailkuliner');
