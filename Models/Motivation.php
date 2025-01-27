<?php

namespace Models;

use App\Libraries\Helpers;
use App\Libraries\Model;

class Motivation extends Model
{
    public function postMotivation()
    {
        $this->db->query("SELECT id from motivations where title=:title and content=:content")
            ->bind(":title", Helpers::get("title"))
            ->bind(":content", $_POST['editor'])
            ->execute();
        if ($this->db->rowCount() > 0) {
            return ["state" => false, "message" => "Duplicate motivation detected !!", "type" => "error"];
        }
        $this->db->query("INSERT INTO motivations(author_id,title,content) values(:author_id,:title,:content)")
            ->bind(":author_id", $_SESSION[APP]->user->id)
            ->bind(":title", Helpers::get("title"))
            ->bind(":content", $_POST['editor'])
            ->execute();
        if ($this->db->rowCount() == 0) {
            return ["state" => false, "message" => "Something went wrong!!", "type" => "error"];
        }

        return ["state" => true, "message" => "Motivation published and pending review.", "type" => "success"];
    }
    public function getMotivations($page, $status = "", $limit = 10)
    {
        $statusQuery = $status != "" ? " where motivations.status=" . $status : "";
        $offset = ($page - 1) * $limit;
        $motivations = $this->db->query("select motivations.*,users.fullname,users.avatar from motivations left join users on motivations.author_id=users.id $statusQuery ORDER BY motivations.create_at desc LIMIT $limit OFFSET $offset")->resultSet();
        $total = $this->db->query("Select count(id) as total from motivations $statusQuery")->single()->total;
        return (object) ['total' => $total, 'motivations' => $motivations];
    }
    public function getMotivationById($id)
    {
        $adminFilter = $_SESSION[APP]->user->role == getenv('ADMIN') ? "" : " and motivations.author_id=:author_id";
        $this->db->query("select motivations.title as motivationTitle,  motivations.content, motivations.status, users.fullname,users.avatar from motivations left join users on motivations.author_id=users.id where motivations.id=:id $adminFilter");
        if ($adminFilter) {
            $this->db->bind(":author_id", $_SESSION[APP]->user->id);
        }
        return $this->db->bind(":id", $id)->single();
    }
    public function updateMotivation($motivationId)
    {
        $motivation = $this->getMotivationById($motivationId);
        if (!$motivation) {
            return ["state" => false, "message" => "You don't have permission for this operation, contact admin!!", "type" => "error"];
        }
        // Prepare the fields to update
        $fields = [];
        $params = [];
        // Only update the fields that are provided
        if (Helpers::get("title")) {
            $fields[] = "title = :title";
            $params[':title'] = Helpers::get("title");
        }
        if (isset($_POST['status']) && $_SESSION[APP]->user->role == getenv("ADMIN")) {
            $fields[] = "status = " . sanitize($_POST['status']);
        }
        if ($_POST['editor']) {
            $fields[] = "content = :content";
            $params[':content'] = $_POST['editor'];
        }
        // Build the query
        if (count($fields) > 0) {
            $fieldsSql = implode(", ", $fields);
            $query = "UPDATE motivations SET $fieldsSql WHERE id = :blog_id";
            $params[':blog_id'] = $motivationId;

            // Execute the update
            $this->db->query($query);
            foreach ($params as $key => $value) {
                $this->db->bind($key, $value);
            }
            $this->db->execute();
            if ($this->db->rowCount() > 0) {
                return ["state" => true, "message" => "Motivation updated successfully.", "type" => "success"];
            }
            return ["state" => false, "message" => "No changes made to the Motivation.", "type" => "info"];
        }
        return ["state" => false, "message" => "No valid fields to update.", "type" => "error"];
    }
}
