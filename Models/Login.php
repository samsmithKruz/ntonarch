<?php

namespace Models;

use App\Libraries\Helpers;
use App\Libraries\Model;

class Login extends Model
{
    public function login()
    {
        $email = Helpers::get("email") ?? false;
        $password = Helpers::get("password") ?? false;
        if (!$email || !$password) {
            return ["state" => false, "message" => "Login failed. Please try again.","type"=>"error"];
        }
        $user_data = $this->db->query("SELECT id,role from users where email=:email and password=:password")
        ->bind(":email",$email)
        // ->bind(":password",hash('sha1',$password))
        ->bind(":password", $password)
        ->single();
        if($this->db->rowCount() == 0){
            return ["state" => false, "message" => "Incorrect credentials.","type"=>"error"];
        }
        $_SESSION[APP]->user = $user_data;
        return ["state" => true, "message" => "Welcome back, you have successfully logged in!","type"=>"success"];
        
    }
}
