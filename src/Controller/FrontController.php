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
                if (!isset($_GET[\KANDT_PAGE_PARAM])) {
                    echo "Not enough params!";
                    break;
                }
                $controller = new PageController();
                $controller->show($_GET[\KANDT_PAGE_PARAM]);
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
