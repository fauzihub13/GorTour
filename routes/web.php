<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\KulinerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KotaBogorController;
use App\Http\Controllers\KabupatenBogorController;
use App\Http\Controllers\HomeController;


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
// Route::get('/', function () {
//     return view('index');
// })->name('index');
Route::get('/', [App\Http\Controllers\HomeController::class, "index"])->name('index.homepage');

Route::get('/destinasi/wisata', [App\Http\Controllers\WisataController::class, "destinasiWisata"])->name('destinasi.wisata.index');
Route::get('/destinasi/wisata/{id}', [App\Http\Controllers\WisataController::class, "detailWisata"])->name('destinasi.wisata.detail');

Route::get('/destinasi/kuliner', [App\Http\Controllers\KulinerController::class, "destinasiKuliner"])->name('destinasi.kuliner.index');
Route::get('/destinasi/kuliner/{id}', [App\Http\Controllers\KulinerController::class, "detailKuliner"])->name('destinasi.kuliner.detail');


// Route::get('/detailwisata', function () {
//     return view('detailwisata');
// });

// Route::get('/kuliner', function () {
//     return view('kuliner');
// })->name('kuliner');

// Route::get('/kotabogor', [App\Http\Controllers\KotaBogorController::class, "index"])->name('');
Route::prefix('/')->group(function () {
    Route::get('/kotabogor', function () {
        return view('kotabogor');
    })->name('kotabogor.index');
    Route::resource('kotabogor', KotaBogorController::class)->parameters([
        'id' => 'id'  // Ubah parameter default
    ]);
});

// Route::get('/kabupatenbogor', function () {
//     return view('kabupatenbogor');
// });

Route::prefix('/')->group(function () {
    Route::get('/kabupatenbogor', function () {
        return view('kabupatenbogor');
    })->name('kabupatenbogor.index');
    Route::resource('kabupatenbogor', KabupatenBogorController::class)->parameters([
        'id' => 'id'  // Ubah parameter default
    ]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
})->name('contact');



// Route::get('/detailkuliner', function () {
//     return view('detailkuliner');
// })->name('detailkuliner');
