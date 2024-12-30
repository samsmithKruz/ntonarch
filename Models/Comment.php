<?php

namespace Models;

use App\Libraries\Helpers;
use App\Libraries\Model;

class Comment extends Model
{
    public function postComment($name, $content)
    {
        $this->db->query("INSERT INTO comments(name, content, status) VALUES(:name, :content, :status)")
            ->bind(":name", $name)
            ->bind(":content", $content)
            ->bind(":status", 'Pending')
            ->execute();
        if ($this->db->rowCount() == 0) {
            return ["state" => false, "message" => "Something went wrong!!", "type" => "error"];
        }

        return ["state" => true, "message" => "Comment posted successfully.", "type" => "success"];
    }

    public function getComments($page, $limit = 10)
    {
        $offset = ($page - 1) * $limit;
        $comments = $this->db->query("SELECT * FROM comments LIMIT $limit OFFSET $offset")->resultSet();
        $total = $this->db->query("SELECT count(id) as total FROM comments")->single()->total;
        return (object)['total' => $total, 'comments' => $comments];
    }

    public function getCommentById($id)
    {
        return $this->db->query("SELECT * FROM comments WHERE id = :id")->bind(":id", $id)->single();
    }

    public function updateComment($commentId, $name, $content)
    {
        // Prepare the fields to update
        $fields = [];
        $params = [];
        // Only update the fields that are provided
        if ($name) {
            $fields[] = "name = :name";
            $params[':name'] = $name;
        }
        if ($content) {
            $fields[] = "content = :content";
            $params[':content'] = $content;
        }
        // Build the query
        if (count($fields) > 0) {
            $fieldsSql = implode(", ", $fields);
            $query = "UPDATE comments SET $fieldsSql WHERE id = :comment_id";
            $params[':comment_id'] = $commentId;

            // Execute the update
            $this->db->query($query);
            foreach ($params as $key => $value) {
                $this->db->bind($key, $value);
            }
            $this->db->execute();
            if ($this->db->rowCount() > 0) {
                return ["state" => true, "message" => "Comment updated successfully.", "type" => "success"];
            }
            return ["state" => false, "message" => "No changes made to the Comment.", "type" => "info"];
        }
        return ["state" => false, "message" => "No valid fields to update.", "type" => "error"];
    }
}