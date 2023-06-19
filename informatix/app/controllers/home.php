<?php

class Home extends Controller
{
    public function index($name = '') {
        $user = $this->model('User');
        $user->name = $name;
        
        // $this->view('home/index');
        if (Session::exists(Config::get("session/session_name"))) {
            $this->view("layout/header");
            $this->view("layout/menu", ["user" => Session::get(Config::get("session/session_name"))]);
            $this->view("home/index", ["user" => Session::get(Config::get("session/session_name"))]);
            $this->view("layout/footer");
        }
        else{
            $this->view("layout/header");
            $this->view("home/first_page");
            $this->view("layout/footer");
        }
 
    }
}