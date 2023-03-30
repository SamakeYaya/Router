<?php 
require_once('router/routeur.php');
$uri = $_SERVER['REQUEST_URI'];
$router= new \router\make\make();
echo $router->getParam($uri);
echo "je suis le register"

?>