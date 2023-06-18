<?php

class Comments extends Controller
{
    public function index($problem_id) {
        $comment = $this->model("Comment");
        $comments = $comment->getAll($problem_id);

        $this->view("layout/header");
        $this->view("layout/menu", ["user" => Session::get(Config::get("session/session_name"))]);
        $this->view("comments/index", ["comments" => $comments ? $comments : [], "problem_id" => $problem_id]);
        $this->view("layout/footer");
    }

    public function add($problem_id) {
    
        if (Input::exists()) {
            $comment = $this->model("comment");
            $comment->create(array(
                'comment' => Input::get('comment'),
                'user_id' => Session::get(Config::get("session/session_name"))->id,
                'problem_id' => $problem_id
            ));
            Redirect::to("comments/index/" . $problem_id);         
        }

        $this->view("layout/header");
        $this->view("layout/menu", ["user" => Session::get(Config::get("session/session_name"))]);
        $this->view("comments/add", ["problem_id" => $problem_id]);
        $this->view("layout/footer");
    }
    

}