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
                <th>Author</th>
                <th>Title</th>
                <th>Date Posted</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td></td>
                <td>John Doe</td>
                <td >
                  <a href="#" class="truncate" style="--line: 1; color: inherit; font-size: inherit;">The Fall of the Horizon</a>
                </td>
                <td>10.04.2024</td>
                <td>
                  <select name="" id="">
                    <option value="">Approve</option>
                    <option value="">Pending</option>
                  </select>
                </td>
                <td>
                  <div class="btn-group">
                    <a href="#" class="btn small green">Update</a>
                    <a href="#" class="btn small red">Delete</a>
                  </div>
                </td>
              </tr>
              <tr>
                <td></td>
                <td>John Doe</td>
                <td >
                  <a href="#" class="truncate" style="--line: 1; color: inherit; font-size: inherit;">The Fall of the Horizon</a>
                </td>
                <td>10.04.2024</td>
                <td>
                  <select name="" id="">
                    <option value="">Approve</option>
                    <option value="">Pending</option>
                  </select>
                </td>
                <td>
                  <div class="btn-group">
                    <a href="#" class="btn small green">Update</a>
                    <a href="#" class="btn small red">Delete</a>
                  </div>
                </td>
              </tr>
              <tr>
                <td></td>
                <td>John Doe</td>
                <td >
                  <a href="#" class="truncate" style="--line: 1; color: inherit; font-size: inherit;">The Fall of the Horizon</a>
                </td>
                <td>10.04.2024</td>
                <td>
                  <select name="" id="">
                    <option value="">Approve</option>
                    <option value="">Pending</option>
                  </select>
                </td>
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