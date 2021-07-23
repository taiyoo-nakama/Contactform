<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


 //入力ページ
Route::get('/', [ContactController::class, 'index'])->name('contact.index');


//確認ページ
Route::post('/confirm', [ContactController::class, 'confirm'])->name('contact.confirm');


//トップページへ戻る
Route::post('/thanks', [ContactController::class, 'thanks'])->name('contact.thanks');

//管理システム
Route::get('/host/{host}', [ContactController::class, 'host'])->name('host');
Route::post('/host', [ContactController::class, 'host'])->name('host');
Route::post('/host/{host}', [ContactController::class, 'bind']);