<?php

namespace Models;

use App\Libraries\Helpers;
use App\Libraries\Model;

class Blog extends Model
{
    public function postBlog()
    {
        if (!in_array($_SESSION[APP]->user->role, [0, 1, 3])) {
            return ["state" => false, "message" => "You don't have permission for this operation, contact admin!!", "type" => "error"];
        }
        $this->db->query("SELECT id from blogs where title=:title and content=:content")
            ->bind(":title", Helpers::get("title"))
            ->bind(":content", $_POST['editor'])
            ->execute();
        if ($this->db->rowCount() > 0) {
            return ["state" => false, "message" => "Duplicate blog detected !!", "type" => "error"];
        }
        $thumbnail = Helpers::uploadthumbnail();
        if (!$thumbnail['state']) {
            return ["state" => false, "message" => $thumbnail['message'], "type" => "error"];
        }
        $thumbnail = $thumbnail['filename'];
        $this->db->query("INSERT INTO blogs(author_id,title,thumbnail,content) values(:author_id,:title,:thumbnail,:content)")
            ->bind(":author_id", $_SESSION[APP]->user->id)
            ->bind(":title", Helpers::get("title"))
            ->bind(":thumbnail", $thumbnail)
            ->bind(":content", $_POST['editor'])
            ->execute();
        if ($this->db->rowCount() == 0) {
            unlink("/public/uploads/$thumbnail");
            return ["state" => false, "message" => "Something went wrong!!", "type" => "error"];
        }

        return ["state" => true, "message" => "Blog published and pending review.", "type" => "success"];
    }
    public function getBlogs($page)
    {
        $limit = 2;
        $offset = ($page - 1) * $limit;
        $blogs = $this->db->query("select blogs.*,users.fullname,users.avatar from blogs left join users on blogs.author_id=users.id LIMIT $limit OFFSET $offset")->resultSet();
        $total = $this->db->query("Select count(id) as total from blogs")->single()->total;
        return (object)['total' => intdiv($total, $limit), 'blogs' => $blogs];
    }
    public function getBlogById($id){
        return $this->db->query("select blogs.*,users.fullname,users.avatar from blogs left join users on blogs.author_id=users.id where blogs.id=:id")->bind(":id",$id)->single();
    }
}
