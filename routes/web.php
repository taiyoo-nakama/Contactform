<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


 //入力ページ
Route::get('/', [ContactController::class, 'index'])->name('contact.index');


//確認ページ
Route::post('/confirm', [ContactController::class, 'confirm'])->name('contact.confirm');


//トップページへ戻る
Route::get('/thanks', [ContactController::class, 'thanks'])->name('contact.thanks');

//管理システム
Route::get('/find', [ContactController::class, 'find'])->name('contact.find');
Route::post('/find', [ContactController::class, 'search'])->name('contact.search');