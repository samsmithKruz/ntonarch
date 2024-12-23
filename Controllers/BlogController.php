<?php


use App\Libraries\Controller;
use App\Libraries\Helpers;
use Models\Base;

class BlogController extends Controller
{
    private $data;
    public function __construct()
    {

        $this->model("Blog");
        $this->data = [];
    }
    public function index()
    {
        $page = isset($_GET['page']) ? Helpers::get('page') : 1;
        $this->data['blog_data'] = $this->model->getBlogs($page, 1);
        $this->data['blog_data']->current_page = $page;
        $this->view("blogs", $this->data);
    }
    public function add()
    {
        Helpers::isLoggedIn();
        $user = Base::loadUser();
        $this->data['name'] = explode(" ", $user->fullname)[0];
        $this->data['tel'] = $user->tel;
        $this->data['avatar'] = $user->avatar;

        if (Helpers::getMethod() == "POST") {
            Helpers::csrf_request();
            $response = (object) $this->model->postBlog();
            flashMessage($response);
        }
        $this->view('post-blog', $this->data);
    }
    public function show($params)
    {
        if (empty($params)) {
            flashMessage((object)['type' => "error", "message" => "The requested blog was not found."]);
            redirect('blog');
        }
        $blog = $this->model->getBlogById(Helpers::safe_data($params[0]));
        // $comments = $this->model->getCommentsById(Helpers::safe_data($params[0]));
        if (empty($blog)) {
            flashMessage((object)['type' => "error", "message" => "The requested blog was not found."]);
            redirect('blog');
        }
        // print_r($blog);exit();
        $this->data['blog'] = $blog;
        // $this->data['comments']= $comments;
        $this->view("view-blog", $this->data);
    }
    public function update($params)
    {
        Helpers::isLoggedIn();
        if (!isset($params[0])) {
            flashMessage(['state' => false, 'message' => "Blog not found", 'type' => "error"]);
            back("/blog/manage");
        }
        if (Helpers::getMethod() == "POST") {
            Helpers::csrf_request();
            $response = $this->model->updateBlog(sanitize($params[0]));
            flashMessage($response);
        }
        $user = Base::loadUser();
        $this->data['name'] = explode(" ", $user->fullname)[0];
        $this->data['tel'] = $user->tel;
        $this->data['avatar'] = $user->avatar;

        $blogInfo = $this->model->getBlogById(sanitize($params[0]));
        if (!$blogInfo) {
            flashMessage(['state' => false, 'message' => "Blog not found", 'type' => "error"]);
            back("/blog/manage");
        }
        $blogInfo->tags = explode(",", $blogInfo->tags);
        $blogInfo = (array)$blogInfo;
        $this->data = $this->data + $blogInfo;

        $this->view('post-blog', $this->data);
    }
    public function manage()
    {
        Helpers::isLoggedIn();
        $user = Base::loadUser();
        $this->data['name'] = explode(" ", $user->fullname)[0];
        $this->data['tel'] = $user->tel;
        $this->data['avatar'] = $user->avatar;
        $this->view('manage-blogs', $this->data);
    }
}
