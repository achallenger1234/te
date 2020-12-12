<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\blog;
use App\Http\Requests\BlogRequest;
use App\Http\Controllers\BlogController;

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

Route::get('/welcome', function () {
    return view('welcome');
});


//ブログ一覧を表示
Route::get('/', [BlogController::class, 'showList'])->name('blogs');

//ブログ一作成画面
Route::get('/blog/create', [BlogController::class, 'showCreate'])->name('create');

//ブログ登録
Route::post('/blog/store', [BlogController::class, 'exeStore'])->name('store');

//ブログ詳細を表示
Route::get('/blog/{id}', [BlogController::class, 'showDetail'])->name('show');

//ブログ編集画面を表示
Route::get('/blog/edit/{id}', [BlogController::class, 'showEdit'])->name('edit');
Route::post('/blog/update', [BlogController::class, 'exeUpdate'])->name('update');

//ブログ削除
Route::post('/blog/delete/{id}', [BlogController::class, 'exeDelete'])->name('delete');
