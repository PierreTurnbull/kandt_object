<?php
define("KANDT_ROOT_DIR", __DIR__ . "/");
define("KANDT_ROOT_URI", "index.php?");
define("KANDT_ACTION_PARAM", "a");
define("KANDT_PAGE_PARAM", "p");

define("APP_ROUTE_CONNECTION", [
    "page.show" => [
        "controller" => "Page",
        "method" => "show"
    ]
];