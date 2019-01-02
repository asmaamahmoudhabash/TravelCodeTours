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

Route::get('/', function () {
    return view('welcome');
});


//Route::get('/', function () {
//    return view('front.main');
//});

Route::get('change-language/{language}', array(
    'middleware' => 'LanguageSwitcher',
    'uses' => 'FrontController@changeLanguage'
));

// front
Route::get('/', 'FrontController@index');
//========================tours=================
Route::get('tour/{sliug}', 'FrontController@tour');
Route::get('tour_map/{slug}', 'FrontController@tourMap');
//========================blog=================
Route::get('blog', 'FrontController@blog');
Route::get('blog/{slug}','FrontController@singleBlog');
//========================gallery=================
Route::get('gallery','FrontController@gallery');
Route::get('gallery/{slug}','FrontController@singleGallery');

Route::get('category/{slug}', 'FrontController@category');//categoty

Route::get('service/{sliug}','FrontController@service');//services

Route::get('booking','FrontController@booking');//booking

Route::get('about_us','FrontController@about');//about_us


//search tour
Route::get('search','FrontController@search');

//search popular posts
Route::get('posts_search','FrontController@post');

//contact_us
Route::get('contact_us', 'FrontController@contact');
Route::post('contactus', 'FrontController@contactus');




















//Route::auth();
//
//Route::get('/home', 'HomeController@index');




 //auth
Route::get('login', ['as' => 'auth.login', 'uses' => 'Auth\AuthController@showLoginForm']);
Route::post('login', ['as' => 'auth.login', 'uses' => 'Auth\AuthController@login']);
Route::get('logout', ['as' => 'auth.logout', 'uses' => 'Auth\AuthController@logout']);


Route::group(array('middleware' => array('auth','client'), 'prefix' => 'controll'), function() {


    Route::get('/dashboard', function () {
        return view('dashboard');
    });
    //dashboard
    Route::resource('users', 'UserController');
    Route::resource('sliders', 'SliderController');
    Route::resource('categories', 'CategoryController');
    Route::resource('tags', 'TagController');
    Route::resource('clients', 'ClientController');
    Route::resource('continentals', 'ContinentController');
    Route::resource('tours', 'TourController');
    Route::resource('news', 'NewsController');
    Route::resource('ads', 'AdsController');
    Route::resource('gallery', 'GalleryController');
    Route::resource('tabs', 'TabController');
    Route::resource('teams', 'TeamController');

    Route::resource('services', 'ServiceController');
   
    
    

    //settings
    Route::get('settings', 'MainController@index');
    Route::put('settings', 'MainController@update');
    Route::get('main-pages', 'MainController@pages');




    Route::get('message/{id}', 'ContactController@show');
    Route::get('contact_us', 'ContactController@index');
    Route::get('contact_us/{id}', 'ContactController@destroy');





});