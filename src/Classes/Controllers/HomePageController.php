<?php

namespace Todo\Controllers;

use Slim\Views\PhpRenderer;

class HomePageController {
    public $renderer;
    public $listModel;
    public $db;

    public function __construct(PhpRenderer $renderer, $listModel, $db)
    {
        $this->renderer = $renderer;
        $this->listModel = $listModel;
    }

    public function __invoke($request, $response, $args)
    {
        $data['data'] = $this->listModel->getList();
        return $response->withJson($data, 200);
    }
}