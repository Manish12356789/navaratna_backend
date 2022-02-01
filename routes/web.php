<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', UserController::class. '@index')->name('home');
Route::get('about/', UserController::class. '@about')->name('about');
Route::get('service/{id}', UserController::class. '@service')->name('service');
Route::get('gallery/{id}', UserController::class. '@gallery_filter')->name('gallery.filter');
Route::get('gallery/all', UserController::class. '@gallery')->name('gallery');
Route::get('panchakarma/', UserController::class. '@panchakarma')->name('panchakarma');
Route::get('contact/', UserController::class. '@contact')->name('contact');
Route::get('facilities/', UserController::class. '@facility')->name('facility');
Route::get('treatment/{id}', UserController::class. '@treatment')->name('treatment');

Route::get('contact/save', UserController::class. '@save_contact')->name('contact.save');



Auth::routes();

Route::group(['prefix' => 'admin','middleware' => 'authadmin'], function () {
	// Admin Dashboard
	Route::get('/dashboard', admin\DashboardController::class .'@index')->name('admin.dashboard');

    Route::get('/slider-image', admin\SliderController::class .'@index')->name('admin.sliderImage');
	Route::get('/slider-image/add', admin\SliderController::class .'@create')->name('admin.slider.add');
	Route::post('/slider-image/store', admin\SliderController::class .'@store')->name('admin.slider.store');
	Route::post('/slider-image/edit/{id}', admin\SliderController::class .'@edit')->name('admin.slider.edit');
	Route::post('/slider-image/update/{id}', admin\SliderController::class .'@update')->name('admin.slider.update');
	Route::post('/slider-image/destroy/{id}', admin\SliderController::class .'@destroy')->name('admin.slider.destroy');

	Route::get('/about-us', admin\AboutUsController::class .'@index')->name('admin.about');
	Route::get('/about-us/add', admin\AboutUsController::class .'@create')->name('admin.about.add');
	Route::post('/about-us/store', admin\AboutUsController::class .'@store')->name('admin.about.store');
	Route::post('/about-us/edit/{id}', admin\AboutUsController::class .'@edit')->name('admin.about.edit');
	Route::post('/about-us/update/{id}', admin\AboutUsController::class .'@update')->name('admin.about.update');
	Route::post('/about-us/destroy/{id}', admin\AboutUsController::class .'@destroy')->name('admin.about.destroy');

	Route::get('/services', admin\ServiceController::class .'@index')->name('admin.service');
	Route::get('/services/add', admin\ServiceController::class .'@create')->name('admin.service.add');
	Route::post('/services/store', admin\ServiceController::class .'@store')->name('admin.service.store');
	Route::post('/services/edit/{id}', admin\ServiceController::class .'@edit')->name('admin.service.edit');
	Route::post('/services/update/{id}', admin\ServiceController::class .'@update')->name('admin.service.update');
	Route::post('/services/destroy/{id}', admin\ServiceController::class .'@destroy')->name('admin.service.destroy');

	Route::get('/facilities/all', admin\FacilityController::class .'@index')->name('admin.facility');
	Route::get('/facilities/add', admin\FacilityController::class .'@create')->name('admin.facility.add');
	Route::post('/facilities/store', admin\FacilityController::class .'@store')->name('admin.facility.store');
	Route::post('/facilities/edit/{id}', admin\FacilityController::class .'@edit')->name('admin.facility.edit');
	Route::post('/facilities/update/{id}', admin\FacilityController::class .'@update')->name('admin.facility.update');
	Route::post('/facilities/destroy/{id}', admin\FacilityController::class .'@destroy')->name('admin.facility.destroy');

	Route::get('/panchakarma-types', admin\PanchakarmaTypeController::class .'@index')->name('admin.panchakarma');
	Route::get('/panchakarma-types/add', admin\PanchakarmaTypeController::class .'@create')->name('admin.panchakarma.add');
	Route::post('/panchakarma-types/store', admin\PanchakarmaTypeController::class .'@store')->name('admin.panchakarma.store');
	Route::post('/panchakarma-types/edit/{id}', admin\PanchakarmaTypeController::class .'@edit')->name('admin.panchakarma.edit');
	Route::post('/panchakarma-types/update/{id}', admin\PanchakarmaTypeController::class .'@update')->name('admin.panchakarma.update');
	Route::post('/panchakarma-types/destroy/{id}', admin\PanchakarmaTypeController::class .'@destroy')->name('admin.panchakarma.destroy');

	Route::get('/treatment-types', admin\TreatmentController::class .'@index')->name('admin.treatment');
	Route::get('/treatment-types/add', admin\TreatmentController::class .'@create')->name('admin.treatment.add');
	Route::post('/treatment-types/store', admin\TreatmentController::class .'@store')->name('admin.treatment.store');
	Route::post('/treatment-types/edit/{id}', admin\TreatmentController::class .'@edit')->name('admin.treatment.edit');
	Route::post('/treatment-types/update/{id}', admin\TreatmentController::class .'@update')->name('admin.treatment.update');
	Route::post('/treatment-types/destroy/{id}', admin\TreatmentController::class .'@destroy')->name('admin.treatment.destroy');

	Route::get('/company-contacts', admin\CompanyContactController::class .'@index')->name('admin.companyContact');
	Route::get('/company-contacts/add', admin\CompanyContactController::class .'@create')->name('admin.companyContact.add');
	Route::post('/company-contacts/store', admin\CompanyContactController::class .'@store')->name('admin.companyContact.store');
	Route::get('/company-contacts/edit/{id}', admin\CompanyContactController::class .'@edit')->name('admin.companyContact.edit');
	Route::post('/company-contacts/update/{id}', admin\CompanyContactController::class .'@update')->name('admin.companyContact.update');
	Route::get('/company-contacts/delete/{id}', admin\CompanyContactController::class .'@destroy')->name('admin.companyContact.destroy');

	Route::get('/gallery/all/', admin\GalleryController::class .'@index')->name('admin.gallery');
	Route::get('/gallery/add', admin\GalleryController::class .'@create')->name('admin.gallery.add');
	Route::post('/gallery/store', admin\GalleryController::class .'@store')->name('admin.gallery.store');
	Route::get('/gallery/delete/{id}', admin\GalleryController::class .'@destroy')->name('admin.gallery.destroy');

	Route::get('/gallery-category/all', admin\CategoryController::class .'@index')->name('admin.gallery.category');
	Route::get('/gallery-category/add', admin\CategoryController::class .'@create')->name('admin.gallery.category.add');
	Route::post('/gallery-category/store', admin\CategoryController::class .'@store')->name('admin.gallery.category.store');
	Route::post('/gallery-category/edit/{id}', admin\CategoryController::class .'@edit')->name('admin.gallery.category.edit');
	Route::post('/gallery-category/update/{id}', admin\CategoryController::class .'@update')->name('admin.gallery.category.update');
	Route::get('/gallery-category/delete/{id}', admin\CategoryController::class .'@destroy')->name('admin.gallery.category.destroy');

    Route::get('/contact/all', admin\ContactMessageController::class .'@index')->name('admin.contact');
	Route::get('/contact/add', admin\ContactMessageController::class .'@create')->name('admin.contact.add');
	Route::post('/contact/store', admin\ContactMessageController::class .'@store')->name('admin.contact.store');
	Route::post('/contact/edit/{id}', admin\ContactMessageController::class .'@edit')->name('admin.contact.edit');
	Route::post('/contact/update/{id}', admin\ContactMessageController::class .'@update')->name('admin.contact.update');
	Route::get('/contact/delete/{id}', admin\ContactMessageController::class .'@destroy')->name('admin.contact.destroy');

});