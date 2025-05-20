<?php

require_once('rotas.php');

$url = isset($_SERVER['REQUEST_URI']) ? parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) : '/';
$query = isset($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : '';

if (array_key_exists($url, $rotas)) {
    $rota = explode('@', $rotas[$url]);

    $controllerName = $rota[0];
    $methodName = $rota[1];

    require_once('app/controllers/' . $controllerName . '.php');

    $controller = new $controllerName();

    // Passar os parâmetros da query string para o método
    parse_str($query, $params);
    call_user_func_array([$controller, $methodName], [$params]);
} else {
    // Redireciona para o controlador de erro
    http_response_code(404);

    // Aqui você chama o ErrorController
    require_once('app/controllers/ErrorController.php');
    $errorController = new ErrorController();
    $errorController->showError(404);  // Passa o código do erro (por exemplo, 404)
}
