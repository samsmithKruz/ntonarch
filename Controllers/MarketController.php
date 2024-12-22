<?php


use App\Libraries\Controller;
use App\Libraries\Helpers;
use Models\Base;

class MarketController extends Controller
{
    private $data;
    public function __construct()
    {
        $this->model("Product");
    }
    public function index()
    {
        $products = (object)$this->model->getProducts();
        if (!$products->state) {
            flashMessage((array)$products);
            back("/market");
        }
        $this->data['products'] = $products->data;
        $this->view('market', $this->data);
    }
    public function show($params)
    {
        if (!isset($params[0])) {
            flashMessage(['state' => false, 'message' => "Product not found", 'type' => "error"]);
            back("/market");
        }
        $productInfo = $this->model->getProduct(sanitize($params[0]));
        if (!$productInfo['state'] || empty($productInfo['data'])) {
            flashMessage(['state' => false, 'message' => "Product not found", 'type' => "error"]);
            back("/market");
        }
        $productInfo = (array)$productInfo['data'];
        $productInfo['img'] = explode(",", $productInfo['img']);
        $this->data = $productInfo;
        $this->data['otherProducts'] = array_filter((array)$this->model->getProducts(1, 4)['data']->product, function ($item) use ($productInfo) {
            return $item->id !== $productInfo['id'];
        });
        $this->view("view-market", $this->data);
    }
}
