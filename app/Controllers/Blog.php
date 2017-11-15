<?php

use uFrame\Controller;

class Blog extends Controller
{

    public function index()
    {
        //Shoe all post
        $blogModel = $this->model("BlogModel");
        $data['postlist'] = $blogModel->getAll();
        $this->view('blog/list', $data);
    }

    public function show($id)
    {
        //Show single blog post
        $blogModel = $this->model("BlogModel");
        $data['post'] = $blogModel->getPost($id);
        $this->view("blog/singlePost", $data);


    }

}