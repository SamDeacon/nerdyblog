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


'superadministrator' => [
    'users' => 'c,r,u,d',
    'acl' => 'c,r,u,d',
    'profile' => 'r,u'
],
'administrator' => [
    'users' => 'c,r,u,d',
    'profile' => 'r,u'
],
'editor' => [
    'profile' => 'r,u'
],
'author' => [
    'profile' => 'r,u'
],
'contributor' => [
    'profile' => 'r,u'
],
'supporter' => [
    'profile' => 'r,u'
],
'member' => [
    'profile' => 'r,u'
],
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/logout', 'Auth\LoginController@logout')->name('logout' );

Route::prefix('manage')->middleware('role:superadministrator|administrator|editor|author|contributor')->group(function(){
  Route::get('/', 'ManageController@index');
  Route::get('/dashboard', 'ManageController@dashboard')->name('manage.dashboard');
  Route::resource('/users', 'UserController');
});

Route::get('/home', 'HomeController@index')->name('home');
