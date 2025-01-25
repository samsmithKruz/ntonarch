<?php


use App\Libraries\Controller;

class ServicesController extends Controller
{
    public function index()
    {
        $this->view('services');
    }
    public function engineering()
    {
        $this->view('engineering');
    }

    public function farm()
    {
        $this->view('farm');
    }
    public function it()
    {
        $this->view('information_technology');
    }
    public function web_development()
    {
        $this->view('web_development');
    }
}
