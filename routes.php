<?php
  Route::get('/books', 'BooksController@index');
  Route::get('book/(:number)', 'BooksController@show');
  Route::get('/authors', 'AuthorsController@index');
  Route::get('author/(:number)', 'AuthorsController@show');
  Route::get('/publishers', 'PublishersController@index');
  Route::get('publisher/(:number)', 'PublishersController@show');

  Route::get('book/create', 'BooksController@create');
  Route::post('/book', 'BooksController@store');
  Route::get('author/create', 'AuthorsController@create');
  Route::post('/author', 'AuthorsController@store');
  Route::get('publisher/create', 'PublishersController@create');
  Route::post('/publisher', 'PublishersController@store');

  

  Route::dispatch();
?>

