<?php


use App\Libraries\Controller;

class AdminController extends Controller
{
    public function manage_roles()
    {
        $this->view('manage_roles');
    }
}
