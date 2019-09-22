<?php

/*
 * Routes for the demo statboard
 */

Route::prefix('/demo/stat')->namespace('\Rinjax\Website\Http\Controllers')->name('demo.stat.')->group(function (){

    Route::get('/table-data', 'DemoStatController@getTableData')->name('table.data');

});


