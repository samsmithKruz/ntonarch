<?php
$header_include = "";
$title = "Account Settings";
$page = "";

require_once __DIR__ . "/inc/userHeader.php";

?>

<div class="content">
    <h2>Account Settings</h2>

    <form action="" method="post" enctype="multipart/form-data">
        <div class="input">
            <label for="#">Fullname</label>
            <input type="text" name="fullname" value="<?= $fullname; ?>" placeholder="Enter Your Fullname." />
        </div>
        <div class="input">
            <label for="#">Email</label>
            <input type="text" value="<?= $email; ?>" readonly />
        </div>
        <div class="input">
            <label for="#">Telephone</label>
            <input type="text" name="tel" value="<?= $tel; ?>" placeholder="Enter seller's contact" />
        </div>
        <div class="input">
            <label for="">About Yourself (250)</label>
            <textarea name="editor" name="description" class="editor" rows="10" id="editor" style="resize:none;"><?= $about; ?></textarea>
        </div>
        <div class="input">
            <label for="#">Profile Picture</label>
            <input type="file" name="avatar" />
            <?php if (!empty($avatar)): ?>
                <div style="margin:.5rem 0;align-self:flex-start;display:flex;align-items:flex-start;gap:.5rem;">
                    <img style="border-radius: .5rem; height: 150px; width:auto; " src="/public/uploads/<?= $avatar; ?>" alt="">
                    <a href="/dashboard/delete_avatar" class="btn red" style="border-radius: .5rem;">Delete</a>
                </div>
            <?php endif; ?>
        </div>
        <input type="hidden" name="csrf" value="<?= csrf_token(); ?>">
        <div class="input">
            <input type="submit" class="btn primary" value="Post" />
        </div>
    </form>
</div>

<script>
    ClassicEditor.create(document.querySelector("#editor"), {
            removePlugins: [
                "style",
                "Title",
                "ImageStyle",
                "ImageCaption",
                "ImageToolbar",
                "MediaEmbed",
                "ImageUpload",
            ],
            updateSourceElementOnDestroy: true,
            fontSize: {
                options: [10, 12, 14, "default", 18, 20, 22],
                supportAllValues: true,
            },
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