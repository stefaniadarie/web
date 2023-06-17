<?php

class Student
{
    private $_database;

    public function __construct() {
        $this->_database = Database::getInstance();
    }

    public function create($fields = array()) {
        $this->_database->insert('classes_students', $fields);
    }

    public function getAll($teacher_id) {
        $classes = $this->_database->get("classes", array("teacher_id", "=", $teacher_id));
        return $classes->count() > 0 ? $classes->results() : false;
    }

    public function getStudents($class_id) {
        $students = $this->_database->query("SELECT * FROM classes_students cs INNER JOIN users u ON cs.user_id = u.id WHERE cs.class_id = ?", [$class_id]);
        return $students->results();
    }

}