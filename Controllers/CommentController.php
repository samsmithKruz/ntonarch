<?php

use App\Libraries\Controller;
use App\Libraries\Helpers;

class CommentController extends Controller
{
    private $comments;

    public function __construct()
    {
        $this->model("Comment");
        $this->comments = [];
    }

    public function index()
    {
        $page = isset($_GET['page']) ? Helpers::get('page') : 1;
        $this->comments['comment_data'] = $this->model->getComments($page, 1);
        $this->comments['comment_data']->current_page = $page;
        $this->view("view-blog", $this->comments);
    }

    public function add()
    {
        if (Helpers::getMethod() == "POST") {
            Helpers::csrf_request();
            $name = Helpers::safe_data($_POST['name']);
            $body = Helpers::safe_data($_POST['body']);
            $response = (object) $this->model->postComment($name, $body);
            flashMessage($response);
        }
        $this->view('post-comment', $this->comments);
        // back()
        
    }

    public function show($params)
    {
        if (empty($params)) {
            flashMessage((object)['type' => "error", "message" => "The requested comment was not found."]);
            redirect('comment');
        }
        $comment = $this->model->getCommentById(Helpers::safe_data($params[0]));
        if (empty($comment)) {
            flashMessage((object)['type' => "error", "message" => "The requested comment was not found."]);
            redirect('comment');
        }
        $this->comments['comment'] = $comment;
        $this->view("view-comment", $this->comments);
    }

    public function update($params)
    {
        if (!isset($params[0])) {
            flashMessage(['state' => false, 'message' => "Comment not found", 'type' => "error"]);
            back("/comment/manage");
        }

        if (Helpers::getMethod() == "POST") {
            Helpers::csrf_request();
            $name = Helpers::safe_data($_POST['name']);
            $body = Helpers::safe_data($_POST['body']);
            $response = $this->model->updateComment(sanitize($params[0]), $name, $body);
            flashMessage($response);
        }

        $commentInfo = $this->model->getCommentById(sanitize($params[0]));
        if (!$commentInfo) {
            flashMessage(['state' => false, 'message' => "Comment not found", 'type' => "error"]);
            back("/comment/manage");
        }
        $this->comments['comment'] = $commentInfo;

        $this->view('post-comment', $this->comments);
    }

    public function manage()
    {
        $this->view('manage-comments', $this->comments);
    }
}