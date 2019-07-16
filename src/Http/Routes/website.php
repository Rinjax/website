<?php

/*
 * Routes for the public website
 */

Route::view('/', 'website::pages.home')->name('website.home');

Route::view('/cv', 'website::pages.cv')->name('website.cv');