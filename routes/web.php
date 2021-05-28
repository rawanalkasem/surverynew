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
    return view('welcome');
});

//namespace
Route::namespace('front')->group(function(){
    //route::get('user','UserController@showUserName');
    route::get('name','UserController@showUserName');
    
});

route::get('login',function(){
    return 'you cant come in';
})->name('login');
//prefix
//route::group(['prefix'=>'user'] ,function(){
  //  route::get('/',function(){
    //    return 'work';
    //});
//});

route::get('name',function(){

    $data=[];
        $data['name']='rawan';
        $data['surename']='alkasem';

    return view('front.name',$data);
});

route::get('landpage',function(){
    return view('landpage');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
