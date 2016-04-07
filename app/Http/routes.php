<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');


/////////////////////---------------SELF CREATED ROUTS----------------//////////////////////

Route::get('/404', 'poligonController@pageNotFound');

Route::get('/shopHomePage', 'poligonController@index'); // Index page

Route::get('/shopLoginPage', 'poligonController@login'); // Login Page

Route::get('/shopCartPage', 'poligonController@cart'); // Cart page

Route::get('/shopPaginationPage', 'poligonController@shopPagination'); // Pagination Page

Route::get('/shopDetailsPage', 'poligonController@productDetails'); // Product details Page

Route::get('/shopContactPage', 'poligonController@contacts'); // Product details Page

Route::get('/shopCheckoutPage', 'poligonController@checkout'); // Checkout Page
