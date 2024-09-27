<?php


use App\Libraries\Controller;
use App\Libraries\Helpers;

class BlogController extends Controller
{
    public function __construct()
    {
        
        $this->model("Blog");
    }
    public function index()
    {
        $page = isset($_GET['page']) ? Helpers::get('page') : 1;
        $data['blog_data'] = $this->model->getBlogs($page);
        $data['blog_data']->current_page = $page;
        // d($data);
        // $data['popular'] = $this->model->getPopularBlogs();
        $this->view("blogs", $data);
    }
    public function add()
    {
        Helpers::isLoggedIn();
        $data = [];
        if (Helpers::getMethod() == "POST") {
            Helpers::csrf_request();
            $response = (object) $this->model->postBlog();
            flashMessage($response);
        }
        $this->view('post-blog', $data);
    }
    public function show($params)
    {
        if (empty($params)) {
            flashMessage((object)['type' => "error", "message" => "The requested blog was not found."]);
            redirect('blog');
        }
        $blog = $this->model->getBlogById(Helpers::safe_data($params[0]));
        if (empty($blog)) {
            flashMessage((object)['type' => "error", "message" => "The requested blog was not found."]);
            redirect('blog');
        }
        // d($blog);
        $data['blog'] = $blog;
        $this->view("view-blog", $data);
    }
    public function update()
    {
        Helpers::isLoggedIn();
        $data = [];
        // if(Helpers::getMethod() == "POST" ){
        //     Helpers::csrf_request();
        //     $response = (object) $this->model->postBlog();
        //     flashMessage($response);
        // }
        $this->view('update-blog', $data);
    }
}
