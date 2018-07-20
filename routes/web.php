<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

/*
 * Edited by Samer Al Sayegh:
 * This is the route for calling the social plugin
 */
$router->get('login/{app}', 'Auth\LoginController@redirectToProvider');
/*
 * Edited by Samer Al Sayegh:
 * This is the route for the call back from the pattform after successful login
 */
$router->get('login/{app}/callback', 'Auth\LoginController@handleProviderCallback');
