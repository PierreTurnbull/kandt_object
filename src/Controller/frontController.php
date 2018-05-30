<?php
require_once "pageController/pageController.php";

function frontController(string $controller)
{
    if ($controller === "page") {
        pageController();
    }
}