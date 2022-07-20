<?php

Route::group(['middleware' => ['web','apipos'], 'prefix' => 'api', 'namespace' => 'Modules\Api\Http\Controllers'], function(){
	
	Route::group(['prefix' => 'business'], function(){
		Route::post('/create', 'V1\BusinessController@postCreate')->name('api.post.business.create');
    	Route::get('/detail/{id}', 'V1\BusinessController@getDetail')->name('api.get.business.detail');
	});

	Route::group(['prefix' => 'package'], function(){
		Route::post('/subcribe/{id}', 'V1\PackageController@postSubcribe')->name('api.post.packages.subcribe');
    	Route::post('/renew/{id}', 'V1\PackageController@getRenew')->name('api.post.packages.renew');
	});
});
