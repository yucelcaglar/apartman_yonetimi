<?php

use Illuminate\Support\Facades\Route;



Route::group(['namespace' => 'admin','prefix' => 'admin','as' => 'admin.'], function () {
    Route::get('/', [\App\Http\Controllers\admin\indexController::class,'index'])->name('index');

    Route::group(['namespace' => 'site','prefix' => 'site','as' => 'site.'], function () {
        Route::get('/', [\App\Http\Controllers\admin\site\indexController::class,'index'])->name('index');
        Route::get('/ekle', [\App\Http\Controllers\admin\site\indexController::class,'create'])->name('create');
        Route::post('/ekle', [\App\Http\Controllers\admin\site\indexController::class,'store'])->name('create.post');
        Route::get('duzenle/{id}', [\App\Http\Controllers\admin\site\indexController::class,'edit'])->name('edit');
        Route::post('duzenle/{id}', [\App\Http\Controllers\admin\site\indexController::class,'update'])->name('edit.post');
        Route::get('sil/{id}', [\App\Http\Controllers\admin\site\indexController::class,'delete'])->name('delete');
    });

    Route::group(['namespace' => 'gelir','prefix' => 'gelir','as' => 'gelir.'], function () {
        Route::get('/', [\App\Http\Controllers\admin\gelir\indexController::class,'index'])->name('index');
        Route::get('/ekle', [\App\Http\Controllers\admin\gelir\indexController::class,'create'])->name('create');
        Route::post('/ekle', [\App\Http\Controllers\admin\gelir\indexController::class,'store'])->name('create.post');
        Route::get('duzenle/{id}', [\App\Http\Controllers\admin\gelir\indexController::class,'edit'])->name('edit');
        Route::post('duzenle/{id}', [\App\Http\Controllers\admin\gelir\indexController::class,'update'])->name('edit.post');
        Route::get('sil/{id}', [\App\Http\Controllers\admin\gelir\indexController::class,'delete'])->name('delete');
    });

    Route::group(['namespace' => 'gider','prefix' => 'gider','as' => 'gider.'], function () {
        Route::get('/', [\App\Http\Controllers\admin\gider\indexController::class,'index'])->name('index');
        Route::get('/ekle', [\App\Http\Controllers\admin\gider\indexController::class,'create'])->name('create');
        Route::post('/ekle', [\App\Http\Controllers\admin\gider\indexController::class,'store'])->name('create.post');
        Route::get('duzenle/{id}', [\App\Http\Controllers\admin\gider\indexController::class,'edit'])->name('edit');
        Route::post('duzenle/{id}', [\App\Http\Controllers\admin\gider\indexController::class,'update'])->name('edit.post');
        Route::get('sil/{id}', [\App\Http\Controllers\admin\gider\indexController::class,'delete'])->name('delete');

    });

    Route::group(['namespace' => 'giderEkle','prefix' => 'giderEkle','as' => 'giderEkle.'], function () {
        Route::get('/', [\App\Http\Controllers\admin\giderEkle\indexController::class,'index'])->name('index');
        Route::get('/ekle', [\App\Http\Controllers\admin\giderEkle\indexController::class,'create'])->name('create');
        Route::post('/ekle', [\App\Http\Controllers\admin\giderEkle\indexController::class,'store'])->name('create.post');
        Route::get('duzenle/{id}', [\App\Http\Controllers\admin\giderEkle\indexController::class,'edit'])->name('edit');
        Route::post('duzenle/{id}', [\App\Http\Controllers\admin\giderEkle\indexController::class,'update'])->name('edit.post');
        Route::get('sil/{id}', [\App\Http\Controllers\admin\giderEkle\indexController::class,'delete'])->name('delete');

    });
});


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
