<?php
// print_r($data);exit();
$blogTitle = $title ?? "";
$header_include = "<script src=\"/public/js/ckeditor.js\" ></script>";
$title = "Dashboard";
$page = "post_motivation";

require_once __DIR__ . "/inc/userHeader.php";

?>


<div class="content">
    <h2><?= !empty($motivationTitle) ? "Update" : "Post"; ?> Motivation</h2>
    <p><?= !empty($motivationTitle) ? "Update motivation post." : "Create a new motivation post."; ?></p>

    <form action="" method="post" enctype="multipart/form-data">
        <div class="input">
            <label for="#">Motivation Title</label>
            <input type="text" required value="<?= $motivationTitle ?? ""; ?>" name="title"
                placeholder="Enter motivation title for post.">
        </div>
        <?php if (!empty($motivationTitle) && $_SESSION[APP]->user->role == getenv("ADMIN")): ?>
            <div class="input">
                <label for="#">Status</label>
                <select name="status" id="#">
                    <option disabled <?= !isset($status) ? "selected" : ""; ?>>-- Select Status --</option>
                    <option <?= isset($status) && $status == "1" ? "selected" : ""; ?> value="1">Approved</option>
                    <option <?= isset($status) && $status == "0" ? "selected" : ""; ?> value="0">Pending</option>
                </select>
            </div>
        <?php endif; ?>

        <div class="input">
            <label for="#">Content</label>
            <textarea name="editor" name="content" class="editor" id="editor"><?= $content ?? ""; ?></textarea>
        </div>
        <input type="hidden" name="csrf" value="<?= csrf_token(); ?>">
        <div class="input">
            <input type="submit" class="btn primary" value="<?= empty($motivationTitle) ? "Publish" : "Update"; ?>" />
        </div>
    </form>
</div>


<script>
    ClassicEditor.create(document.querySelector("#editor"), {
        removePlugins: ['Title', 'ImageStyle', 'ImageCaption', 'ImageToolbar', 'MediaEmbed', 'ImageUpload'],
        updateSourceElementOnDestroy: true,
        fontSize: {
            options: [10, 12, 14, "default", 18, 20, 22],
            supportAllValues: true,
        }
    })
        .then((editor) => {
            window.editor = editor;
        })
        .catch((error) => {
            console.error(error);
        });
</script>

<?php
$footer_include = "<script src='/public/js/functions.js'></script>";
require_once __DIR__ . "/inc/userFooter.php";
?>