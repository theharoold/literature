<?php

$server_config = [
    "host" => $_SERVER["HTTP_HOST"],
    "schema" => "http://",
    "path" => "/literature",
];

function getFullServerPath() {
    global $server_config;
    return $server_config["schema"] . $server_config["host"] . $server_config["path"];
}

?>