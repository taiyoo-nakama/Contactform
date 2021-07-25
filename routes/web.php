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
Route::get('/host', [ContactController::class, 'host'])->name('host');


Route::post('/host/search', [ContactController::class, 'search'])->name('host.search');
Route::post('/host/create', [ContactController::class, 'create'])->name('create');
Route::post('/host/delete',[ContactController::class,'delete'])->name('delete');
Route::post('/host/{host}', [ContactController::class, 'bind']);

/*Route::get('/find', [ContactController::class, 'find'])->name('find');
Route::post('/find/search', [ContactController::class, 'search'])->name('host.search');