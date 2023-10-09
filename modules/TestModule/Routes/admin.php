<?php

use Illuminate\Support\Facades\Route;
use Modules\TestModule\Http\Controllers\Users;
use Modules\TestModule\Http\Controllers\Invoices;
use Modules\TestModule\Http\Controllers\Bills;

/**
 * 'admin' middleware and 'test-module' prefix applied to all routes (including names)
 *
 * @see \App\Providers\Route::register
 */

Route::admin('test-module', function () {
    Route::get('/', 'Main@index');
    Route::apiResource('users', Users::class);
    Route::apiResource('invoices', Invoices::class);
    Route::apiResource('bills', Bills::class);
});
