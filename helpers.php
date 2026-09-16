<?php
function dump(...$args) {
    echo '<pre>';
    var_dump(...$args);
    echo '</pre>';
}
function view($viewName){
    include __DIR__ . "/views/$viewName.php";
}