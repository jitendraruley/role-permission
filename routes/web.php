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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles','RoleController');
    Route::resource('users','UserController');

});
    //Route::get('/UserRegister', function () {
    //    return view('auth.register');
    //});
//Route::get('/hasrole', function (\Illuminate\Http\Request $request) {
//    $user = $request->user();
//    dd($user->hasRole('admin'));
//});
//
//Route::get('/delete_post', function (\Illuminate\Http\Request $request) {
//   $user = $request->user();
//   dd($user->can('delete-post'));
//});
//
//Route::get('/edit_post', function (\Illuminate\Http\Request $request) {
//   $user = $request->user();
//   dd($user->can('edit-post'));
//});
//
//Route::get('/add_post', function (\Illuminate\Http\Request $request) {
//   $user = $request->user();
//   dd($user->can('add-post'));
//});

//Route::get('/', function (\Illuminate\Http\Request $request) {
//    $user = $request->user();
//    $user->givePermission();
//});
//
// Route::get('/removePermission', function (\Illuminate\Http\Request $request) {
//    $user = $request->user();
//    $user->removePermission('delete-post');
// });
//
//Route::get('/', function (\Illuminate\Http\Request $request) {
//    $user = $request->user();
//    $user->givePermission('delete-post');
//});
//
//Route::get('/', function (\Illuminate\Http\Request $request) {
//    $user = $request->user();
//    $user->modifyPermission('edit-post');
//});

