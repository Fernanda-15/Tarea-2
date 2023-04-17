<?php
  Route::get('/books', 'BooksController@index');
  Route::get('book/(:number)', 'BooksController@show');
  Route::get('/authors', 'AuthorsController@index');
  Route::get('author/(:number)', 'AuthorsController@show');
  Route::get('/publishers', 'PublishersController@index');
  Route::get('publisher/(:number)', 'PublishersController@show');

  Route::dispatch();
?>

