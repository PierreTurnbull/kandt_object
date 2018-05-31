<?php
define("KANDT_ROOT_DIR", __DIR__ . "\\");
define("KANDT_ROOT_URI", "index.php?");
define("KANDT_ACTION_PARAM", "a");
define("KANDT_PAGE_PARAM", "p");
define("KANDT_ROUTE_COLLECTION", [
    "page.index" => [
        "controller" => "page",
        "method" => "show"
    ],
    "page.show" => [
        "controller" => "page",
        "method" => "show"
    ]
]);