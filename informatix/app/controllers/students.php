<?php

class Students extends Controller
{
    public function index($class_id) {
        $student = $this->model("Student");
        $students = $student->getStudents($class_id);
        $this->view("students/index", ["students" => $students ? $students : [], "class_id" => $class_id, "user" => Session::get(Config::get("session/session_name"))]);
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
}