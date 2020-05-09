<?php


/* Route::get('/question', 'QuestionController@index');
Route::get('/question/{question}', 'QuestionController@show');
Route::delete('/question/{question}', 'QuestionController@destroy'); */

//use Illuminate\Routing\Route;

Route::apiResource('/question', 'QuestionController');

Route::apiResource('/category', 'CategoryController');

Route::apiResource('/question/{question}/reply', 'ReplyController');

Route::post('/like/{reply}', 'LikeController@likeIt');

Route::delete('/like/{reply}', 'LikeController@unkeIt');


