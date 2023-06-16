<?php

class User
{
    private $_database;

    public function __construct() {
        $this->_database = Database::getInstance();
    }

    public function create($fields = array()) {
        $this->_database->insert('users', $fields);
    }

    public function get($username) {
        $user = $this->_database->get("users", array("username", "=", $username));
        return $user->count() > 0 ? $user->first() : false;
    }
}