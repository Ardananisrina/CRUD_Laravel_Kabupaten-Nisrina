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
    //return view('welcome');
    echo "Selamat Datang Nisrina";
});

Route::get('/satu', function () {
    //return view('welcome');
    echo "one";
});

Route::get('/dua', function () {
    //return view('welcome');
    echo "two";
});

Route::get('/tiga', function () {
    //return view('welcome');
    echo "three";
});

Route::get('/empat', function () {
    //return view('welcome');
    echo "four";
});

Route::get('/lima', function () {
    //return view('welcome');
    echo "five";
});

Route::get('/enam', function () {
    //return view('welcome');
    echo "six";
});

Route::get('/tujuh', function () {
    //return view('welcome');
    echo "seven";
});

Route::get('/delapan', function () {
    //return view('welcome');
    echo "eight";
});

Route::get('/sembilan', function () {
    //return view('welcome');
    echo "nine";
});

//1. echo langsung nested
Route::get('/aaa', function () {
    //return view('welcome');
    echo "ten";
});

//2. manggil view
Route::get('/sepuluh', function () {
    //return view('welcome');
    return view('wonjin');
    //lokasi view
});

Route::get('/template', function () {
    //return view('welcome');
    return view('template');
    //lokasi view
});

//3. manggil Controller
route::get('/usang', 'usang@index');
/* file controllernya namanya usang
   nama url usang
   nama functionnya index
*/

route::get('/jeruk', 'usang@bakar');

route::get('/terong', 'kentang@swallow');

route::get('/CleaningService', 'CleanerController@index');

route::resource('kontak', 'Kontak');
route::get('/', function(){
  return view('index');
});

route::get('login', 'Login@index');
route::post('login/cek', 'Login@cek');
route::get('/dash', 'Dashboard@index');
route::get('/', 'login@logout');

route::resource('/satpam', 'Satpam');

route::resource('/kabupaten', 'Kabupaten');
