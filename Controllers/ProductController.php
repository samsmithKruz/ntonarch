<?php


use App\Libraries\Controller;
use App\Libraries\Helpers;
use Models\Base;

class ProductController extends Controller
{
    private $data;
    public function __construct()
    {
        Helpers::isLoggedIn();
        $this->model("Product");
        $this->data = [];
        $user = Base::loadUser();
        $this->data['name'] = explode(" ", $user->fullname)[0];
        $this->data['tel'] = $user->tel;
        $this->data['avatar'] = $user->avatar;
    }
    public function add()
    {
        if (Helpers::getMethod() == "POST") {
            Helpers::csrf_request();
            $response = $this->model->postProduct();
            flashMessage($response);
            redirect("/product/manage");
        }
        $this->view('post-product', $this->data);
    }
    public function update($params)
    {
        if (!isset($params[0])) {
            flashMessage(['state' => false, 'message' => "Product not found", 'type' => "error"]);
            back("/product/manage");
        }
        if (Helpers::getMethod() == "POST") {
            Helpers::csrf_request();
            $response = $this->model->updateProduct(sanitize($params[0]));
            flashMessage($response);
        }
        $productInfo = $this->model->getProduct(sanitize($params[0]));
        if (!$productInfo['state'] || empty($productInfo['data'])) {
            flashMessage(['state' => false, 'message' => "Product not found", 'type' => "error"]);
            back("/product/manage");
        }
        $productInfo = (array)$productInfo['data'];
        $productInfo['img'] = explode(",", $productInfo['img']);
        $this->data = $this->data + $productInfo;
        $this->view('post-product', $this->data);
    }
    public function manage()
    {
        $this->view('manage-product', $this->data);
    }
    
}
