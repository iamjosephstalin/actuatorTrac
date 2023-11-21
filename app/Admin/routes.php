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
    $router->resource('actuators', ActuatorController::class);
    $router->resource('alerts', AlertController::class);
    $router->resource('motion-types', MotionTypeController::class);
    $router->resource('actuator-models', ActuatorModelController::class);
    $router->resource('actuator-types', ActuatorTypeController::class);
});
