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

Route::get('/', 	                ['uses' => 'DynamicPageController@index']);
Route::get('our-cherries', 	        ['uses' => 'DynamicPageController@OurCherries']);
Route::get('sales-directory', 	    ['uses' => 'DynamicPageController@SalesDirectory']);
Route::get('employment-directory',  ['uses' => 'DynamicPageController@EmploymentDirectory']);
Route::get('application-form', 	    ['uses' => 'DynamicPageController@ApplicationForm']);
Route::get('faq', 	                ['uses' => 'DynamicPageController@FAQ']);
Route::get('news', 	                ['uses' => 'DynamicPageController@News']);
Route::get('links', 	            ['uses' => 'DynamicPageController@Links']);
Route::get('members', 	            ['uses' => 'DynamicPageController@Members']);
Route::get('contact', 	            ['uses' => 'DynamicPageController@Contact']);

Route::get('grower-resources', 	    ['uses' => 'DynamicPageController@GrowerResources']);
Route::get('our-marketing', 	    ['uses' => 'DynamicPageController@OurMarketing']);
Route::get('our-research', 	        ['uses' => 'DynamicPageController@OurResearch']);
Route::get('exporting-to-prc', 	    ['uses' => 'DynamicPageController@ExportingToPRC']);

Route::get('employment-info', 	    ['uses' => 'DynamicPageController@EmploymentInfo']);
Route::get('about-us', 	            ['uses' => 'DynamicPageController@AboutUs']);
Route::get('membership',            ['uses' => 'DynamicPageController@Membership']);
