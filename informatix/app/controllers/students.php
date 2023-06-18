<?php

class Students extends Controller
{
    public function index($class_id) {
        $student = $this->model("Student");
        $students = $student->getStudents($class_id);
<<<<<<< HEAD
        $this->view("layout/header");
        $this->view("layout/menu", ["user" => Session::get(Config::get("session/session_name"))]);
        $this->view("students/index", ["students" => $students, "class_id" => $class_id, "user" => Session::get(Config::get("session/session_name"))]);
        $this->view("layout/footer");
=======
        $this->view("students/index", ["students" => $students ? $students : [], "class_id" => $class_id, "user" => Session::get(Config::get("session/session_name"))]);
>>>>>>> e987abec1adb593c9596b238c29927592e1937a0
    }

    public function add($class_id) {
        if (Input::exists()) {
            $student = $this->model("Student");
            $user = $this->model("User");
            $addedStudent = $user->get(Input::get("name"));
            echo $class_id;
            echo $addedStudent->id;
            $student->create(array(
                'class_id' => $class_id,
                'user_id' => $addedStudent->id
            ));
            Redirect::to("students/" . $class_id);         
        }

        $this->view("students/add", ["class_id" => $class_id]);
    }

    public function class($id) {
        $class = $this->model("clazz");
        $students = $class->getStudents($id);
        $this->view("classes/class", ["students" => $students ? $students : [], "teacher" => false]);
    }
    public function solution($problem_id) {
        $solution = $this->model("solution");
        $students = $solution->getSolution($problem_id);
        $this->view("homeworks/homework", ["students" => $students, "teacher" => false]);
    }
}