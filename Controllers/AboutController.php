<?php


use App\Libraries\Controller;

class AboutController extends Controller
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
        $this->view('about', $this->data);
    }
}
