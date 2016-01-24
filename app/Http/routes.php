<?php



Route::group(['middleware' => 'web'], function () {

	Route::resource('/','Rides\RidesController');

    Route::auth();
    Route::get('/home', 'HomeController@index');
});
