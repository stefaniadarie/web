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
    public function getSolution($problem_id){
        $solution = $this->_database->get("solution", ["problem_id", "=", $problem_id]);
        return $solution->count() > 0 ? $solution->first() : false; 
    }
}