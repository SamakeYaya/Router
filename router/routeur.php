<?php

namespace router\make;

/**
 * une classe de creation des routes
 */
class make
{

    /**
     * Cette fonction permet de créer une route
     *
     * @param string $url
     * @return void
     */
    public function route($url)
    {
        $filestate = file_exists($url . '.php');
        if ($filestate == true) {
            require_once $url . '.php';
        } else {
            require_once 'pages/error.php';
        }
    }

    /**
     * Cette fonction permet d'obtenir un paramètre passé en URL
     *
     * @param string $uri
     * @return string|null
     */
    public function getParam($uri)
    {
        $param = explode('?', $uri);
        return isset($param[1]) ? $param[1] : null;
    }

    /**
     * Cette fonction est un palliatif à un problème d'URL vide utile pour les fichiers index
     * Elle doit être appelée dans tous les fichiers index existants dans votre projet
     *
     * @return void
     */
    public function setUrl()
    {
        if (isset($_GET['url'])) {
            return $_GET['url'];
        } else {
            require_once 'pages/home.php';
            exit();
        }
    }

    /**
     * Cette fonction permet d'exécuter une URL spécifique
     *
     * @param string $url
     * @return void
     */
    public function setExecUrl($url)
    {
        $filestate = file_exists($url . '.php');
        if ($filestate == true) {
            require_once $url . '.php';
        } else {
            require_once 'pages/error.php';
        }
    }
}
