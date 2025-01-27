<?php


use App\Libraries\Controller;
use App\Libraries\Helpers;
use Models\Base;

class MotivationController extends Controller
{
    private $data;
    public function __construct()
    {
        $this->model("Motivation");
        $this->data = [];
    }
    public function index()
    {
        $page = isset($_GET['page']) ? Helpers::get('page') : 1;
        $this->data['motivation_data'] = $this->model->getMotivations($page, 1);
        $this->data['motivation_data']->current_page = $page;
        $this->view("motivations", $this->data);
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
            $response = (object) $this->model->postMotivation();
            flashMessage($response);
        }
        $this->view('post-motivation', $this->data);
    }
    public function update($params)
    {
        Helpers::isLoggedIn();
        if (!isset($params[0])) {
            flashMessage(['state' => false, 'message' => "Blog not found", 'type' => "error"]);
            back("/motivation/manage");
        }
        if (Helpers::getMethod() == "POST") {
            Helpers::csrf_request();
            $response = $this->model->updateMotivation(sanitize($params[0]));
            flashMessage($response);
        }
        $user = Base::loadUser();
        $this->data['name'] = explode(" ", $user->fullname)[0];
        $this->data['tel'] = $user->tel;
        $this->data['avatar'] = $user->avatar;

        $motivatonInfo = $this->model->getMotivationById(sanitize($params[0]));
        if (!$motivatonInfo) {
            flashMessage(['state' => false, 'message' => "Motivation not found", 'type' => "error"]);
            back("/motivation/manage");
        }
        $motivatonInfo = (array)$motivatonInfo;
        $this->data = $this->data + $motivatonInfo;

        $this->view('post-motivation', $this->data);
    }
    public function manage()
    {
        Helpers::isLoggedIn();
        $user = Base::loadUser();
        $this->data['name'] = explode(" ", $user->fullname)[0];
        $this->data['tel'] = $user->tel;
        $this->data['avatar'] = $user->avatar;
        $this->view('manage-motivations', $this->data);
    }
    
}
