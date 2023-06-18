<?php

class Problem
{
    private $_database;

    public function __construct() {
        $this->_database = Database::getInstance();
    }

    public function create($fields = array()) {
        $this->_database->insert('problems', $fields);
    }

    public function get($name) {
        $problem = $this->_database->get("problems", array("name", "=", $name));
        return $problem->count() > 0 ? $problem->first() : false;
    }

    public function getById($id) {
        $problem = $this->_database->get("problems", array("id", "=", $id));
        return $problem->count() > 0 ? $problem->first() : false;
    }

    public function getHomeworkProblems($id) {
        $problem = $this->_database->query("SELECT * FROM homework_problems hp INNER JOIN problems p ON p.id = hp.problem_id WHERE hp.homework_id = ?", [$id]);
        // $user = $this->_database->get("homeworks", array("id", "=", $id));
        return $problem->count() > 0 ? $problem->results() : false;
    }

    public function getAll() {
        $students = $this->_database->query("SELECT * FROM problems");
        return $students->results();
    }

    public function getAllForTeacher($teacher_id) {
        $problems = $this->_database->get("problems", ["teacher_id", "=", $teacher_id]);
        return $problems->results();
    }

    public function getPending() {
        $problems = $this->_database->get("problems", array("status", "=", "Pending"));
        return $problems->count() > 0 ? $problems->results() : false;
    }

    public function update($problem_id, $fields = []) {
        $this->_database->update("problems", $problem_id, $fields);
    }
}