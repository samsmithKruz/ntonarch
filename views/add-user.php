<?php
// print_r($data);
// exit();
$productTitle = $title ?? "";
$header_include = "";
$title = "Dashboard";
$page = "post_products";

require_once __DIR__ . "/inc/userHeader.php";

?>

<div class="content">
    <h2><?= !empty($userFullname) ? "Update" : "Post"; ?> User</h2>
    <p><?= !empty($userFullname) ? "Update User details." : "Add a new user."; ?> </p>

    <form action="" method="post">
        <div class="input">
            <label for="#">Fullname</label>
            <input type="text" name="fullname" value="<?= $userFullname ?? ""; ?>" placeholder="Enter user fullname." />
        </div>
        <div class="input">
            <label for="#">Email</label>
            <input type="email" name="email" value="<?= $userEmail ?? ""; ?>" placeholder="Enter user email." />
        </div>
        <div class="input">
            <label for="#">Password</label>
            <input type="text" name="password" value="<?= $userPassword ?? "123456"; ?>" placeholder="Enter user password." />
        </div>
        <div class="input">
            <label for="#">Contact</label>
            <input type="tel" name="tel" value="<?= $userTel ?? ""; ?>" placeholder="Enter phone no. eg. 090 ..." />
        </div>
        <div class="input">
            <label for="#">User Role</label>
            <select name="role" id="">
                <option disabled <?= !isset($category) ? "selected" : ""; ?>>-- Select User Role --</option>
                <?php foreach (explode(",", getenv("ROLES")) as $value): ?>
                    <option <?= isset($category) && $category == $value ? "selected" : ""; ?> value="<?= $value ?>">
                        <?= ucfirst($value) ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <input type="hidden" name="csrf" value="<?= csrf_token(); ?>">
        <div class="input">
            <input type="submit" class="btn primary" value="Save" />
        </div>
    </form>
</div>

<?php
$footer_include = "<script src='/public/js/functions.js'></script>";
require_once __DIR__ . "/inc/userFooter.php";
?>