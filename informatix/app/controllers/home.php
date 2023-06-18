<?php

class Home extends Controller
{
    public function index($name = '') {
        $user = $this->model('User');
        $user->name = $name;
        
        // $this->view('home/index');
        if (Session::exists(Config::get("session/session_name"))) {
            $this->view("layout/header");
            $this->view("layout/menu", ["isTeacher" => Session::get(Config::get("session/session_name"))->user_type === "Teacher"]);
            $this->view("layout/footer");
        }
 
    }
}