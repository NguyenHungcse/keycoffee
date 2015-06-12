<?php

/**
 * Routes
 * @copyright Copyright (c) 2011 - 2014 Aleksandr Torosh (http://wezoom.com.ua)
 * @author Aleksandr Torosh <webtorua@gmail.com>
 */

namespace Page;

use Application\Mvc\Router\DefaultRouter;

class Routes
{

    public function init(DefaultRouter $router)
    {
        $router->addML('/{slug:[a-zA-Z_-]+}.html', array(
            'module' => 'page',
            'controller' => 'index',
            'action' => 'index'
        ), 'page');

        return $router;

    }

}