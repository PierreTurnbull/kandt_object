<?php
namespace Controller;

class FrontController
{
    public function __construct()
    {
        $action = $_POST[\KANDT_ACTION_PARAM] ?? $_GET[\KANDT_ACTION_PARAM] ?? "";
        switch ($action) {
            case "page.index":
                $controller = new PageController();
                $controller->index();
                break;
            case "page.show":
                break;
            case "page.edit":
                break;
            case "page.delete":
                break;
            default:
                echo "default";
                break;
        }
    }
}
