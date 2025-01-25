<?php
$header_include = "
<link rel=\"stylesheet\" href=\"/public/css/dataTables.css\">
    <script src=\"/public/js/jquery-3.7.1.min.js\"></script>
    <script src=\"/public/js/dataTables.js\"></script>
";
$title = "Manage Roles";
$page = "manage_roles";

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
          <th>Email</th>
          <th>Role</th>
          <th>Joined</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
      </tbody>
    </table>
  </div>
  <a href="/admin/add" class="btn primary">Add User</a>
</div>



<?php
$footer_include = "<script src=\"/public/js/table_.js\"></script>";
require_once __DIR__ . "/inc/userFooter.php";
?>