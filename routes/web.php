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

Route::get('our-cherries', 	        ['uses' => 'StaticPageController@OurCherries']);
Route::get('sales-directory', 	    ['uses' => 'StaticPageController@SalesDirectory']);
Route::get('employment-info', 	    ['uses' => 'StaticPageController@EmploymentInfo']);
Route::get('employment-directory',  ['uses' => 'StaticPageController@EmploymentDirectory']);
Route::get('application-form', 	    ['uses' => 'StaticPageController@ApplicationForm']);
Route::get('about-us', 	            ['uses' => 'StaticPageController@AboutUs']);
Route::get('membership',            ['uses' => 'StaticPageController@Membership']);
Route::get('faq', 	                ['uses' => 'StaticPageController@FAQ']);
Route::get('news', 	                ['uses' => 'StaticPageController@News']);
Route::get('links', 	            ['uses' => 'StaticPageController@Links']);
Route::get('members', 	            ['uses' => 'StaticPageController@Members']);
Route::get('contact', 	            ['uses' => 'StaticPageController@Contact']);

Route::get('grower-resources', 	    ['uses' => 'StaticPageController@GrowerResources']);
Route::get('our-marketing', 	    ['uses' => 'StaticPageController@OurMarketing']);
Route::get('our-research', 	        ['uses' => 'StaticPageController@OurResearch']);

