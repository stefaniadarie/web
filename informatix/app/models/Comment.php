<?php

class Comment
{
    private $_database;

    public function __construct() {
        $this->_database = Database::getInstance();
    }

    public function create($fields = array()) {
        $this->_database->insert('comments', $fields);
    }

    public function getAll($problem_id) {
        // $comments = $this->_database->get("comments", array("problem_id", "=", $problem_id));
        $comments = $this->_database->query("SELECT * FROM comments c INNER JOIN users u ON c.user_id = u.id WHERE c.problem_id = ?", [$problem_id]);
        return $comments->count() > 0 ? $comments->results() : false;
    }
}