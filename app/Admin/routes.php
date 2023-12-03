<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('settings/reg-settings/currencies', CurrencyController::class);
    $router->resource('settings/reg-settings/vat-rates', VatRateController::class);
    $router->resource('settings/reg-settings/units', UnitController::class);
});
