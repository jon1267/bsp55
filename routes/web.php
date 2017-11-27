<?php

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [
    'uses' => 'IndexController@index',
    'as' => 'index.home'
]);

Route::get('/services', [
    'uses' => 'AboutController@services',
    'as' => 'index.services'
]);

Route::get('/team', [
    'uses' => 'AboutController@team',
    'as' => 'index.team'
]);

Route::get('/portfolios', [
    'uses' => 'PortfolioController@portfolio',
    'as' => 'index.portfolio'
]);

Route::get('/catalog', [
    'uses' => 'PortfolioController@catalog',
    'as' => 'index.catalog'
]);

Route::get('/price', [
    'uses' => 'PortfolioController@price',
    'as' => 'index.price'
]);

Route::get('/contact', [
    'uses' => 'ContactController@contact',
    'as' => 'index.contact'
]);

// All blog posts(articles blog)
Route::get('/blog', 'BlogController@blog')->name('index.blog');

// Show one blog post with comments, form comment add...(blog single)
Route::get('/blog/{id}','BlogController@blogSingle')->name('getBlog.single');

//Store comment on blog post (or article) front page from all users (guest)
Route::resource('comment', 'CommentController', ['only'=>['store']]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
