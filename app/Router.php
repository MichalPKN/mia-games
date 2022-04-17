<?php

/**
 * Router class
 */
class Router
{
    /**
     * routes to a specific page based on url parameters
     *
     * @param string $uri
     * @return void
     */
    public static function route(string $uri)
    {   
        $uriParams = explode("/", $uri);
        if ($uriParams[0] == 'json'){
            echo (new GamesController($uriParams))->render();
            die;
        }
        if (empty($uriParams[0])) {
            $uriParams[0] = 'home';
        }
        $pages = json_decode(file_get_contents(DATA_DIR . "pages.json"), true);
        if (!isset($pages[$uriParams[0]])) {
            $uriParams[0] = '404';
        }
        echo (new PageController($uriParams))
            ->render();
    }
}