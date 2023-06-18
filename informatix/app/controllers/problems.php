<?php

class Problems extends Controller
{
    public function index() {
        $problem = $this->model("Problem");
        $problems = $problem->getAll();
        $this->view("layout/header");
        $this->view("layout/menu", ["user" => Session::get(Config::get("session/session_name"))]);
        $this->view("problems/index", ["problems" => $problems, "user" => Session::get(Config::get("session/session_name"))]);
        $this->view("layout/footer");
    }

    public function problem($problem_id) {
        $problem = $this->model("Problem");
        $problems = $problem->getById($problem_id);

        $this->view("layout/header");
        $this->view("layout/menu", ["user" => Session::get(Config::get("session/session_name"))]);
        $this->view("problems/problem", ["problems" => $problems, "user" => Session::get(Config::get("session/session_name"))]);
        $this->view("layout/footer");
    }

    public function myproblems() {
        $problem = $this->model("Problem");
        $problems = $problem->getAllForTeacher(Session::get(Config::get("session/session_name"))->id);
        
        $this->view("layout/header");
        $this->view("layout/menu", ["user" => Session::get(Config::get("session/session_name"))]);
        $this->view("problems/index", ["problems" => $problems, "user" => Session::get(Config::get("session/session_name"))]);
        $this->view("layout/footer");
    }

    public function pending() {
        $problem = $this->model("Problem");
        $problems = $problem->getPending();

        $this->view("layout/header");
        $this->view("layout/menu", ["user" => Session::get(Config::get("session/session_name"))]);
        $this->view("problems/pending", ["problems" => $problems ? $problems : [], "user" => Session::get(Config::get("session/session_name"))]);
        $this->view("layout/footer");
    }

    public function pendingproblem($problem_id) {
        $problem = $this->model("Problem");
        $problems = $problem->getById($problem_id);

        $this->view("layout/header");
        $this->view("layout/menu", ["user" => Session::get(Config::get("session/session_name"))]);
        $this->view("problems/pendingproblem", ["problems" => $problems, "user" => Session::get(Config::get("session/session_name"))]);
        $this->view("layout/footer");
    }

    public function accept($problem_id) {
        $problem = $this->model("Problem");
        $problem->update($problem_id, ["status" => "Accepted"]);
        Redirect::to("problems/pending");
    }

    public function decline($problem_id) {
        $problem = $this->model("Problem");
        $problem->update($problem_id, ["status" => "Declined"]);
        Redirect::to("problems/pending");
    }

    public function add() {
        if (Input::exists()) {
            $problem = $this->model("Problem");

            $problem->create(array(
                "name" => Input::get("name"),
                "description" => Input::get("description"),
                "teacher_id" => Session::get(Config::get("session/session_name"))->id,
                "status" => "Pending"
            ));

            Redirect::to("myproblems");         
        }

        $this->view("layout/header");
        $this->view("layout/menu", ["user" => Session::get(Config::get("session/session_name"))]);
        $this->view("problems/add");
        $this->view("layout/footer");
    }
}