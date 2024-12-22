<?php


use App\Libraries\Controller;

class HomeController extends Controller
{
    private $data;
    public function __construct()
    {
        $this->data = [];
        $this->model("User");
    }
    public function index()
    {
        $blogs = $this->modelForeign('Blog')->getBlogs(1, "1", 3);
        $this->data['blogs'] = $blogs ? $blogs->blogs : [];
        // print_r($this->data);
        // exit();
        $this->view('index', $this->data);
    }
}
