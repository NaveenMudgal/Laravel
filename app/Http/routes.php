<?php
use App\account;

	Route::get('/', function()
	{
		return view('wallet_main');
	});

	Route::get('/login',['as'=>'login', 'uses'=>'AuthController@login']);
	Route::post('/handleLogin',['as'=>'handleLogin', 'uses'=>'AuthController@handleLogin']);
	Route::get('/home', ['middleware' => 'auth', 'as' => 'home', 'uses' => 'UsersController@home']);
	Route::get('/logout', ['as' => 'logout', 'uses' => 'AuthController@logout']);
	Route::get('/wallet_main', ['middleware' => 'auth', 'as' => 'wallet_main', 'uses' => 'UsersController@wallet_main']);
	Route::get('/accounts', ['middleware' => 'auth', 'as' => 'accounts', 'uses' => 'UsersController@accounts']);
	Route::get('/income', ['middleware' => 'auth', 'as' => 'income', 'uses' => 'UsersController@income']);
	Route::get('/expense', ['middleware' => 'auth', 'as' => 'expense', 'uses' => 'UsersController@expense']);

	Route::post("store_acc","transaction@store_acc");

	Route::post("expend_acc","transaction@expend_acc");


	Route::resource('users', 'UsersController');