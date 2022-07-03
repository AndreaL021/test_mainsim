<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShoppingListController;


Route::controller(ShoppingListController::class)->group(function(){

    Route::get('/', 'index')->name('homepage');
    Route::post('/create/list/item', 'create')->name('create');
    Route::put('/update/product/price', 'update')->name('update');
    Route::delete('/delete/list/{list}/item', 'delete')->name('delete');
});

