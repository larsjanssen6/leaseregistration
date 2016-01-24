<?php



Route::group(['middleware' => 'web'], function () {

	Route::resource('/maakrit','Rides\RidesController');

    Route::auth();
    Route::get('/home', 'HomeController@index');
});
