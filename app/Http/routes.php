<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    return $app->version();
});

$app->get('product','ProductController@index');
  
$app->get('product/{id}','ProductController@getProduct');
      
$app->post('product','ProductController@createProduct');

$app->post('product/{id}','ProductController@updateProduct');
      
$app->delete('product/{id}','ProductController@deleteProduct');

      