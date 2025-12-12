<?php

function view($view, $data = []) {
    foreach($data as $key => $value) {
        $$key = $value;
    }
    require "views/template/app.php";
}

function dd(...$values) {
    echo "<pre>";
    var_dump($values);
    echo "</pre>";
    die();
}

// https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status#client_error_responses
function abort($code = 404) {
    http_response_code($code);
    view($code);
    exit();
}