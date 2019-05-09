<?php

namespace Todo\Controllers;

class AddTodoController {

    public $listModel;

    public function __construct(ListModel $listModel)
    {
        $this->listModel = $listModel;
    }

    public function __invoke($request, $response, $args) {
        $userData = $request->getParsedBody();
        $addTodo = $userData['newListItem'];
        $this->listModel->addTodo($addTodo);
        return $response->withRedirect('/');
    }
}