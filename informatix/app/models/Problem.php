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
        $user = $this->_database->get("problems", array("name", "=", $name));
        return $user->count() > 0 ? $user->first() : false;
    }

    public function getById($id) {
        $user = $this->_database->get("problems", array("id", "=", $id));
        return $user->count() > 0 ? $user->first() : false;
    }

    public function getHomeworkProblems($id) {
        $user = $this->_database->query("SELECT * FROM homework_problems hp INNER JOIN problems p ON p.id = hp.problem_id WHERE hp.homework_id = ?", [$id]);
        // $user = $this->_database->get("homeworks", array("id", "=", $id));
        return $user->count() > 0 ? $user->results() : false;
    }

    public function getAll() {
        $students = $this->_database->query("SELECT * FROM problems");
        return $students->results();
    }

    public function getAllForTeacher($teacher_id) {
        $students = $this->_database->get("problems", ["teacher_id", "=", $teacher_id]);
        return $students->results();
    }

}