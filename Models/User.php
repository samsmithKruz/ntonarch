<?php

namespace Models;

use App\Libraries\Helpers;
use App\Libraries\Model;

class User extends Model
{

    public function addUser()
    {

        Helpers::csrf_request();
        $this->db->query("SELECT id from users where email=:email")
            ->bind(":email", Helpers::get("email"))
            ->execute();
        if ($this->db->rowCount() > 0) {
            return ["state" => false, "message" => "User with this email already exist!!", "type" => "error"];
        }

        $this->db->query("INSERT INTO users(email,password,role,fullname,tel, about,avatar) values(:email,:password,:role,:fullname,:tel,'','')")
            ->bind(":email", Helpers::get("email"))
            ->bind(":password", Helpers::get("password"))
            ->bind(":role", array_search(Helpers::get("role"), explode(",", getenv("ROLES"))))
            ->bind(":fullname", Helpers::get("fullname"))
            ->bind(":tel", Helpers::get("tel"))
            ->execute();
        if ($this->db->rowCount() == 0) {
            return ["state" => false, "message" => "Something went wrong!!", "type" => "error"];
        }

        return ["state" => true, "message" => "User added successfully.", "type" => "success"];
    }
    public function getUser($id)
    {
        $user = $this->db->query("SELECT fullname as userFullname, email as userEmail,password as userPassword,tel as userTel,role as userRole FROM users where id=:id")->bind(":id", sanitize($id))->single();
        return ['state' => true, 'data' => $user];
    }
    public function updateUser($id)
    {
        Helpers::csrf_request();

        // Define the update query with dynamic placeholders for binding
        $query = "UPDATE users SET ";
        $bindings = [];
        $fieldsToUpdate = [];


        // Define the fields to check and bind
        $fields = [
            "email" => Helpers::get("email"),
            "password" => Helpers::get("password"),
            "fullname" => Helpers::get("fullname"),
            "tel" => Helpers::get("tel"),
        ];
        if (
            array_search(Helpers::get("role"), explode(",", getenv("ROLES"))) == 0
        ) {
            $query .= "role = '0', ";
        } else {
            $fields["role"] = array_search(Helpers::get("role"), explode(",", getenv("ROLES")));
        }

        // Loop through fields and add them to the query and bindings if set
        foreach ($fields as $field => $value) {
            if (!empty($value)) {
                $fieldsToUpdate[] = "$field = :$field";
                $bindings[":$field"] = $value;
            }
        }

        // Build the final query with dynamic fields
        if (!empty($fieldsToUpdate)) {
            $query .= implode(", ", $fieldsToUpdate) . " WHERE id = :id";
            $bindings[":id"] = sanitize($id);

            // Prepare and bind parameters
            $this->db->query($query);
            foreach ($bindings as $key => $value) {
                $this->db->bind($key, $value);
            }

            // Execute and check for success
            $this->db->execute();
            if ($this->db->rowCount() == 0) {
                return ["state" => false, "message" => "Something went wrong!! ", "type" => "error"];
            }

            return ["state" => true, "message" => "User updated successfully.", "type" => "success"];
        }

        // If no fields to update, return an error response
        return ["state" => false, "message" => "No valid fields to update.", "type" => "error"];
    }

}
