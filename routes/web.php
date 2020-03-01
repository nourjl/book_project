<?php



Route::get('/', function () {
    return view('index');
});

/*

//affichage des "books" : probleme de base de donnee

Route::get('/',[
    'uses'=>'BookController@show',
    'as'=>'books.show'

]);

*/
Route::post('/create',[
    'uses'=>'BookController@create',
    'as'=>'books.create'

]);
