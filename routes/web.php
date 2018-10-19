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

Route::get('/', 'PagesController@index')->name('home');
Route::get('/about-us', 'PagesController@aboutUs');
Route::get('/contact-us', 'PagesController@contactUs');
Route::get('/basket', 'PagesController@basket');
Route::get('/suppliers', 'PagesController@suppliers');
Route::get('/special-offers', 'PagesController@specialOffers');
Route::get('/the-greenhouse', 'PagesController@theGreenhouse');
Route::get('/self-build', 'PagesController@selfBuild');
Route::get('/csr', 'PagesController@csr');
Route::get('/site-map', 'PagesController@siteMap');
Route::get('/careers', 'PagesController@careers');
Route::get('/terms-and-conditions', 'PagesController@termsAndConditions');

Route::get('/information', 'InformationController@index');
Route::get('/information/certifications-accreditations', 'InformationController@certificationsAndAccreditations');

Route::get('/customer-services', 'CustomerServicesController@index');
Route::get('/customer-services/aftersales-support', 'CustomerServicesController@aftersalesSupport');
Route::get('/customer-services/payment-terms', 'CustomerServicesController@paymentTerms');
Route::get('/customer-services/returns', 'CustomerServicesController@returns');
Route::get('/customer-services/delivery', 'CustomerServicesController@delivery');

Route::get('/privacy', 'PrivacyController@index');
Route::get('/privacy/privacy-policy', 'PrivacyController@policy');
Route::get('/privacy/cookie-policy', 'PrivacyController@cookie');
Route::get('/privacy/unconsent', 'PrivacyController@unconsent');

Route::get('/help-and-advice', 'HelpAndAdviceController@index');
Route::get('/help-and-advice/faqs', 'HelpAndAdviceController@faqs');

Route::get('/branches', 'BranchesController@index');
Route::get('/branches/finder', 'BranchesController@finder');

Route::post('/notifications', 'NotificationsController@store');

Route::post('/newsletters', 'NewslettersController@store');

Auth::routes();


