<?php

class Logout extends Controller
{

    public function index() {
        Session::delete(Config::get('session/session_name'));
        Redirect::to("login");
        $this->view("layout/header");
        $this->view("layout/menu", ["user" => Session::get(Config::get("session/session_name"))]);
        $this->view("layout/footer");
    }
}