<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WisataController;

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
    Route::get('/admin', function () {
        return view('admin.wisata.index');
    })->name('wisatas.index');
    Route::resource('wisata', WisataController::class)->parameters([
        'wisata' => 'wisataId'  // Ubah parameter default
    ]);
});

// ===== ADMIN FAUZI ======

// ===== ADMIN FARHAN ======
// Route::get('/wisata/admin', function () {
//     return view('admin.wisata.index');
// })->name('wisata.index');

// Route::get('/wisata/create', function () {
//     return view('admin.wisata.create');
// })->name('wisata.create');

// Route::get('/wisata/edit', function () {
//     return view('admin.wisata.edit');
// })->name('wisata.edit');

Route::get('/kuliner/admin', function () {
    return view('admin.kuliner.index');
})->name('kuliner.index');

Route::get('/kuliner/create', function () {
    return view('admin.kuliner.create');
})->name('kuliner.create');

Route::get('/kuliner/edit', function () {
    return view('admin.kuliner.edit');
})->name('kuliner.edit');

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
