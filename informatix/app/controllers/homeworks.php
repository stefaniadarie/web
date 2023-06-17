<?php

class Homeworks extends Controller
{
    public function index($class_id) {
        $homework = $this->model("Homework");
        $homeworks = $homework->getAll($class_id);
        
        $this->view("layout/header");
        $this->view("layout/menu");
        $this->view("homeworks/index", ["homeworks" => $homeworks ? $homeworks : [], "class_id" => $class_id, "isTeacher" => Session::get(Config::get("session/session_name"))->user_type === "Teacher"]);
        $this->view("layout/footer");
    }

    public function add($class_id) {
        if (Input::exists()) {
            $homework = $this->model("Homework");

            $homework->create(array(
                "name" => Input::get("name"),
                "deadline" => Input::get("deadline"),
                "class_id" => $class_id
            ));

            Redirect::to("homeworks/" . $class_id);         
        }
        
        $this->view("layout/header");
        $this->view("layout/menu");
        $this->view("homeworks/add", ["class_id" => $class_id]);
        $this->view("layout/footer");
    }

    public function homework($homework_id) {
        $homeworks = $this->model("Homework");
        $homework = $homeworks->get($homework_id);
        $problems = $homeworks->getHomeworkProblems($homework_id);

        $this->view("layout/header");
        $this->view("layout/menu");
        $this->view("homeworks/homework", ["homework" => $homework, "problems" => $problems]);
        $this->view("layout/footer");
    }

    public function selectproblem($homework_id) {
        if (Input::exists()) {
            $homework = $this->model("Homework");
            $problems = $this->model("Problem");
            $problem = $problems->get(Input::get("name"));

            $homework->selectProblem(array(
                "homework_id" => $homework_id,
                "problem_id" => $problem->id
            ));

            Redirect::to("homeworks/homework/" . $homework_id);         
        }

        $this->view("layout/header");
        $this->view("layout/menu");
        $this->view("homeworks/selectproblem", ["homework_id" => $homework_id]);
        $this->view("layout/footer");

    }

    // public function class($id) {
    //     $class = $this->model("clazz");
    //     $students = $class->getStudents($id);
    //     $this->view("classes/class", ["students" => $students]);
    // }
}