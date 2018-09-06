<?php

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

Route::get('/crypto-list', function () {

    $list = \App\Coin::query()->get();
    dd($list);

});

Route::get('/currencies-list', function () {

    $list = \App\Currency::query()->rawQuery(['format' => 'json'])->get();
    dd($list);

});

