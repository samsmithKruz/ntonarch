<?php


use App\Libraries\Controller;

class HomeController extends Controller
{
    public function __construct(){
        $this->model("User");
    }
    public function index()
    {
        $this->view('index');
    }
}
