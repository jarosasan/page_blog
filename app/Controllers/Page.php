<?php

use uFrame\Controller;

class Page extends Controller
{

    public function index()
    {
       $this->show();
    }

    public function show($page_name = "Home")
    {

        // Should we need some data from the database..

        $pageModel = $this->model("PageModel");
        $data = $pageModel->getPage($page_name);

//        $data['header'] = "Hello World";
//        $data['body'] = "Be nice - say Hi!";
        $this->view("page", $data);

//        echo "This is page/". $page_name;
    }

}
