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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', 'PagesController@index')->name('homepage');
Route::get('/newplace', 'PagesController@newplace')->name('newplace');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/contact', 'PagesController@contact')->name('contact');
Route::get('/listallplaces', 'PagesController@listallplaces')->name('listallplaces');
Route::get('/seeplace/{place}', 'PlaceController@seeplace')->name('seeplace');

Route::post('/save', 'PlaceController@store')->name('savenewplace');
Route::post('/contactform', 'HomeController@contactform')->name('contactform');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/administrator', 'HomeController@index')->name('admin');
Route::group(['middleware' => ['auth']], function () {
	Route::get('/allplaces', 'PlaceController@index')->name('allplaces');
	Route::get('/addplace', 'PlaceController@create')->name('addplace');
	Route::post('/updateplace/{place}', 'PlaceController@update')->name('updateplace');
	Route::get('/deleteplace/{place}', 'PlaceController@delete')->name('deleteplace');
	Route::get('/changestatus/{place}', 'PlaceController@changestatus')->name('changestatus');
Route::get('/viewplace/{place}', 'PlaceController@editplace')->name('editplace');
});





/**/
/*Route::get('/clean', function () {

        echo $exitCode = Artisan::call('route:cache');
        echo $exitCode = Artisan::call('config:cache');
        echo $exitCode = Artisan::call('cache:clear');

});*/

/*Route::get('/register', function()
{
	return redirect('home');

});*/