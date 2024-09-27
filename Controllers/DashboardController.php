<?php


use App\Libraries\Controller;
use App\Libraries\Helpers;
use Models\Base;

class DashboardController extends Controller
{
    public function __construct(){
        Helpers::isLoggedIn();
        $this->model("Dashboard");
    }
    public function index()
    {
        
        $data = [];
        $user = Base::loadUser();
        $data['avatar'] = $user->avatar;

        $data['name'] = explode(" ",$user->fullname)[0];
        // dd($data);
        $this->view('dashboard',$data);
    }
    public function settings()
    {
        if(Helpers::getMethod() == "POST" ){
            Helpers::csrf_request();
            $response = (object) $this->model->updateProfile();
            flashMessage($response);
        }
        $data = [];
        $user = Base::loadUser();
        $data['name'] = explode(" ",$user->fullname)[0];
        $data['fullname'] = $user->fullname;
        $data['email'] = $user->email;
        $data['tel'] = $user->tel;
        $data['about'] = $user->about;
        $data['avatar'] = $user->avatar;
        // dd($data);
        $this->view('account-settings',$data);
    }
    public function delete_avatar(){
        $this->model->delete_avatar();
        back();
    }
}
