<?php
$header_include = "<script src=\"/public/js/ckeditor5-build-custom-1.1/build/ckeditor.js\"></script>";
$title = "Dashboard";
$page = "post_blogs";

require_once __DIR__ . "/inc/userHeader.php";

?>


<div class="content">
    <h2>Post Blog</h2>
    <p>Create a new blog post.</p>

    <form action="" method="post" enctype="multipart/form-data">
        <div class="input">
            <label for="#">Blog Title</label>
            <input type="text" required name="title" placeholder="Enter blog title for post.">
        </div>
        <div class="input">
            <label for="#">Thumbnail</label>
            <input type="file" required name="thumbnail">
        </div>
        <div class="input">
            <textarea name="editor" name="content" class="editor" id="editor"></textarea>
        </div>
        <input type="hidden" name="csrf" value="<?=csrf_token();?>">
        <div class="input">
            <input type="submit" class="btn primary" value="Publish" />
        </div>
    </form>
</div>


<script>
    ClassicEditor.create(document.querySelector("#editor"), {
            removePlugins: ['style', 'Title', 'ImageStyle', 'ImageCaption', 'ImageToolbar', 'MediaEmbed', 'ImageUpload'],
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
$footer_include = "";
require_once __DIR__ . "/inc/userFooter.php";
?>