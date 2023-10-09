<?php

use Illuminate\Support\Facades\Route;
use Modules\TestModule\Http\Controllers\Users;
use Modules\TestModule\Http\Controllers\Invoices;
use Modules\TestModule\Http\Controllers\Bills;

/**
 * 'portal' middleware and 'portal/test-module' prefix applied to all routes (including names)
 *
 * @see \App\Providers\Route::register
 */

Route::portal('test-module', function () {
    // Route::get('invoices/{invoice}', 'Main@show')->name('invoices.show');
    // Route::post('invoices/{invoice}/confirm', 'Main@confirm')->name('invoices.confirm');
    Route::apiResource('users', Users::class);
    Route::apiResource('invoices', Invoices::class);
    Route::apiResource('bills', Bills::class);
});
