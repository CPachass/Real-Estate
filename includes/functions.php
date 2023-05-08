<?php 

require "app.php";

function include_template($name, $homepage = false) {
    $homepage = $homepage;
    include TEMPLATES_URL .  "/${name}.php";
}

?>