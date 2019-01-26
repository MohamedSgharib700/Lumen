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



session_start();

if (Session::get('local') == 'ar')
    { Session::set('local', 'ar'); }
    else { Session::set('local', 'en'); }

Route::get('lang/{lng}', function ($lang)
        {

                { Session::set('local', $lang); }
                return Redirect::back(); });

 if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = NULL;
}
if (!isset($_SESSION['totalship'])) {
    $_SESSION['totalship'] = 0;
}
if (!isset($_SESSION['total'])) {
    $_SESSION['total'] = 0;
}

Route::get('/', 'SiteController@index');
Route::get('/home', 'SiteController@home');
Route::post('careers', 'ContactUsController@sendcarrer')->name('sendcarrer');
Route::get('certificates', 'SiteController@Certificates');
Route::get('clients', 'SiteController@Clients');
Route::get('colorize', 'SiteController@Colorize');

Route::post('subscribe', 'AjaxController@subscribe'); //ajax


Route::get('product/{id}', 'SiteController@Product');

Route::get('portfolio', 'SiteController@Projects');
Route::get('portfolio/{id}', 'SiteController@Portfolio');

Route::get('project/{id}', 'SiteController@Project');
Route::get('blogs', 'SiteController@Blogs');

Route::get('blog/{id}', 'SiteController@blog');


Route::get('careers', 'SiteController@Careers');

Route::get('blogcat/{id}', 'SiteController@blogcat');
Route::get('faqs', 'SiteController@Faqs');


Route::get('/aboutus', 'SiteController@aboutus');
Route::get('/contactus', 'SiteController@contactus');
Route::resource('/sendmsg', 'ContactUsController');


Route::auth();

Route::get('user/login', 'SiteController@getlogin');
Route::get('user/register', 'SiteController@getregister');

Route::post('ulogin', 'AjaxController@login');
Route::post('uregister', 'AjaxController@register');

//Route::get('sortedby/{sorted_by}', 'SiteController@sortedby');
    Route::get('/sortedby', 'SiteController@sortedby');

Route::get('search', 'SiteController@search');
Route::get('smallcartcontent', 'AjaxController@smallcartcontent'); //small card in header

Route::get('ajax-getcolors/{item_id}', 'SiteController@getcolors');
Route::get('addtocart/{id}', 'AjaxController@addtocart'); //addto card
Route::get('removfromcart/{id}', 'AjaxController@removfromcart');
Route::get('updatecart/{id}/{newq}', 'AjaxController@UpdateCart');
Route::get('Cart', 'SiteController@getcart'); //card page
Route::get('cartcontent', 'AjaxController@getcartcontent'); //card vontent
Route::get('totalcontent', 'AjaxController@gettotalcontent'); //card vontent
Route::get('checkout', 'CheckoutController@index');






Route::group(array('middleware' => ['auth', 'admin'], 'prefix' => 'admin'), function() {
    Route::get('/', 'MessageController@index');
    Route::resource('messages', 'MessageController');

    Route::get('export', 'MessageController@export');

    Route::resource('slider', 'SliderController');
    Route::resource('career', 'CareerController');

    Route::resource('blogs', 'BlogController');
    Route::resource('team', 'TeamController');
    Route::resource('clients', 'ClientsController');

    Route::resource('projects', 'ProjectController');
    Route::resource('portfolio', 'PortfolioController');

    Route::resource('cats', 'CategoryController');
    Route::resource('subcats', 'SubCatController');

    Route::resource('subscribers', 'SubscribersController');
    Route::get('exportsubs', 'SubscribersController@exportsubs');


    Route::get('settings', 'MainController@index');
    Route::put('settings', 'MainController@update');

    Route::get('arsettings', 'MainController@arindex');
    Route::put('arsettings', 'MainController@arupdate');

        Route::get('adds', 'AddController@index');
        Route::get('adds/{id}/edit', 'AddController@edit');
        Route::PATCH('adds/{id}', 'AddController@update');

//    Route::get('warranty', 'WarrantyController@index');
//    Route::get('warranty/{id}/edit', 'WarrantyController@edit');
//    Route::PATCH('warranty/{id}', 'WarrantyController@update');
    Route::resource('myinbox', 'MyInboxController');


    Route::resource('users', 'UsersController');

    Route::get('gallary', 'MainController@create');
    Route::post('gallary', 'MainController@store');
    Route::delete('del/{id}', 'MainController@destroy');

    Route::delete('delgal/{id}', 'BlogController@delgal');
    Route::delete('delgalpro/{id}', 'ProjectController@delgal');






});

Route::get('{cc}/{id}', 'SiteController@CatS');
Route::get('{cc}/{id}', 'SiteController@CatP');
Route::get('{id}', 'SiteController@MainCat');
Route::group(array('middleware' => array('auth', 'client'), 'prefix' => 'client'), function() {

    Route::get('/', 'SiteController@index');

});




