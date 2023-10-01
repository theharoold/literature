<?php

class WorkDAO {
    public function getWork($id) {
        $db = new DB();
        $conn = $db->createInstance();

        $select_query = "SELECT * FROM works WHERE id = :id";

        $stmt = $conn->prepare($select_query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();

        $results = $stmt->fetch();

        return $results;
    }

    public function getAllWorks() {
        $db = new DB();
        $conn = $db->createInstance();

        $select_query = "SELECT * FROM works";

        $stmt = $conn->prepare($select_query);
        $stmt->execute();

        $results = $stmt->fetchAll();

        return $results;
    }
    

    public function createWork($author, $title, $publication_year, $content) {
        try {
            $insert_query = "INSERT INTO works (author, title, publication_year, content, create_time) VALUES (:author, :title, :publication_year, :content, NOW())";

            $db = new DB();
            $conn = $db->createInstance();

            $stmt = $conn->prepare($insert_query);
            $stmt->bindParam(":author", $author);
            $stmt->bindParam(":title", $title);
            $stmt->bindParam(":publication_year", $publication_year);
            $stmt->bindParam(":content", $content);

            $stmt->execute();

            return $stmt->rowCount();
        } catch (Exception $e) {
            return $e;
        }
    }

    public function validateToken($token) {
        $db = new DB();
        $conn = $db->createInstance();

        $select_query = "SELECT * FROM auths WHERE token = :token;";

        $stmt = $conn->prepare($select_query);
        $stmt->bindParam(":token", $token);
        $stmt->execute();

        $results = $stmt->fetchAll();

        return count($results);
    }
}

?>