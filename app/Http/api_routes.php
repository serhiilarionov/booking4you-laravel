<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where all API routes are defined.
|
*/


Route::resource('categories', 'CategoryAPIController');

Route::get('langs/current','LangAPIController@getCurrent');
Route::post('langs/set-current','LangAPIController@setCurrent');
Route::post('lang/content/{name}','LangAPIController@getContent');
Route::resource('langs', 'LangAPIController');

Route::resource('cities', 'CityAPIController');

Route::resource('countries', 'CountryAPIController');

Route::resource('regions', 'RegionAPIController');

Route::resource('districts', 'DistrictAPIController');

Route::resource('companies', 'CompanyAPIController');

Route::resource('buildings', 'BuildingAPIController');

Route::resource('streets', 'StreetAPIController');

Route::resource('parserCompanies', 'ParserCompanyAPIController');