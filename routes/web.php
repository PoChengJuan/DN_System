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
  echo "adfadfadsf";
  echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">'; //網頁編碼宣告
  echo '這裡是字串<br>';
  echo '<a href="">這裡是超連結</a><br>';
  echo "string"; '<b>這裡是粗體字</b><br>';
  echo "<input type='text' value=''><br>";
  echo "<input type='button' value='這是按鈕'><br>";
  //echo Form::file('image');
  echo Form::select('size', array('L' => 'Large', 'S' => 'Small'));
  return view('welcome');
});
