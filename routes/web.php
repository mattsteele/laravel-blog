<?php

Route::get('contact', 'PagesController@getContact');
Route::get('about', 'PagesController@GetAbout');
Route::get('/', 'PagesController@GetIndex');

Route::resource('posts', 'PostController');