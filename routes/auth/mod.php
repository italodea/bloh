<?php
Route::prefix('mod')->name('mod.')->namespace('Mod')->group(function () {
    Auth::routes();
    Route::get('home', 'HomeController@index')->name('home');
    Route::middleware('auth:mod')->group(function () {
        Route::get('another', 'AnotherController@index')->name('another');
    });
});