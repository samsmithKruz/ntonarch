<?php


use App\Libraries\Controller;

class ServicesController extends Controller
{
    public function engineering()
    {
        $this->view('engineering');
    }

    public function farm()
    {
        $this->view('farm');
    }
}
