<?php


use App\Libraries\Controller;

class ContactController extends Controller
{
    private $data;
    public function __construct()
    {
        $this->data = [];
        $this->model("User");
    }
    public function index()
    {
        $this->view('contact');
    }
}
