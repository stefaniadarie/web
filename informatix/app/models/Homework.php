<?php

class Homework
{
    private $_database;

    public function __construct() {
        $this->_database = Database::getInstance();
    }

    public function create($fields = array()) {
        $this->_database->insert('homeworks', $fields);
    }

    public function selectProblem($fields = array()) {
        $this->_database->insert('homework_problems', $fields);
    }

    public function getAll($class_id) {
        $classes = $this->_database->get("homeworks", array("class_id", "=", $class_id));
        return $classes->count() > 0 ? $classes->results() : false;
    }

    public function get($id) {
        // $user = $this->_database->query("SELECT * FROM homeworks h INNER JOIN homework_problems hp ON h.id = hp.homework_id INNER JOIN problems p ON p.id = hp.problem_id WHERE h.class_id = ?", [$id]);
        $homework = $this->_database->get("homeworks", array("id", "=", $id));
        return $homework->count() > 0 ? $homework->first() : false;
    }

    public function getHomeworkProblems($id) {
        $homework = $this->_database->query("SELECT * FROM homework_problems hp INNER JOIN problems p ON p.id = hp.problem_id WHERE hp.homework_id = ?", [$id]);
        // $user = $this->_database->get("homeworks", array("id", "=", $id));
        return $homework->count() > 0 ? $homework->results() : false;
    }

    // public function getStudents($class_id) {
    //     $students = $this->_database->query("SELECT * FROM classes_students cs INNER JOIN users u ON cs.user_id = u.id WHERE cs.class_id = ?", [$class_id]);
    //     return $students->results();
    // }

}