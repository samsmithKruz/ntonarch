<?php
$header_include = "
<link rel=\"stylesheet\" href=\"/public/css/dataTables.css\">
    <script src=\"/public/js/jquery-3.7.1.min.js\"></script>
    <script src=\"/public/js/dataTables.js\"></script>
";
$title = "Manage Blogs";
$page = "manage_blogs";

require_once __DIR__ . "/inc/userHeader.php";

?>

<div class="content">
    <h2>Role Management</h2>
    <div class="table">
        <table id="user_management">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Fullname</th>
                    <th>Role</th>
                    <th>Joined</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td>John Doe</td>
                    <td>
                        <select name="" id="">
                            <option value="">Blogger</option>
                            <option value="">Editor</option>
                            <option value="">Marketer</option>
                            <option value="">Admin</option>
                        </select>
                    </td>
                    <td>10.04.2024</td>
                    
                    <td>
                        <div class="btn-group">
                            <a href="#" class="btn small green">Update</a>
                            <a href="#" class="btn small red">Delete</a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <a href="#" class="btn primary">Add User</a>
</div>



<?php
$footer_include = "<script src=\"/public/js/table_.js\"></script>";
require_once __DIR__ . "/inc/userFooter.php";
?>