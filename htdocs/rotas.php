<?php
$rotas = [
    '/login' => 'LoginController@showLoginForm',
    '/login/autenticar' => 'LoginController@authenticate',

    '/logout' => 'LogoutController@index',

    '/registrar' => 'RegisterController@showRegisterForm',
    '/registrar/salvar' => 'RegisterController@register',

    '/home' => 'HomeController@index',

    '/erro' => 'HomeController@index',

    '/teste' => 'TesteController@index',
];
