<?php

class Logout extends Controller
{

    public function index() {
        Session::delete(Config::get('session/session_name'));
        Redirect::to("login");
        $this->view("layout/header");
        $this->view("layout/menu", ["isTeacher" => Session::get(Config::get("session/session_name"))->user_type === "Teacher"]);
        $this->view("layout/footer");
    }
}