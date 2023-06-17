<?php

class Login extends Controller
{

    public function index() {
        if (Input::exists()) {
            $user = $this->model("user");
            $loggedUser = $user->get(Input::get("username"));
            if ($loggedUser && $loggedUser->password === Input::get("password")) {
                Session::put(Config::get('session/session_name'), $loggedUser);
                Redirect::to("home");
            }          
        }
        $this->view("layout/header");
        $this->view('login/index');
        $this->view("layout/footer");
    }
}