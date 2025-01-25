<?php
// print_r($data);
// exit();
$productTitle = $title ?? "";
$header_include = "<script src=\"https://cdn.ckeditor.com/ckeditor5/44.1.0/ckeditor5.umd.js\" crossorigin></script>
<link rel=\"stylesheet\" href=\"https://cdn.ckeditor.com/ckeditor5/44.1.0/ckeditor5.css\" crossorigin>";
$title = "Dashboard";
$page = "post_products";

require_once __DIR__ . "/inc/userHeader.php";

?>

<div class="content">
    <h2><?= !empty($productTitle) ? "Update" : "Post"; ?> Product</h2>
    <p><?= !empty($productTitle) ? "Update product details." : "Create a new product post."; ?> </p>

    <form action="" method="post" enctype="multipart/form-data">
        <div class="input">
            <label for="#">Product Title</label>
            <input type="text" name="title" value="<?= $productTitle ?? ""; ?>" placeholder="Enter Product title." />
        </div>
        <div class="input">
            <label for="#">Product Price</label>
            <input type="text" name="price" value="<?= $price ?? ""; ?>" placeholder="# 500" inputmode="numeric" />
        </div>
        <div class="input">
            <label for="#">Product Category</label>
            <select name="category" id="">
                <option disabled <?= !isset($category) ? "selected" : ""; ?>>-- Select Product Category --</option>
                <?php foreach (explode(",", getenv("PRODUCT_CATEGORIES")) as $value): ?>
                    <option <?= isset($category) && $category == $value ? "selected" : ""; ?> value="<?= $value ?>">
                        <?= ucfirst($value) ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="input">
            <label for="#">Location</label>
            <input type="text" name="location" value="<?= $location ?? ""; ?>" placeholder="Enter Product Location." />
        </div>
        <div class="input">
            <label for="#">Seller's Contact</label>
            <input type="text" value="<?= $sellers_contact ?? ""; ?>" name="sellers_contact"
                value="<?= isset($tel) ? $tel : ""; ?>" placeholder="Enter seller's contact" />
        </div>
        <div class="input">
            <label for="">Description</label>
            <textarea name="editor" name="description" class="editor" id="editor"><?= $description ?? ""; ?></textarea>
        </div>
        <div style="
              gap: 1rem;
              display: grid;
              grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            ">
            <?php for ($i = 1; $i <= 4; $i++): ?>
                <div class="input">
                    <label for="#">Image (<?= $i; ?>)</label>
                    <input type="file" <?= $i == 1 && !isset($productTitle) ? "required" : ""; ?> name="img[]"
                        onchange="previewImage(event)" />
                    <?php if (!empty($img[$i - 1])): ?>
                        <img src="/public/uploads/<?= $img[$i - 1]; ?>" class="img-preview" alt="Preview of Image "
                            style="width: auto; height: 142px; margin-top: 0.5rem; object-fit:contain; align-self: flex-start" />
                    <?php endif; ?>
                </div>
            <?php endfor; ?>
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
$footer_include = "<script src='/public/js/functions.js'></script>";
require_once __DIR__ . "/inc/userFooter.php";
?>