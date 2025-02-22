<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductController;

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/home', function () {
//     return '<h1> Home page </h1>';
// });
// Route::get('/param/{id}/{name}', function ($id,$name) {
//     return $id. '<br>'.$name;
// });
// Route::get('/',function(){
//     return view('pages.home');
// });
// Route::get('/apropos',function(){
//     return view('pages.apropos');
// });
// Route::get('/services',function(){
//     return view('pages.services');
// });
Route::get('/',[PagesController:: class ,'home']);
Route::get('/apropos',[PagesController:: class ,'apropos']);
Route::get('/services',[PagesController:: class ,'services']);
Route::get('/show/{id}',[PagesController:: class ,'show']);
Route::get('/newproduct',[PagesController:: class ,'newProduct']);
Route::post('/saveproduct',[PagesController:: class ,'saveProduct']);
Route::get('/edit/{id}',[PagesController:: class ,'edit']);
Route::get('/delete/{id}',[PagesController:: class ,'delete']);
// Route::get('/delete/{id}',[PagesController:: class ,'editProduct']);
Route::post('/savechanges',[PagesController:: class ,'savechanges']);
Route::resource('/products', ProductController::class);
// Route::get('/services/{id}/{name}',[PagesController:: class ,'services']);
