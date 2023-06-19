<?php

class Problems extends Controller
{
    public function index() {
        $problem = $this->model("Problem");
        $problems = $problem->getAll();
        $this->view("layout/header");
        $this->view("layout/menu", ["user" => Session::get(Config::get("session/session_name"))]);
        $this->view("problems/index", ["problems" => $problems ? $problems : [], "user" => Session::get(Config::get("session/session_name"))]);
        $this->view("layout/footer");
    }

    public function problem($problem_id) {
        $problem = $this->model("Problem");
        $problems = $problem->getById($problem_id);
        $solution = $this->model("Solution");
        $solutions =$solution->getSolution($problem_id);
        $this->view("layout/header");
        $this->view("layout/menu", ["user" => Session::get(Config::get("session/session_name"))]);
        $this->view("problems/problem", ["problems" => $problems, "solution" => $solutions, "user" => Session::get(Config::get("session/session_name"))]);
        $this->view("layout/footer");
    }

    public function myproblems() {
        $problem = $this->model("Problem");
        $problems = $problem->getAllForTeacher(Session::get(Config::get("session/session_name"))->id);
        
        $this->view("layout/header");
        $this->view("layout/menu", ["user" => Session::get(Config::get("session/session_name"))]);
        $this->view("problems/index", ["problems" => $problems ? $problems : [], "user" => Session::get(Config::get("session/session_name"))]);
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

            Redirect::to("problems/myproblems");         
        }

        $this->view("layout/header");
        $this->view("layout/menu", ["user" => Session::get(Config::get("session/session_name"))]);
        $this->view("problems/add");
        $this->view("layout/footer");
    }

    public function export() {
        if (Input::exists()) {
            $_problem = $this->model("Problem");
            $problem = $_problem->get(Input::get("name"));
            $problem_json = json_encode($problem);

            $this->view("layout/header");
            $this->view("layout/menu", ["user" => Session::get(Config::get("session/session_name"))]);
            $this->view("problems/export", ["problem_json" => $problem_json]);
            $this->view("layout/footer");       
        }

        $this->view("layout/header");
        $this->view("layout/menu", ["user" => Session::get(Config::get("session/session_name"))]);
        $this->view("problems/export", ["problem_json" => false]);
        $this->view("layout/footer");
    }

    public function import() {
        if (Input::exists()) {
            $problem = $this->model("Problem");

            $problem_json = json_decode(Input::get("problem_json"));

            $problem->create(array(
                "name" => $problem_json->name,
                "description" => $problem_json->description,
                "teacher_id" => $problem_json->teacher_id,
                "status" => "Pending"
            ));

            Redirect::to("problems/pending");         
        }

        $this->view("layout/header");
        $this->view("layout/menu", ["user" => Session::get(Config::get("session/session_name"))]);
        $this->view("problems/import");
        $this->view("layout/footer");
    }
}

