<?php

/*
 * Routes for the public website
 */

Route::view('/', 'website::pages.home')->name('website.home');

Route::view('/about', 'website::pages.about')->name('website.about');

Route::view('/for-fun', 'website::pages.portfolio')->name('website.portfolio');

Route::view('/cv', 'website::pages.cv')->name('website.cv');

Route::get('dev', function() {
    $pdf = PDF::loadView('website::PDF.cv');

    return $pdf->download('cv.pdf');
});