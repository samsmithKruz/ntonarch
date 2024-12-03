<?php
// print_r($data);exit();
$blogTitle = $title ?? "";
$header_include = "<script src=\"/public/js/ckeditor5-build-custom-1.1/build/ckeditor.js\"></script>";
$title = "Dashboard";
$page = "post_blogs";

require_once __DIR__ . "/inc/userHeader.php";

?>


<div class="content">
    <h2><?= !empty($blogTitle) ? "Update" : "Post"; ?> Blog</h2>
    <p><?= !empty($blogTitle) ? "Update blog post." : "Create a new blog post."; ?></p>

    <form action="" method="post" enctype="multipart/form-data">
        <div class="input">
            <label for="#">Blog Title</label>
            <input type="text" required value="<?= $blogTitle; ?>" name="title" placeholder="Enter blog title for post.">
        </div>
        <div class="input">
            <label for="#">Thumbnail</label>
            <input type="file" <?= !isset($blogTitle) ? "required" : ""; ?> name="thumbnail" onchange="previewImage(event)">
            <?php if (!empty($thumbnail)): ?>
                <img src="/public/uploads/<?= $thumbnail; ?>" class="img-preview" alt="Preview of Image " style="width: auto; height: 142px; margin-top: 0.5rem; object-fit:contain; align-self: flex-start" />
            <?php endif; ?>
        </div>

        <div class="input">
            <textarea name="editor" name="content" class="editor" id="editor"><?= $content ?? ""; ?></textarea>
        </div>
        <div class="input blog-tags" style="justify-content: flex-start; flex-wrap:wrap;gap:.5em;">
            <b for="#">Tags</b>:
            <span class="tag btn small">
                <input type="checkbox" <?= in_array("politics", $tags ?? []) ? "checked" : ""; ?> id="politics" name="tags[]" value="politics">
                <label for="politics">Politics</label>

            </span>
            <span class="tag btn small">
                <input type="checkbox" <?= in_array("fame", $tags ?? []) ? "checked" : ""; ?> id="fame" name="tags[]" value="fame">
                <label for="fame">Fame</label>
            </span>
            <span class="tag btn small">
                <input type="checkbox" <?= in_array("story", $tags ?? []) ? "checked" : ""; ?> id="story" name="tags[]" value="story">
                <label for="story">Story</label>
            </span>
        </div>
        <input type="hidden" name="csrf" value="<?= csrf_token(); ?>">
        <div class="input">
            <input type="submit" class="btn primary" value="<?= empty($blogTitle) ? "Publish" : "Update"; ?>" />
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