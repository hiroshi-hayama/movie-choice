<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//あとで消す
Route::get('/choice/choice', function () {
    return view('/choice/choice');
});

//あとで消す
Route::get('/choice/choice2', function () {
    return view('/choice/choice2');
});

//あとで消す
Route::get('/choice/choice3', function () {
    return view('/choice/choice3');
});


// ユーザ登録
Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

// 認証
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');

//Choice選択肢
Route::get('choice', 'ChoiceController@index')->name('choice.get');
Route::get('choice2/{ew_id}', 'ChoiceController@show')->name('choice.show');
Route::get('choice3/{ew_id}/{la_id}', 'ChoiceController@show_genre')->name('choice.show_genre');
Route::get('choice_result/{ew_id}/{la_id}/{genre_id}', 'ChoiceController@show_result')->name('choice.show_result');
Route::get('/', 'ChoiceController@to_top')->name('choice.to_top');


Route::group(['middleware' => ['auth']], function () {
    Route::group(['prefix' => 'users/{id}'], function () {
        Route::get('users_page', 'UsersController@users_index')->name('users.index');
        Route::delete('users_page', 'UsersController@destroy_history')->name('users.detach_history');
        Route::get('favorites', 'UsersController@users_favorite')->name('users.favorites');  
        Route::post('favorite', 'UsersController@store_favorite')->name('users.store_favorite');
        Route::delete('unfavorites', 'UsersController@destroy_favorite')->name('users.detach_favorite');
    });
    Route::resource('users.index', 'UsersController', ['only' => ['users.index']]);

});
