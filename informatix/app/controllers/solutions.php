<?php

class Solutions extends Controller
{
    public function index() {
        // $solution=$this->model("Solution");
        // $solutions =$solution->getSolution($problem_id);
        // $this->view("layout/header");
        // $this->view("layout/menu", ["isTeacher" => Session::get(Config::get("session/session_name"))->user_type === "Teacher"]);
        // //$this->view("homeworks/homework", ["solutions" => $solutions]);
        // $this->view("layout/footer");
    }

    public function add($problem_id) {
        if (Input::exists()) {
            $solution = $this->model("Solution");
            $solution->create(array(
                "problem_id" => $problem_id,
                "user_id" => Session::get(Config::get("session/session_name"))->id,
                "solution" => Input::get("solution"),
                "rating" => Input::get("rating")
            ));
            Redirect::to("problems/problem/" . $problem_id);         
        }

        $problemModel = $this->model("Problem");
        $problem = $problemModel->getById($problem_id);
        $this->view("solutions/add", ["problem" => $problem]);
    }
}