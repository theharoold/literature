<?php

require('api/flight/Flight.php');
require_once("config/server.php");
require_once("config/db.php");
require_once("model/workDAO.php");
require_once("controller/IndexController.php");

session_start();

// Redirects to either the dashboard (if user is logged in)
// or to the login page (if not logged in)
Flight::route("GET /", function() {
    $index = new IndexController();
    $index->index();
});

Flight::route("POST /work", function() {
    
    $token = $_POST["token"];
    $author = $_POST["author"];
    $title = $_POST["title"];
    $publication_year = $_POST["publication_year"];
    $content = $_POST["content"];
    $index = new IndexController();

    $index->createWork($token, $author, $title, $publication_year, $content);
});



Flight::start();

?>