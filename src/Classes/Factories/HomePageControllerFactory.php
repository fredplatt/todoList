<?php

namespace Todo\Factories;

use Psr\Container\ContainerInterface;
use Todo\Controllers\HomePageController;

class HomePageControllerFactory {

    public function __invoke(ContainerInterface $container)
    {
        $renderer = $container->get('renderer');
        $listModel = $container->get('listModel');
        $db = $container->get('dbConnection');
        return new HomePageController($renderer, $listModel, $db);
    }
}