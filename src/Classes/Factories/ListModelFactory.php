<?php

namespace Todo\Factories;

use Psr\Container\ContainerInterface;
use Todo\Controllers\ListModel;

class ListModelFactory {
    public function __invoke(ContainerInterface $container)
    {
        $db = $container->get('dbConnection');
        return new ListModel($db);
    }
}