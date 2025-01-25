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
  <h2>Blog Management</h2>
  <div class="table">
    <table id="blog_management">
      <thead>
        <tr>
          <th>#</th>
          <th>Title</th>
          <th>Author</th>
          <th>Status</th>
          <th>Date</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
      </tbody>
    </table>
  </div>
  <a href="/blog/add" class="btn primary">Post Blog</a>
</div>



<?php
$footer_include = "<script src=\"/public/js/table_.js\"></script>";
require_once __DIR__ . "/inc/userFooter.php";
?>