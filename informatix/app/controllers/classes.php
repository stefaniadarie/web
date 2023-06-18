<?php

class Classes extends Controller
{
    public function index() {
        $class = $this->model("clazz");
        $classes = array();
        if (Session::get(Config::get("session/session_name"))->user_type === "Teacher") {
            $classes = $class->getAll(Session::get(Config::get("session/session_name"))->id);
        } else {
            $classes = $class->getAllForStudent(Session::get(Config::get("session/session_name"))->id);
        }

        $this->view("layout/header");
        $this->view("layout/menu", ["user" => Session::get(Config::get("session/session_name"))]);
        $this->view("classes/index", ["classes" => $classes, "user" => Session::get(Config::get("session/session_name"))]);
        $this->view("layout/footer");
    }

    public function add() {
        if (Input::exists()) {
            $class = $this->model("clazz");
            $class->create(array(
                'name' => Input::get('name'),
                'teacher_id' => Session::get(Config::get("session/session_name"))->id
            ));
            Redirect::to("classes");         
        }


        $this->view("layout/header");
        $this->view("layout/menu");
        $this->view("classes/add");
        $this->view("layout/footer");
    }

}