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
        $this->view->index($data);
    }
}