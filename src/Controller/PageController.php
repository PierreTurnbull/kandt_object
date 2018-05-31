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

    public function show(int $index)
    {
        $data = $this->model->show($index);
        $this->view->show($data[0]);
    }

    public function edit(int $index)
    {
        $data = $this->model->edit($index);
        $this->view->edit($data[0]);
    }

    public function delete(int $index)
    {
        $data = $this->model->delete($index);
        $this->view->delete($data[0]);
    }

    public function doEdit(array $data)
    {
        $this->model->doEdit($data);
    }
}
