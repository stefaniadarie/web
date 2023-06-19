<?php

class AboutUs extends Controller
{

    public function index() {
        $this->view("layout/header");
        $this->view("layout/menu", ["user" => Session::get(Config::get("session/session_name"))]);
        $this->view('home/aboutus');
        $this->view("layout/footer");
    }
}