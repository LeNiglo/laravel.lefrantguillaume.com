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

Route::get('/', 'SiteController@home')->name('home');

Route::get('cv', 'SiteController@cv')->name('cv');
Route::get('contact', 'SiteController@contact')->name('contact');
Route::post('contact', 'SiteController@sendmail')->name('sendmail');

/*
 * Admin Section
 */

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin')->name('login');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout')->name('logout');

// Registration routes...
if (env('APP_ENV') == 'local') {
    Route::get('auth/register', 'Auth\AuthController@getRegister')->name('register');
    Route::post('auth/register', 'Auth\AuthController@postRegister');
} else {
    Route::any('/auth/register', function () {
        return redirect()->route('home');
    })->name('register');
}

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail')->name('resetpwd');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

Route::group(['prefix' => 'admin', 'middleware' => 'auth', 'as' => 'admin::'], function () {
    Route::get('/', "AdminController@dashboard")->name('dashboard');
    Route::get('details', "AdminController@details")->name('details');
    Route::get('studies', "AdminController@studies")->name('studies');
    Route::get('mails', "AdminController@mails")->name('mails');
    Route::get('mail/{id}', "AdminController@mail")->name('mail');
    Route::get('skills', "AdminController@skills")->name('skills');
    Route::get('experiences', "AdminController@experiences")->name('experiences');

    Route::group(['prefix' => 'forms', 'as' => 'forms::'], function () {
        Route::post('change-email', "AdminController@changeEmail")->name('changeEmail');
        Route::post('change-password', "AdminController@changePassword")->name('changePassword');
        Route::post('change-address', "AdminController@changeAddress")->name('changeAddress');
        Route::post('manage-study', "AdminController@manageStudy")->name('manageStudy');
        Route::post('manage-skill', "AdminController@manageSkill")->name('manageSkill');
        Route::post('manage-experience', "AdminController@manageExperience")->name('manageExperience');
    });
});
