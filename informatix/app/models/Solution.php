<?php

class Solution
{
    private $_database;

    public function __construct() {
        $this->_database = Database::getInstance();
    }

    public function create($fields = array()) {
        $this->_database->insert('solution', $fields);
    }

    public function saveRating($student_id){
        $rating = $this->_database->get("rating", ["student_id", "=", $student_id]);
        return $rating->results();
    }

}