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

Route::get('/', function () {
	return redirect()->route('home');
})->middleware('adminRole');

Route::get('index','IndexController@home')->name('home');

Route::get('login','LoginController@getLogin');
Route::post('login','LoginController@postLogin');

Route::get('register','RegisterController@getRegister');
Route::post('register','RegisterController@postRegister');


Route::group(['prefix'=>'admin','middleware' => 'adminRole'], function(){

  	Route::get('/', 'BrandController@index');

	Route::group(['prefix'=>'brand'], function(){
  
    Route::get('addForm', 'BrandController@addForm');
 	Route::post('add_brand', 'BrandController@add');
 	Route::get('editForm/{id}', 'BrandController@editForm');
 	Route::post('edit_brand', 'BrandController@edit');
 	Route::post('check-brand-name', 'BrandController@checkName');
 	Route::get('xoa/{id}', 'BrandController@remove');

	});
});
  
Route::get('logout','LoginController@logout')


// Route::get('database', function(){
// 	$data = DB::table('user')->where('username','$tk')->where('password','$mk')->first();

// 		var_dump($data);
	
	
// })

?>