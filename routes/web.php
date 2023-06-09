<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudyRecordsController;
use App\Http\Controllers\UserController;
use App\Models\StudyRecords;
use App\Models\User;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('study_record')
->middleware(['auth'])//ミドルウェアで認証する
->controller(StudyRecordsController::class)//同じコントローラーを使う
->name('study_record.')//ルート名の頭が共通になる
->group(function(){//グループ化
    Route::get('/','index')->name('index');
    Route::get('/create','create')->name('create');
    Route::post('/','store')->name('store');
    Route::get('/{id}','show')->name('show');
    Route::get('/{id}/edit','edit')->name('edit');
    Route::post('/{id}','update')->name('update');
    Route::post('/{id}/destroy','destroy')->name('destroy');
    Route::get('/search','search')->name('search');
});

Route::middleware(['auth'])->get('/users/{user_id}', [UserController::class, 'show'])->name('users.show');



require __DIR__.'/auth.php';
