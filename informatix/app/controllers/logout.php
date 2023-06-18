<?php

class Logout extends Controller
{

    public function index() {
        Session::delete(Config::get('session/session_name'));
        Redirect::to("login");
        $this->view("layout/header");
        $this->view("layout/menu");
        $this->view("layout/footer");
    }
}