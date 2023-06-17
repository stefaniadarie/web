<?php

class Problems extends Controller
{
    public function index() {
        $problem = $this->model("Problem");
        $problems = $problem->getAll();
        $this->view("layout/header");
        $this->view("layout/menu");
        $this->view("problems/index", ["problems" => $problems, "isTeacher" => false]);
        $this->view("layout/footer");
    }

    public function problem($problem_id) {
        $problem = $this->model("Problem");
        $problems = $problem->getById($problem_id);

        $this->view("layout/header");
        $this->view("layout/menu");
        $this->view("problems/problem", ["problems" => $problems, "isStudent" => Session::get(Config::get("session/session_name"))->user_type === "Student"]);
        $this->view("layout/footer");
    }

    public function myproblems() {
        $problem = $this->model("Problem");
        $problems = $problem->getAllForTeacher(Session::get(Config::get("session/session_name"))->id);
        $this->view("layout/header");
        $this->view("layout/menu");
        $this->view("problems/index", ["problems" => $problems, "isTeacher" => Session::get(Config::get("session/session_name"))->user_type === "Teacher"]);
        $this->view("layout/footer");
    }

    public function add() {
        if (Input::exists()) {
            $problem = $this->model("Problem");

            $problem->create(array(
                "name" => Input::get("name"),
                "description" => Input::get("description"),
                "teacher_id" => Session::get(Config::get("session/session_name"))->id,
                "status" => 1
            ));

            Redirect::to("myproblems");         
        }

        $this->view("layout/header");
        $this->view("layout/menu");
        $this->view("problems/add");
        $this->view("layout/footer");
    }
}