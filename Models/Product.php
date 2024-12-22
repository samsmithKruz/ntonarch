<?php

namespace Models;

use App\Libraries\Helpers;
use App\Libraries\Model;

class Product extends Model
{
    public function postProduct()
    {

        Helpers::csrf_request();
        if (!in_array($_SESSION[APP]->user->role, [getenv('MARKETER'), getenv('ADMIN')])) {
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
        $this->db->query("INSERT INTO products(title,description,price,img,sellers_contact,location,category) values(:title,:description,:price,:img,:sellers_contact,:location,:category)")
            ->bind(":title", Helpers::get("title"))
            ->bind(":description", $_POST['editor'])
            ->bind(":price", Helpers::get("price"))
            ->bind(":category", Helpers::get("category"))
            ->bind(":img", $images)
            ->bind(":sellers_contact", Helpers::get("sellers_contact"))
            ->bind(":location", Helpers::get("location"))
            ->execute();
        if ($this->db->rowCount() == 0) {
            foreach ($images_['filenames'] as $img) {
                unlink(__DIR__ . "/../public/uploads/" . $img);
            }
            return ["state" => false, "message" => "Something went wrong!!", "type" => "error"];
        }

        return ["state" => true, "message" => "Product posted successfully.", "type" => "success"];
    }
    public function updateProduct($productId)
    {

        if (!in_array($_SESSION[APP]->user->role, [getenv('MARKETER'), getenv('ADMIN')])) {
            return ["state" => false, "message" => "You don't have permission for this operation, contact admin!!", "type" => "error"];
        }

        // Check if the product exists
        $currentProduct = $this->db->query("SELECT id, img FROM products WHERE id = :product_id")
            ->bind(":product_id", $productId)
            ->single();
        if ($this->db->rowCount() == 0) {
            return ["state" => false, "message" => "Product not found.", "type" => "error"];
        }

        // Prepare the fields to update
        $fields = [];
        $params = [];
        $oldImages  = explode(",", $currentProduct->img);

        // Only update the fields that are provided
        if (Helpers::get("title")) {
            $fields[] = "title = :title";
            $params[':title'] = Helpers::get("title");
        }
        if ($_POST['editor']) {
            $fields[] = "description = :description";
            $params[':description'] = $_POST['editor'];
        }
        if (Helpers::get("price")) {
            $fields[] = "price = :price";
            $params[':price'] = Helpers::get("price");
        }
        if (Helpers::get("category")) {
            $fields[] = "category = :category";
            $params[':category'] = Helpers::get("category");
        }
        if (Helpers::get("location")) {
            $fields[] = "location = :location";
            $params[':location'] = Helpers::get("location");
        }
        if (Helpers::get("sellers_contact")) {
            $fields[] = "sellers_contact = :sellers_contact";
            $params[':sellers_contact'] = Helpers::get("sellers_contact");
        }
        // Check for image upload if present
        if (isset($_FILES['img'])) {
            // Prepare the array to store the new image filenames
            $newImages = $oldImages; // Start with the old images, which will be updated
            $imagesToDelete = []; // Array to track the old images that will be deleted
            $uploadIndexes = []; // Track which indexes in the array need new images

            foreach ($_FILES['img']['name'] as $index => $fileName) {
                if (!empty($fileName)) {
                    $uploadIndexes[] = $index;

                    // If the file at this index is being replaced, add the old image to the delete list
                    if (!empty($oldImages[$index])) {
                        $imagesToDelete[] = $oldImages[$index];
                    }
                }
            }

            // Now upload all the images that need to be uploaded
            if (!empty($uploadIndexes)) {
                $images_ = Helpers::uploadFiles('img'); // Upload the files in one go
                if (!$images_['state'] && $images_['message'] != 'No file found.') {
                    return ["state" => false, "message" => $images_['message'], "type" => "error"];
                }
                // If new images were uploaded, update the corresponding positions in $newImages
                $i = 0;
                foreach ($uploadIndexes as $index) {
                    $newImages[$index] = $images_['filenames'][$i++];
                }
                // After processing the upload, delete the old images that are being replaced
                if (!empty($imagesToDelete)) {
                    Helpers::deleteFiles($imagesToDelete); // Delete the old images
                }
            }

            // Now we have the new images list in $newImages, ready to update the product in the database
            $updatedImages = implode(",", $newImages); // Convert the array to a comma-separated string

            // Update the 'img' field in the database with the new image list
            $fields[] = "img = :img";
            $params[':img'] = $updatedImages; // Add the updated image string to the params for the update query

        }

        // Build the query
        if (count($fields) > 0) {
            $fieldsSql = implode(", ", $fields);
            $query = "UPDATE products SET $fieldsSql WHERE id = :product_id";
            $params[':product_id'] = $productId;

            // Execute the update
            $this->db->query($query);
            foreach ($params as $key => $value) {
                $this->db->bind($key, $value);
            }
            $this->db->execute();

            if ($this->db->rowCount() > 0) {
                return ["state" => true, "message" => "Product updated successfully.", "type" => "success"];
            }
            return ["state" => false, "message" => "No changes made to the product.", "type" => "info"];
        }
        return ["state" => false, "message" => "No valid fields to update.", "type" => "error"];
    }
    public function getProduct($id)
    {
        // if (!in_array($_SESSION[APP]->user->role, [getenv('MARKETER'), getenv('ADMIN')])) {
        //     return ["state" => false, "message" => "You don't have permission for this operation, contact admin!!", "type" => "error"];
        // }
        $product = $this->db->query("SELECT * FROM products where id=:id")->bind(":id", sanitize($id))->single();
        return ['state' => true, 'data' => $product];
    }
    public function getProducts($page = 1, $limit = 10)
    {
        // Sanitize inputs
        $sort = sanitize($_POST['sort'] ?? "date"); // Default sort by date
        $filters = explode(",", sanitize($_POST['filter'] ?? "")); // Sanitize and split filters
        $searchQuery = sanitize($_POST['search'] ?? ""); // Sanitize search query

        // Ensure the page is a positive integer
        $page = max(1, $page);

        // Calculate offset
        $offset = ($page - 1) * $limit;

        // Base query
        $query = "SELECT * FROM products WHERE 1=1";
        $countQuery = "SELECT COUNT(*) as total FROM products WHERE 1=1";

        $params = []; // Collect named parameters for binding

        // Add search condition if present
        if (!empty($searchQuery)) {
            $searchCondition = " AND MATCH(title, description, price, location, category) AGAINST(:searchQuery IN NATURAL LANGUAGE MODE)";
            $query .= $searchCondition;
            $countQuery .= $searchCondition;
            $params[':searchQuery'] = $searchQuery;
        }

        // Add filters if present
        if (!empty($filters[0])) {
            $filterPlaceholders = [];
            foreach ($filters as $index => $filter) {
                $placeholder = ":filter$index";
                $filterPlaceholders[] = $placeholder;
                $params[$placeholder] = $filter;
            }
            $query .= " AND category IN (" . implode(", ", $filterPlaceholders) . ")";
            $countQuery .= " AND category IN (" . implode(", ", $filterPlaceholders) . ")";
        }

        // Handle sorting logic
        switch ($sort) {
            case "high_low":
                $query .= " ORDER BY price DESC"; // Sort by price, highest first
                break;
            case "low_high":
                $query .= " ORDER BY price ASC"; // Sort by price, lowest first
                break;
            default:
                $query .= " ORDER BY date DESC"; // Fallback to date sorting
                break;
        }

        // Add pagination
        $query .= " LIMIT :limit OFFSET :offset";
        $params[':limit'] = $limit;
        $params[':offset'] = $offset;

        // Execute the main query
        $stmt = $this->db->query($query);
        foreach ($params as $key => $value) {
            $stmt->bind($key, $value);
        }
        $product = $stmt->resultSet();

        // Execute the count query
        $countStmt = $this->db->query($countQuery);
        foreach ($params as $key => $value) {
            if ($key == ":limit" || $key == ":offset") {
                continue;
            }
            $countStmt->bind($key, $value);
        }
        $totalProducts = $countStmt->single()->total;

        // Determine range
        $start = $offset + 1;
        $end = min($offset + $limit, $totalProducts);

        // Check if more products exist
        $hasMore = $end < $totalProducts;

        // Prepare results
        $result['product'] = (object)$product;
        $result['pagination'] = (object)[
            'start' => $start,
            'end' => $end,
            'hasMore' => $hasMore,
            'total' => $totalProducts
        ];

        return [
            'state' => true,
            'data' => (object)$result
        ];
    }
}
