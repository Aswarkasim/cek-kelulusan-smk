<?php

// use App\Http\Controllers\AdminAuthController;
// use App\Http\Controllers\AdminUserController;

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminCalonController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\HomeCekController;
use App\Models\Calon;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/login', [AdminAuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login/do', [AdminAuthController::class, 'doLogin'])->middleware('guest');
Route::get('logout', [AdminAuthController::class, 'logout'])->middleware('auth');


Route::prefix('/admin')->middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        $data = [
            'calon'     => Calon::count(),
            'content'   => 'admin.dashboard.index'
        ];
        return view('admin.layouts.wrapper', $data);
    });

    Route::resource('/calon', AdminCalonController::class);
    Route::resource('/user', AdminUserController::class);
});


Route::get('/', function () {
    $data = [
        'content'   => 'home.index'
    ];
    return view('home.layouts.wrapper', $data);
});

Route::get('/cek', [HomeCekController::class, 'cek']);
Route::get('/cek/proses', [HomeCekController::class, 'cekProses']);



Route::get('/hasil', function () {
    $data = [
        'content'   => 'home.hasil'
    ];
    return view('home.layouts.wrapper', $data);
});
