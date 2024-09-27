<?php

namespace Models;

use App\Libraries\Helpers;
use App\Libraries\Model;

class Dashboard extends Model
{
    // updateProfile
    public function updateProfile()
    {
        if (isset($_FILES)) {
            $avatar = Helpers::uploadFiles('avatar');
            if ($avatar['state']) {
                $avatar = $avatar['filenames'];
                $this->db->query("UPDATE users set avatar=:avatar where id=:id")
                    ->bind(":id", $_SESSION[APP]->user->id)
                    ->bind(":avatar", $avatar)
                    ->execute();
            }
        }
        $params = [];
        if ($_POST['fullname']) {
            $fullname = Helpers::get('fullname');
            array_push($params, "fullname='$fullname'",);
        }
        if ($_POST['tel']) {
            $tel = Helpers::get('tel');
            array_push($params, "tel='$tel'",);
        }
        if ($_POST['editor']) {
            $about = Helpers::get('editor');
            array_push($params, "about='$about'",);
        }
        $params = implode(",", $params);

        $this->db->query("UPDATE users SET $params where id=:id")
            ->bind(":id", $_SESSION[APP]->user->id)
            ->execute();
        if ($this->db->rowCount() == 0) {
            return ["state" => false, "message" => "No changes was made.", "type" => "warning"];
        }

        return ["state" => true, "message" => "Profile updated successfully.", "type" => "success"];
    }
    public function delete_avatar()
    {
        $avatar = Base::loadUser()->avatar;
        if ($avatar) {
            $avatar_ = __DIR__ . "/../public/uploads/$avatar";
            if (file_exists($avatar_)) {
                unlink($avatar_);
            }
            $this->db->query("UPDATE users set avatar='' where id=:id")->bind(":id", $_SESSION[APP]->user->id)->execute();
        }
    }
}
