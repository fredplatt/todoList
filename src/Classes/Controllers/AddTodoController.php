<?php

namespace Todo\Controllers;

use Slim\Views\PhpRenderer;

class AddTodoController {

    public $listModel;

    public function __construct(ListModel $listModel)
    {
        $this->listModel = $listModel;
    }

    public function __invoke($request, $response, $args) {
        $userData = $request->getParsedBody();
        $addTask = $userData['newListItem'];
        $this->listModel->addTask($addTask);
        return $response->withRedirect('/');
    }
}