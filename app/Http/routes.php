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




Route::get ("/","clientcontroller@index");

Route::get ("/contact","clientcontroller@contact");

Route::get ("/about","clientcontroller@about");

Route::get ("/icons","clientcontroller@icons");

Route::get ("/products","clientcontroller@products");

Route::get ("/services","clientcontroller@services");

Route::get ("/typo","clientcontroller@typo");




