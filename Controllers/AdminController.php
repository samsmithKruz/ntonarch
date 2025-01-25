<?php


use App\Libraries\Controller;
use App\Libraries\Helpers;
use Models\Base;

class AdminController extends Controller
{
    private $data;
    public function __construct()
    {
        Helpers::Auth([getenv("ADMIN")]);

        $this->model("User");
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
            $response = $this->model->addUser();
            flashMessage($response);
            redirect("/admin/manage_roles");
        }
        $this->view('add-user', $this->data);
    }
    public function update($params)
    {
        if (!isset($params[0])) {
            flashMessage(['state' => false, 'message' => "User not found", 'type' => "error"]);
            back("/admin/manage_roles");
        }
        if (Helpers::getMethod() == "POST") {
            Helpers::csrf_request();
            $response = $this->model->updateUser(sanitize($params[0]));
            flashMessage($response);
        }
        $userInfo = $this->model->getUser($params[0]);
        if (!$userInfo['state'] || empty($userInfo['data'])) {
            flashMessage(['state' => false, 'message' => "User not found", 'type' => "error"]);
            back("/admin/manage_roles");
        }
        $userInfo = (array) $userInfo['data'];
        $this->data['category'] = explode(',', getenv("ROLES"))[$userInfo['userRole']];
        $this->data = $this->data + $userInfo;
        $this->view('add-user', $this->data);
    }
    public function manage_roles()
    {
        $this->view('manage_roles');
    }
}
