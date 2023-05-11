<?php 

require "app.php";

function include_template($name, $homepage = false) {
    $homepage = $homepage;
    include TEMPLATES_URL .  "/${name}.php";
}

function is_auth() : bool {
    session_start();
    if($_SESSION["auth"] === true) {
        return true;
    }
    return false;
}

?>