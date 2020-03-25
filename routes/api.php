<?php


Route::get('/question', 'QuestionController@index');
Route::get('/question/{question}', 'QuestionController@show');
Route::delete('/question/{question}', 'QuestionController@destroy');


