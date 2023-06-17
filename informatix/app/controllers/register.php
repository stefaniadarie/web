<?php

class Register extends Controller
{
    public function index() {
        if (Input::exists()) {
            $user = $this->model("user");
            $user->create(array(
                'name' => Input::get('name'),
                'username' => Input::get('username'),
                'password' => Input::get('password'),
                'user_type' => Input::get('user_type')
            ));
            Redirect::to("register/registered");
        }
        $this->view("layout/header");
        $this->view('register/index');
        $this->view("layout/footer");
    }

    public function registered() {
        $this->view('register/registered');
    }
}