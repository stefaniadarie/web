<?php

class Report
{
    private $_database;

    public function __construct()
    {
        $this->_database = Database::getInstance();
    }

    public function create($fields = array())
    {
        $this->_database->insert('report', $fields);
    }

    public function correctSolution($class_id)
    {
        $correct = $this->_database->query("SELECT COUNT(*)
        FROM users u
        JOIN classes_students cs ON u.id = cs.user_id
        JOIN solution s ON u.id = s.user_id
        JOIN problems p ON s.problem_id = p.id
        JOIN homework_problems hp ON p.id = hp.problem_id
        JOIN homeworks h ON hp.homework_id = h.id
        WHERE u.user_type = 'student'
          AND cs.class_id = $class_id
          AND p.status = 'Accepted'
          AND s.solution >= 7;");
        return $correct->results();
    }

    public function incorrectSolution($class_id)
    {
        $incorrect = $this->_database->query("SELECT COUNT(*)
        FROM users u
        JOIN classes_students cs ON u.id = cs.user_id
        JOIN solution s ON u.id = s.user_id
        JOIN problems p ON s.problem_id = p.id
        JOIN homework_problems hp ON p.id = hp.problem_id
        JOIN homeworks h ON hp.homework_id = h.id
        WHERE u.user_type = 'student'
          AND cs.class_id = $class_id
          AND p.status = 'Accepted'
          AND s.solution < 7;");
        return $incorrect->results();
    }

}