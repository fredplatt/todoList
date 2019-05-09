<?php

namespace Todo\Classes;

use Slim\Views\PhpRenderer;

class HomePageController {
    public $renderer;
    public $listModel;

    public function __construct(PhpRenderer $renderer, $listModel)
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