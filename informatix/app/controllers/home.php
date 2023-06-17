<?php

class Home extends Controller
{
    public function index($name = '') {
        $user = $this->model('User');
        $user->name = $name;
        
        // $this->view('home/index');
        if (Session::exists(Config::get("session/session_name"))) {
            $this->view("layout/header");
            $this->view("layout/menu");
            $this->view("layout/footer");
        }
 
    }
}