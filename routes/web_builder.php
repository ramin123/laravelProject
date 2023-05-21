<?php

/* custom routes generated by CRUD */


Route::group(array('prefix' => 'admin/','namespace' => 'Admin','middleware' => 'admin','as'=>'admin.'), function () {

Route::get('books', ['as'=> 'books.index', 'uses' => 'BookController@index']);
Route::post('books', ['as'=> 'books.store', 'uses' => 'BookController@store']);
Route::get('books/create', ['as'=> 'books.create', 'uses' => 'BookController@create']);
Route::put('books/{books}', ['as'=> 'books.update', 'uses' => 'BookController@update']);
Route::patch('books/{books}', ['as'=> 'books.update', 'uses' => 'BookController@update']);
Route::get('books/{id}/delete', ['as' => 'books.delete', 'uses' => 'BookController@getDelete']);
Route::get('books/{id}/confirm-delete', ['as' => 'books.confirm-delete', 'uses' => 'BookController@getModalDelete']);
Route::get('books/{books}', ['as'=> 'books.show', 'uses' => 'BookController@show']);
Route::get('books/{books}/edit', ['as'=> 'books.edit', 'uses' => 'BookController@edit']);

});


Route::group(array('prefix' => 'admin/','namespace' => 'Admin','middleware' => 'admin','as'=>'admin.'), function () {

Route::get('books', ['as'=> 'books.index', 'uses' => 'BookController@index']);
Route::post('books', ['as'=> 'books.store', 'uses' => 'BookController@store']);
Route::get('books/create', ['as'=> 'books.create', 'uses' => 'BookController@create']);
Route::put('books/{books}', ['as'=> 'books.update', 'uses' => 'BookController@update']);
Route::patch('books/{books}', ['as'=> 'books.update', 'uses' => 'BookController@update']);
Route::get('books/{id}/delete', ['as' => 'books.delete', 'uses' => 'BookController@getDelete']);
Route::get('books/{id}/confirm-delete', ['as' => 'books.confirm-delete', 'uses' => 'BookController@getModalDelete']);
Route::get('books/{books}', ['as'=> 'books.show', 'uses' => 'BookController@show']);
Route::get('books/{books}/edit', ['as'=> 'books.edit', 'uses' => 'BookController@edit']);

});


Route::group(array('prefix' => 'admin/','namespace' => 'Admin','middleware' => 'admin','as'=>'admin.'), function () {

Route::get('books', ['as'=> 'books.index', 'uses' => 'BookController@index']);
Route::post('books', ['as'=> 'books.store', 'uses' => 'BookController@store']);
Route::get('books/create', ['as'=> 'books.create', 'uses' => 'BookController@create']);
Route::put('books/{books}', ['as'=> 'books.update', 'uses' => 'BookController@update']);
Route::patch('books/{books}', ['as'=> 'books.update', 'uses' => 'BookController@update']);
Route::get('books/{id}/delete', ['as' => 'books.delete', 'uses' => 'BookController@getDelete']);
Route::get('books/{id}/confirm-delete', ['as' => 'books.confirm-delete', 'uses' => 'BookController@getModalDelete']);
Route::get('books/{books}', ['as'=> 'books.show', 'uses' => 'BookController@show']);
Route::get('books/{books}/edit', ['as'=> 'books.edit', 'uses' => 'BookController@edit']);

});


Route::group(array('prefix' => 'admin/','namespace' => 'Admin','middleware' => 'admin','as'=>'admin.'), function () {

Route::get('books', ['as'=> 'books.index', 'uses' => 'BookController@index']);
Route::post('books', ['as'=> 'books.store', 'uses' => 'BookController@store']);
Route::get('books/create', ['as'=> 'books.create', 'uses' => 'BookController@create']);
Route::put('books/{books}', ['as'=> 'books.update', 'uses' => 'BookController@update']);
Route::patch('books/{books}', ['as'=> 'books.update', 'uses' => 'BookController@update']);
Route::get('books/{id}/delete', ['as' => 'books.delete', 'uses' => 'BookController@getDelete']);
Route::get('books/{id}/confirm-delete', ['as' => 'books.confirm-delete', 'uses' => 'BookController@getModalDelete']);
Route::get('books/{books}', ['as'=> 'books.show', 'uses' => 'BookController@show']);
Route::get('books/{books}/edit', ['as'=> 'books.edit', 'uses' => 'BookController@edit']);

});


Route::group(array('prefix' => 'admin/','namespace' => 'Admin','middleware' => 'admin','as'=>'admin.'), function () {

Route::get('books', ['as'=> 'books.index', 'uses' => 'BookController@index']);
Route::post('books', ['as'=> 'books.store', 'uses' => 'BookController@store']);
Route::get('books/create', ['as'=> 'books.create', 'uses' => 'BookController@create']);
Route::put('books/{books}', ['as'=> 'books.update', 'uses' => 'BookController@update']);
Route::patch('books/{books}', ['as'=> 'books.update', 'uses' => 'BookController@update']);
Route::get('books/{id}/delete', ['as' => 'books.delete', 'uses' => 'BookController@getDelete']);
Route::get('books/{id}/confirm-delete', ['as' => 'books.confirm-delete', 'uses' => 'BookController@getModalDelete']);
Route::get('books/{books}', ['as'=> 'books.show', 'uses' => 'BookController@show']);
Route::get('books/{books}/edit', ['as'=> 'books.edit', 'uses' => 'BookController@edit']);

});


Route::group(array('prefix' => 'admin/table/','namespace' => 'Admin','middleware' => 'admin','as'=>'admin.table.'), function () {

Route::get('times', ['as'=> 'times.index', 'uses' => 'Table\TimeController@index']);
Route::post('times', ['as'=> 'times.store', 'uses' => 'Table\TimeController@store']);
Route::get('times/create', ['as'=> 'times.create', 'uses' => 'Table\TimeController@create']);
Route::put('times/{times}', ['as'=> 'times.update', 'uses' => 'Table\TimeController@update']);
Route::patch('times/{times}', ['as'=> 'times.update', 'uses' => 'Table\TimeController@update']);
Route::get('times/{id}/delete', ['as' => 'times.delete', 'uses' => 'Table\TimeController@getDelete']);
Route::get('times/{id}/confirm-delete', ['as' => 'times.confirm-delete', 'uses' => 'Table\TimeController@getModalDelete']);
Route::get('times/{times}', ['as'=> 'times.show', 'uses' => 'Table\TimeController@show']);
Route::get('times/{times}/edit', ['as'=> 'times.edit', 'uses' => 'Table\TimeController@edit']);

});
