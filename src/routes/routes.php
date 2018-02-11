<?php

Route::group(['prefix' => 'angka-harapan-hidup'], function() {
    Route::get('demo', 'ChemprenX\AngkaHarapanHidup\Http\Controllers\AngkaHarapanHidupController@demo');
});
