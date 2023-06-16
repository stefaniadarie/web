<?php

class Logout extends Controller
{

    public function index() {
        Session::delete(Config::get('session/session_name'));
        Redirect::to("/login");
    }
}