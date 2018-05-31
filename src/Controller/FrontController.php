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
                if (!isset($_GET[\KANDT_PAGE_PARAM])) {
                    echo "Not enough params!";
                    break;
                }
                $controller = new PageController();
                $controller->edit($_GET[\KANDT_PAGE_PARAM]);
                break;
            case "page.delete":
                if (!isset($_GET[\KANDT_PAGE_PARAM])) {
                    echo "Not enough params!";
                    break;
                }
                $controller = new PageController();
                $controller->delete($_GET[\KANDT_PAGE_PARAM]);
                break;
            case "page.doEdit":
                if (!isset($_POST["id"])) {
                    echo "Not enough params!";
                    break;
                }
                $controller = new PageController();
                $controller->doEdit($_POST);
                break;
            case "page.doDelete":
                if (!isset($_POST["id"])) {
                    echo "Not enough params!";
                    break;
                }
                $controller = new PageController();
                $controller->doDelete($_POST["id"]);
                break;
            default:
                echo "default";
                break;
        }
    }
}
