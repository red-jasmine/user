<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

Route::group([
                 'prefix'     => config('admin.route.prefix'),
                 'namespace'  => 'RedJasmine\User\Http\Controllers\Admin',
                 'middleware' => config('admin.route.middleware'),
             ], function (Router $router) {


    Route::resource('users','UserController');

}
);
