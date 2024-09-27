<?php


use App\Libraries\Controller;
use App\Libraries\Helpers;
use Models\Base;

class ProductController extends Controller
{
    public function __construct(){
        Helpers::isLoggedIn();
        $this->model("Product");
    }
    public function add()
    {
        $data = [];
        $user = Base::loadUser();
        $data['name'] = explode(" ",$user->fullname)[0];
        $data['tel'] = $user->tel;
        if(Helpers::getMethod() == "POST" ){
            Helpers::csrf_request();
            $response = (object) $this->model->postProduct();
            flashMessage($response);
        }
        $this->view('post-product',$data);
    }
    public function manage(){
        $this->view('manage-product');
    }
}
