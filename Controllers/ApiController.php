<?php

use App\Libraries\Controller;
use App\Libraries\Database;
use App\Libraries\Helpers;

class ApiController extends Controller
{
    private Database $db;
    public function __construct()
    {
        // Check if it is a cross-origin preflight request
        header('Access-Control-Allow-Origin: ' . DOMAIN);
        header('Access-Control-Allow-Methods: GET, POST');
        header('Access-Control-Allow-Headers: Content-Type, Authorization');
        header('Content-Type: application/json; charset=utf-8');
        // print_r($_SERVER['HTTP_ORIGIN']);exit();
        if (isset($_SERVER['HTTP_ORIGIN'])) {

            $origin = $_SERVER['HTTP_ORIGIN'];
            $allowedOrigins = array(DOMAIN); // Add more allowed origins if needed

            if (!in_array($origin, $allowedOrigins)) {
                // Deny the request from other origins
                http_response_code(403); // Forbidden
                $response = [
                    'code' => 403,
                    'status' => false,
                    'error' => 'Forbidden',
                    'message' => 'Forbidden',
                    'origin' => 'constructor',
                    'from' => $origin
                ];
                echo json_encode($response);
                exit;
            }
        }
        $this->db = new Database();
    }
    public function index()
    {
        $this->render(['message' => 'something']);
    }
    public function manage_blogs()
    {
        Helpers::isLoggedIn();
        if (!in_array($_SESSION[APP]->user->role, [getenv('BLOGGER'), getenv('ADMIN')])) {
            $this->render(['state' => false, 'message' => 'Unauthorized access.'], 401);
        }
        $start = $_POST['start'] ?? 0;
        $length = $_POST['length'] ?? 10;
        $search = $_POST['search']['value'] ?? '';
        $orderCol = isset($_POST['order'][0]) && isset($_POST['columns'][$_POST['order'][0]['column']]['data'])
            ? $_POST['columns'][$_POST['order'][0]['column']]['data']
            : 'id';
        $orderDir = isset($_POST['order'][0]['dir']) ? $_POST['order'][0]['dir'] : 'ASC';


        $searchQuery = $search ? " AND (blogs.title LIKE :search OR blogs.content LIKE :search OR users.fullname LIKE :search)" : "";
        $params = $search ? [':search' => "%$search%"] : [];
        $userId = $_SESSION[APP]->user->id;
        $recordsFiltered = $this->db->query("SELECT COUNT(blogs.id) AS total FROM blogs LEFT JOIN users on blogs.author_id=users.id WHERE blogs.author_id=$userId $searchQuery");
        array_map(fn($key, $val) => $this->db->bind($key, $val), array_keys($params), $params);
        $filteredTotal = $recordsFiltered->single()->total;
        $recordsTotal = $this->db->query("SELECT COUNT(id) AS total FROM blogs WHERE author_id=$userId")->single()->total;

        $productsQuery = $this->db->query("SELECT blogs.id, blogs.title, blogs.created_at,blogs.author_id,users.fullname as author_name, blogs.status FROM blogs LEFT JOIN users on blogs.author_id=users.id WHERE author_id=$userId $searchQuery ORDER BY blogs.$orderCol $orderDir LIMIT :start, :length");
        $params[':start'] = (int)$start;
        $params[':length'] = (int)$length;
        array_map(fn($key, $val) => $this->db->bind($key, $val), array_keys($params), $params);
        $products = $productsQuery->resultSet();

        $this->render(['recordsTotal' => $recordsTotal, 'recordsFiltered' => $filteredTotal, 'data' => $products]);
    }
    public function manage_products()
    {
        Helpers::isLoggedIn();
        if (!in_array($_SESSION[APP]->user->role, [getenv('MARKETER'), getenv('ADMIN')])) {
            $this->render(['state' => false, 'message' => 'Unauthorized access.'], 401);
        }
        $start = $_POST['start'] ?? 0;
        $length = $_POST['length'] ?? 10;
        $search = $_POST['search']['value'] ?? '';
        $orderCol = isset($_POST['order'][0]) && isset($_POST['columns'][$_POST['order'][0]['column']]['data'])
            ? $_POST['columns'][$_POST['order'][0]['column']]['data']
            : 'id';
        $orderDir = isset($_POST['order'][0]['dir']) ? $_POST['order'][0]['dir'] : 'ASC';


        $searchQuery = $search ? " AND (title LIKE :search OR description LIKE :search OR location LIKE :search OR category LIKE :search)" : "";
        $params = $search ? [':search' => "%$search%"] : [];

        $recordsFiltered = $this->db->query("SELECT COUNT(id) AS total FROM products WHERE 1=1 $searchQuery");
        array_map(fn($key, $val) => $this->db->bind($key, $val), array_keys($params), $params);
        $filteredTotal = $recordsFiltered->single()->total;
        $recordsTotal = $this->db->query("SELECT COUNT(id) AS total FROM products")->single()->total;

        $productsQuery = $this->db->query("SELECT id, title, price, category, date FROM products WHERE 1=1 $searchQuery ORDER BY $orderCol $orderDir LIMIT :start, :length");
        $params[':start'] = (int)$start;
        $params[':length'] = (int)$length;
        array_map(fn($key, $val) => $this->db->bind($key, $val), array_keys($params), $params);
        $products = $productsQuery->resultSet();

        $this->render(['recordsTotal' => $recordsTotal, 'recordsFiltered' => $filteredTotal, 'data' => $products]);
    }
    public function delete_product($params)
    {
        Helpers::isLoggedIn();
        if (!in_array($_SESSION[APP]->user->role, [getenv('MARKETER'), getenv('ADMIN')])) {
            $this->render(['state' => false, 'message' => 'Unauthorized access.'], 401);
        }
        if (!isset($params[0])) {
            $this->render(['state' => false, 'message' => 'Product ID not found.'], 404);
        }
        $productId = sanitize($params[0]);
        // $this->render(['state'=>false, 'message'=>$productId]);
        // Check if the product exists
        $product = $this->db->query("SELECT id, img FROM products WHERE id = :product_id")
            ->bind(":product_id", $productId)
            ->single();
        if (!$product) {
            $this->render(["state" => false, "message" => "Product not found."], 404);
        }
        // Delete associated images
        if (!empty($product->img)) {
            $images = explode(",", $product->img);
            Helpers::deleteFiles($images); // Ensure Helpers::deleteFiles can handle arrays of file paths
        }
        // Delete the product from the database
        $this->db->query("DELETE FROM products WHERE id = :product_id")
            ->bind(":product_id", $productId)
            ->execute();

        if ($this->db->rowCount() > 0) {
            $this->render(["state" => true, "message" => "Product deleted successfully."]);
        }
        $this->render(['state' => false, 'message' => 'Failed to delete the product.']);
    }
    public function delete_blog($params)
    {
        Helpers::isLoggedIn();
        if (!in_array($_SESSION[APP]->user->role, [getenv('BLOGGER'), getenv('ADMIN')])) {
            $this->render(['state' => false, 'message' => 'Unauthorized access.'], 401);
        }
        if (!isset($params[0])) {
            $this->render(['state' => false, 'message' => 'Blog ID not found.'], 404);
        }
        $blogId = sanitize($params[0]);
        // Check if the product exists
        $blog = $this->db->query("SELECT id, thumbnail FROM blogs WHERE id = :blog_id")
            ->bind(":blog_id", $blogId)
            ->single();
        if (!$blog) {
            $this->render(["state" => false, "message" => "Blog not found."], 404);
        }
        // Delete associated images
        if (!empty($blog->thumbnail)) {
            $images = explode(",", $blog->thumbnail);
            Helpers::deleteFiles($images); // Ensure Helpers::deleteFiles can handle arrays of file paths
        }
        // Delete the product from the database
        $this->db->query("DELETE FROM blogs WHERE id = :blog_id")
            ->bind(":blog_id", $blogId)
            ->execute();

        if ($this->db->rowCount() > 0) {
            $this->render(["state" => true, "message" => "Blog deleted successfully."]);
        }
        $this->render(['state' => false, 'message' => 'Failed to delete the Blog.']);
    }
    public function toggle_blog($params)
    {
        Helpers::isLoggedIn();
        if (!in_array($_SESSION[APP]->user->role, [getenv('EDITOR'), getenv('ADMIN')])) {
            $this->render(['state' => false, 'message' => 'Unauthorized access.'], 401);
        }
        if (!isset($params[0])) {
            $this->render(['state' => false, 'message' => 'Blog ID not found.'], 404);
        }
        $blogId = sanitize($params[0]);
        // Check if the product exists
        $blog = $this->db->query("SELECT id, status FROM blogs WHERE id = :blog_id")
            ->bind(":blog_id", $blogId)
            ->single();
        if (!$blog) {
            $this->render(["state" => false, "message" => "Blog not found."], 404);
        }
        // Delete the product from the database
        $this->db->query("UPDATE blogs SET status=:status WHERE id = :blog_id")
            ->bind(":blog_id", $blogId)
            ->bind(":status", $blog->status == 1 ? 0 : 1)
            ->execute();

        if ($this->db->rowCount() > 0) {
            $this->render(["state" => true, "message" => "Blog updated successfully."]);
        }
        $this->render(['state' => false, 'message' => 'Failed to update the Blog.']);
    }
    private function render($data, $statusCode = 200)
    {
        http_response_code($statusCode);
        echo json_encode($data);
        exit();
    }
}
