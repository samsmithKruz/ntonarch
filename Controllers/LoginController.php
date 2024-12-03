<?php


use App\Libraries\Controller;
use App\Libraries\Helpers;

class LoginController extends Controller
{
    public function __construct(){
        $this->model("Login");
    }
    public function index()
    {

        if(Helpers::isMethod('POST') ){
            Helpers::csrf_request();
            $response = $this->model->login();
            if($response['state']){
                redirect('/dashboard');
            }
            flashMessage($response);
        }
        $this->view('login');
    }
}
