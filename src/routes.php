<?php

  Route::get('/', function () { echo 'GET request</p>'; });

  Route::post('/', function () { echo 'POST request</p>'; });

  Route::put('/', function () { echo 'PUT request</p>'; });

  Route::delete('/', function () { echo 'DELETE request</p>'; });

  Route::any('/', function () { echo 'ANY request</p>'; });

  Route::error( function () { echo '404 :: Not Found';});

  Route::dispatch();
?>
