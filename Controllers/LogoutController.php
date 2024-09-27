<?php


use App\Libraries\Controller;
use App\Libraries\Helpers;

class LogoutController extends Controller
{
    public function __construct(){
        session_destroy();
        redirect('login');
    }
}
