<?php

    /*
        VIEW_DIR is your base directory
        for views

        so, when controllers handles incoming request
        first argument of renderView("user/list-user") from controller
        will be rendered to (yourViewDir/user/list-user.php )
    */
    define("VIEW_DIR",__DIR__ . "/views");
?>