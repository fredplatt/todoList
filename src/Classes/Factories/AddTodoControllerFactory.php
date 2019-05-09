<?php

namespace Todo\Factories;

use Todo\Controllers\AddTodoController;
use Psr\Container\ContainerInterface;

class AddTodoControllerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $listModel = $container->get('listModel');
        return new AddTodoController($listModel);
    }
}