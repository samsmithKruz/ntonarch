<?php

define('DOMAIN','http://localhost');
use App\Libraries\Controller;

class ApiController extends Controller
{
    public function __construct() {
        // Check if it is a cross-origin preflight request
        header('Access-Control-Allow-Origin: '.DOMAIN);
        header('Access-Control-Allow-Methods: GET, POST');
        header('Access-Control-Allow-Headers: Content-Type, Authorization');
        header('Content-Type: application/json; charset=utf-8');
        print_r($_SERVER['HTTP_ORIGIN']);exit();
        if (isset($_SERVER['HTTP_ORIGIN'])) {

            $origin = $_SERVER['HTTP_ORIGIN'];
            $allowedOrigins = array(DOMAIN); // Add more allowed origins if needed

            if (!in_array($origin, $allowedOrigins)){
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
    }
    public function index()
    {
        $this->render(['message' => 'something']);
    }
    private function render($data, $statusCode = 200)
    {
        http_response_code($statusCode);
        echo json_encode($data);
        exit();
    }
}
