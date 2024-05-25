<<<<<<< HEAD
<?php
// Carrega o arquivo de rotas
require_once('routes.php');

// Obtém a URL atual
$url = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '/';

// Verifica se a rota existe
if (array_key_exists($url, $routes)) {
    // Separa o nome do controlador e o metodo
    $route = explode('@', $routes[$url]);
    $controllerName = $route[0];
    $methodName = $route[1];

    // Carrega o controlador
    require_once('app/controllers/' . $controllerName . '.php');

    // Instancia o controlador e chama o metodo
    $controller = new $controllerName();
    if ($url === '/forgot-password' && $_SERVER['REQUEST_METHOD'] === 'POST') {
        $controller->handleForm();
    } else {
        $controller->$methodName();
    }
} else {
    // Pagina nao encontrada
    http_response_code(404);
    require_once('app/views/header.php');
    require_once('app/views/error.php');
    require_once('app/views/footer.php');
}
?>
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
olá
=======

>>>>>>> 02142b9 (Update index.html)
=======
olha consegui
>>>>>>> 716d8ce (Adicionar novo arquivo index.html)
=======
ola mundo e Adiel
kkkkkkkkkk
>>>>>>> 19b3e04 (eu coloquei o kkkk)
=======

>>>>>>> 9582cd5 (Update index.html)
>>>>>>> c6d1795 (Rename index.php to teste.php)
=======

>>>>>>> 716d8ce30ac2e219fe006edefea8cf55d194dddf
>>>>>>> dfc231cb025ae1b0021898e7fc8daffa02420744
