<?php
function pageController()
{
    ?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Page</title>
    </head>
    <body>
        <?php
        if (!isset($_GET["action"])) {
            echo "no action";
        } else if ($_GET["action"] === "list") {
            echo "list";
        } else if ($_GET["action"] === "show") {
            echo "show";
        } else if ($_GET["action"] === "add") {
            echo "add";
        } else if ($_GET["action"] === "delete") {
            echo "delete";
        } else if ($_GET["action"] === "update") {
            echo "update";
        } else {
            echo "action parameter wrong";
        }
        ?>
    </body>
    </html>
    <?php
}