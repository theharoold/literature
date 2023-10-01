<?php

class IndexController {
    public function index() {
        $w = new WorkDAO();
        $works = $w->getAllWorks();
        require_once("public/html/main.php");
    }

    public function createWork($token, $author, $title, $publication_year, $content) {
        $w = new WorkDAO();
        $valid = $w->validateToken($token);
        if ($valid > 0) {
            $result = $w->createWork($author, $title, $publication_year, $content);
            var_dump($result);
        }

        #header("Location: " . getFullServerPath());
        #exit();
    }
}

?>