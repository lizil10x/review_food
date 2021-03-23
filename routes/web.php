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

use App\Http\Controllers\HomeController;

Route::get('/', 'PageController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Dang ky
Route::get('dang-ky/','UserController@getRegister')->name('register');
Route::post('dang-ky', 'UserController@postRegister');

//dang nhap
Route::get('dang-nhap/','UserController@getLogin')->name('login');
Route::post('dang-nhap', 'UserController@postLogin');

//logout
Route::get('logout','UserController@getLogout')->name('logout');

//Thông tin cá nhân
Route::get('trang-ca-nhan/{id}' , 'UserController@getInfo') ->name('getInfo');
Route::post('trang-ca-nhan/{id}', 'UserController@postInfo')->name('postInfo');

//dang bai
Route::get('dang-bai-viet','PostController@getPost')->name('getpost');
Route::post('dang-bai-viet','PostController@post')->name('post');
//Route::get('post/{id}','PostController@load')->name('posts');
	
//content post
Route::get('chi-tiet/{id}','PageController@getContentPost')->name('chi-tiet');
Route::get('Edit-post/{id}', 'PostController@getUserEditPost')->name('Edit-Post');
//comment
Route::post('comment/{id}','CommentController@postComment')->name('postcomment');
//rating
Route::post('/danh-gia{id}','CommentController@saveRating')->name('postRate');

//group admin
Route::group(['prefix'=>'admin','middleware'=>'admin'],function(){	

	//Trang Admin
	Route::get('dashboard', 'AdminController@getDashboard')->name('Dashboard');
	
	//list user
	Route::group(['prefix'=>'user'],function(){
		Route::get('list','AdminController@getListUser')->name('getList');

		Route::get('add','AdminController@getAddUser')->name('addUser');
		Route::post('add','AdminController@postAddUser');

		Route::get('edit/{id}','AdminController@getEditUser')->name('editUser');
		Route::post('edit/{id}','AdminController@postEditUser');

		Route::get('delete/{id}','AdminController@getDeleteUser');
	});

	//list post
	Route::group(['prefix'=>'post'],function(){
		Route::get('list','AdminController@getListPost');

		Route::get('add','AdminController@getAddPost')->name('addPost');
		Route::post('add','AdminController@post');

		Route::get('edit/{id}','AdminController@getEditPost')->name('EditPost');
		Route::post('edit/{id}','AdminController@postEditPost');

		Route::get('delete/{id}','AdminController@delete_post');
		Route::get('duyet/{id}','AdminController@getDuyetPost');

	});
});

Route::get('delete/{id}','AdminController@Userdelete_post')->name('deletepost');


//Route::get('search',[
	//'as'=>'search',
	//'uses'=>'PageController@getSearch'
//]);
Route::get('/',[
	'as'=>'trang-chu',
	'uses'=>'PageController@Index'
]);



