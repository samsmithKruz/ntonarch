<?php
$header_include = "<script src=\"/public/js/ckeditor5-build-custom-1.1/build/ckeditor.js\"></script>";
$title = "Dashboard";
$page = "post_products";

require_once __DIR__ . "/inc/userHeader.php";

?>

<div class="content">
    <h2>Post Product</h2>
    <p>Create a new product post.</p>

    <form action="" method="post" enctype="multipart/form-data">
        <div class="input">
            <label for="#">Product Title</label>
            <input type="text" name="title" placeholder="Enter Product title." />
        </div>
        <div class="input">
            <label for="#">Product Price</label>
            <input type="text" name="price" placeholder="# 500" inputmode="numeric" />
        </div>
        <div class="input">
            <label for="#">Product Category</label>
            <select name="category" id="">
                <option disabled selected>-- Select Product Category --</option>
                <option value="cloth">Cloth</option>
                <option value="food">Food</option>
                <option value="appliances">Appliances</option>
                <option value="electronics">Electronics</option>
                <option value="phones">Phones</option>
                <option value="others">Others</option>
            </select>
        </div>
        <div class="input">
            <label for="#">Location</label>
            <input type="text" name="location" placeholder="Enter Product Location." />
        </div>
        <div class="input">
            <label for="#">Seller's Contact</label>
            <input type="text" name="sellers_contact" value="<?= isset($tel) ? $tel : ""; ?>" placeholder="Enter seller's contact" />
        </div>
        <div class="input">
            <label for="">Description</label>
            <textarea name="editor" name="description" class="editor" id="editor"></textarea>
        </div>
        <div
            style="
              gap: 1rem;
              display: grid;
              grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            ">
            <div class="input">
                <label for="#">Image (1)</label>
                <input type="file" required name="img[]" />
            </div>
            <div class="input">
                <label for="#">Image (2)</label>
                <input type="file" name="img[]" />
            </div>
            <div class="input">
                <label for="#">Image (3)</label>
                <input type="file" name="img[]" />
            </div>
            <div class="input">
                <label for="#">Image (4)</label>
                <input type="file" name="img[]" />
            </div>
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