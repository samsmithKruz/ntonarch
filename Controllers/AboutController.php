<?php


use App\Libraries\Controller;

class AboutController extends Controller
{
    public function index()
    {
        $this->view('about');
    }
}
