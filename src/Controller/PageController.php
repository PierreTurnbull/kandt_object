<?php
namespace Controller;

use \View\PageView;
use \Model\PageModel;

class PageController
{
    private $model;
    private $view;
    public function __construct()
    {
        $this->model = new PageModel();
        $this->view = new PageView();
    }

    public function index()
    {
        $data = $this->model->index();
        // TODO: check $data
        $this->view->index($data);
    }

    public function show(int $index)
    {
        $data = $this->model->show($index);
        // TODO: check $data
        $this->view->show($data[0]);
    }
}