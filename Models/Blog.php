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
        $this->db->query("INSERT INTO blogs(author_id,title,thumbnail,content,tags) values(:author_id,:title,:thumbnail,:content,:tags)")
            ->bind(":author_id", $_SESSION[APP]->user->id)
            ->bind(":title", Helpers::get("title"))
            ->bind(":thumbnail", $thumbnail)
            ->bind(":tags", implode(",", Helpers::get('tags')))
            ->bind(":content", $_POST['editor'])
            ->execute();
        if ($this->db->rowCount() == 0) {
            unlink("/public/uploads/$thumbnail");
            return ["state" => false, "message" => "Something went wrong!!", "type" => "error"];
        }

        return ["state" => true, "message" => "Blog published and pending review.", "type" => "success"];
    }
    public function getBlogs($page, $status = "", $limit = 10)
    {
        $statusQuery = $status != "" ? " where blogs.status=" . $status : "";
        $offset = ($page - 1) * $limit;
        $blogs = $this->db->query("select blogs.*,users.fullname,users.avatar from blogs left join users on blogs.author_id=users.id $statusQuery LIMIT $limit OFFSET $offset")->resultSet();
        $total = $this->db->query("Select count(id) as total from blogs $statusQuery")->single()->total;
        return (object)['total' => $total, 'blogs' => $blogs];
    }
    public function getBlogById($id)
    {
        return $this->db->query("select blogs.*,users.fullname,users.avatar from blogs left join users on blogs.author_id=users.id where blogs.id=:id")->bind(":id", $id)->single();
    }
    public function updateBlog($blogId)
    {
        if (!in_array($_SESSION[APP]->user->role, [getenv('BLOGGER'), getenv('ADMIN')])) {
            return ["state" => false, "message" => "You don't have permission for this operation, contact admin!!", "type" => "error"];
        }
        // Check if the blog exists
        $currentBlog = $this->db->query("SELECT id, thumbnail FROM blogs WHERE id = :blog_id")
            ->bind(":blog_id", $blogId)
            ->single();
        if ($this->db->rowCount() == 0) {
            return ["state" => false, "message" => "Blog not found.", "type" => "error"];
        }
        // Prepare the fields to update
        $fields = [];
        $params = [];
        // Only update the fields that are provided
        if (Helpers::get("title")) {
            $fields[] = "title = :title";
            $params[':title'] = Helpers::get("title");
        }
        if ($_POST['editor']) {
            $fields[] = "content = :content";
            $params[':content'] = $_POST['editor'];
        }
        if (isset($_POST['tags'])) {
            $fields[] = "tags = :tags";
            $params[':tags'] = implode(",", Helpers::get("tags"));
        } else {
            $fields[] = "tags = ''";
        }
        // Check for image upload if present
        if (isset($_FILES['thumbnail']) && !empty($_FILES['thumbnail']['name'])) {
            $images_ = Helpers::uploadFiles('thumbnail');
            if (!$images_['state'] && $images_['message'] != 'No file found.') {
                return ["state" => false, "message" => $images_['message'], "type" => "error"];
            }
            // Update the 'img' field in the database with the new image list
            $fields[] = "thumbnail = :thumbnail";
            $params[':thumbnail'] = $images_['filenames']; // Add the updated image string to the params for the update query
        }
        // Build the query
        if (count($fields) > 0) {
            $fieldsSql = implode(", ", $fields);
            $query = "UPDATE blogs SET $fieldsSql WHERE id = :blog_id";
            $params[':blog_id'] = $blogId;

            // Execute the update
            $this->db->query($query);
            foreach ($params as $key => $value) {
                $this->db->bind($key, $value);
            }
            $this->db->execute();
            if ($this->db->rowCount() > 0) {
                return ["state" => true, "message" => "Blog updated successfully.", "type" => "success"];
            }
            return ["state" => false, "message" => "No changes made to the Blog.", "type" => "info"];
        }
        return ["state" => false, "message" => "No valid fields to update.", "type" => "error"];
    }

    public function postComment()
    {
        $name = Helpers::safe_data($_POST['name']);
        $body = Helpers::safe_data($_POST['body']);
        $blog_id = Helpers::safe_data($_POST['blog_id']);
        if(empty($name) || empty($body) || empty($blog_id)){
            return ["state" => false, "message" => "All fields are required.", "type" => "error"];
        }
        $this->db->query("INSERT INTO comments(blog_id, name, body, status) VALUES(:blog_id, :name, :body, :status)")
            ->bind(":blog_id", $blog_id)
            ->bind(":name", $name)
            ->bind(":body", $body)
            ->bind(":status", 'Pending')
            ->execute();
        if ($this->db->rowCount() == 0) {
            return ["state" => false, "message" => "Something went wrong!!", "type" => "error"];
        }

        return ["state" => true, "message" => "Comment submitted for approval.", "type" => "info"];
    }
    public function getCommentsById($blogId)
    {

        // Check if the blog exists
        return $this->db->query("SELECT id, name, body, create_time, status FROM comments WHERE blog_id = :blog_id")
            ->bind(":blog_id", $blogId)
            ->resultSet();
    }
}
