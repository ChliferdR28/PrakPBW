<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/", "PageController@login");
Route::get("/home","PageController@home");
Route::get("/coffee","PageController@coffee");
Route::get("/about","PageController@about");
Route::get("/faq","PageController@faq");
Route::get("/coffee/tambah","PageController@tambah");
Route::post("/save","PageController@savecoffee");
Route::get("/formupdate/{id}", "PageController@formupdate");
Route::put("/saveedit/{id}","PageController@saveedit");
Route::get("/delete/{id}", "PageController@deletecoffee");