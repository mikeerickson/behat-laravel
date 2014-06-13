<?php

Route::get('/', ['as' => 'home', function () {
	return View::make('guests.index', ['guests' => Guestbook::all()]);
}]);

Route::get('/guests', ['as' => 'guests', function()
{
	return View::make('guests.index', ['guests' => Guestbook::all()]);
}]);

Route::get('/guest/create', ['as' => 'guest.create', function () {
	return View::make('guests.create');
}]);

Route::post('/guests', ['as' => 'guests.post', function () {
	Guestbook::create(['name' => Input::get('name')]);
	return Redirect::route('guests');
}]);

