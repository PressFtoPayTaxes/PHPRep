<?php
use Klein\Klein;
use Klein\Request;
use Klein\Response;
use Core\Auth;

/**
 * @var Klein $router
 */

$router->get('/', function ($request, $response) {
    return controller('PostsController@index', $request, $response);
});

$router->get('/post', function ($request, $response) {
    return controller('PostsController@view', $request, $response);
});

if(Auth::check()) {
    $router->with('/create', function () use ($router) {
        $router->get('', function () {
            return controller('PostsController@create');
        });
        $router->post('', function ($request, $response) {
            return controller('PostsController@insert', $request, $response);
        });
    });

    $router->with('/update', function () use ($router) {
        $router->get('', function ($request, $response) {
            return controller('PostsController@update', $request, $response);
        });
        $router->post('', function ($request, $response) {
            return controller('PostsController@edit', $request, $response);
        });
    });

    $router->get('/delete', function ($request, $response) {
        return controller('PostsController@delete', $request, $response);
    });


    $router->get('/logout', function($request, $response){
        return controller('LoginController@logout', $response);
    });
} else {
    $router->with('/login', function () use ($router) {
        $router->get('', function ($request) {
            return controller('LoginController@login', $request);
        });

        $router->post('', function ($request, $response) {
            return controller('LoginController@make', $request, $response);
        });
    });
}