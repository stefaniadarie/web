<?php

// require_once 'models/Student.php';
class Reports extends Controller {
    public function index() {
      $problem = $this->model("Problem");
      $problems = $problem->getAll();
      $this->view("layout/header");
        $this->view("layout/menu", ["isTeacher" => Session::get(Config::get("session/session_name"))->user_type === "Teacher"]);
        $this->view('reports/index', ["problems" => $problems]);
        $this->view("layout/footer");
    }
    public function generareRaport($class_id) {
          $reportModel = $this->model("Reports");
          $students = $this->model("Student");
          $difficulty = $this->model("Solution");
        
          $correctProblems = $reportModel->correctSolution($class_id);
          $incorrectProblems = $reportModel->incorrectSolution($class_id);
          $solvedProblems = $correctProblems + $incorrectProblems;
        //   $studentsNo = $students->getStudents($class_id);
          $this->view('reports/index');
    }
}