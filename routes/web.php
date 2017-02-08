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
    return view('home');
});

Route::get('our-cherries', 	        ['uses' => 'PageController@OurCherries']);
Route::get('sales-directory', 	    ['uses' => 'PageController@SalesDirectory']);
Route::get('employment-info', 	    ['uses' => 'PageController@EmploymentInfo']);
Route::get('employment-directory',  ['uses' => 'PageController@EmploymentDirectory']);
Route::get('application-form', 	    ['uses' => 'PageController@ApplicationForm']);
Route::get('about-us', 	            ['uses' => 'PageController@AboutUs']);
Route::get('membership',            ['uses' => 'PageController@Membership']);
Route::get('faq', 	                ['uses' => 'PageController@FAQ']);
Route::get('news', 	                ['uses' => 'PageController@News']);
Route::get('links', 	            ['uses' => 'PageController@Links']);
Route::get('members', 	            ['uses' => 'PageController@Members']);
Route::get('contact', 	            ['uses' => 'PageController@Contact']);

Route::get('grower-resources', 	    ['uses' => 'PageController@GrowerResources']);
Route::get('our-marketing', 	    ['uses' => 'PageController@OurMarketing']);
Route::get('our-research', 	        ['uses' => 'PageController@OurResearch']);

