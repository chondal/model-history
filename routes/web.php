<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['web', 'auth']], function () {
    Route::group(['namespace' => 'Chondal\ModelHistory\Http\Controllers'], function () {
        Route::post('/notes/add/{model}/{id}', 'HistoryController@store')
            ->name('modelHistory.store');

        Route::post('/notes/destroy/{note}', 'HistoryController@destroy')
            ->name('modelHistory.destroy');
    });
});
