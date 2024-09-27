<?php

namespace Models;

use App\Libraries\Helpers;
use App\Libraries\Model;

class Product extends Model
{
    public function postProduct()
    {
        if (!in_array($_SESSION[APP]->user->role, [2, 3])) {
            return ["state" => false, "message" => "You don't have permission for this operation, contact admin!!", "type" => "error"];
        }
        $this->db->query("SELECT id from products where title=:title and description=:description and location=:location")
            ->bind(":title", Helpers::get("title"))
            ->bind(":description", $_POST['editor'])
            ->bind(":location", Helpers::get("location"))
            ->execute();
        if ($this->db->rowCount() > 0) {
            return ["state" => false, "message" => "Duplicate product detected !!", "type" => "error"];
        }
        $images_ = Helpers::uploadFiles('img');
        if (!$images_['state']) {
            return ["state" => false, "message" => $images_['message'], "type" => "error"];
        }
        $images = implode(",", $images_['filenames']);
        $this->db->query("INSERT INTO products(title,description,price,img,sellers_contact,location) values(:title,:description,:price,:img,:sellers_contact,:location)")
            ->bind(":title", Helpers::get("title"))
            ->bind(":description", $_POST['editor'])
            ->bind(":price", Helpers::get("price"))
            ->bind(":img", $images)
            ->bind(":sellers_contact", Helpers::get("sellers_contact"))
            ->bind(":location", Helpers::get("location"))
            ->execute();
        if ($this->db->rowCount() == 0) {
            foreach ($images_['filenames'] as $img) {
                unlink("/public/uploads/$img");
            }
            return ["state" => false, "message" => "Something went wrong!!", "type" => "error"];
        }

        return ["state" => true, "message" => "Product posted successfully.", "type" => "success"];
    }
}
