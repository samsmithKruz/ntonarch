<?php
// print_r($data);
// exit();
$header_include = "<link rel=\"stylesheet\" href=\"/public/css/view_market.css\" />";
$title = "Ntornarch's Blog";
$page = "blog";

require_once __DIR__ . "/inc/Header.php";

?>

<div id="hero">
  <?php require_once __DIR__ . "/inc/nav.php"; ?>
</div>
<main class="container">
  <div class="box" style="margin-top: 3rem;" id="product_view">
    <div class="gallery">
      <img src="/public/uploads/<?= $img[0]; ?>" alt="" class="main">
      <div class="img">
        <?php foreach ($img as $im): ?>
          <img src="/public/uploads/<?= $im; ?>" alt="<?= $title; ?>">
        <?php endforeach; ?>
      </div>
    </div>
    <div class="content">
      <h3 class="price">
        N <?= $price, 2; ?>
      </h3>
      <h2><?= $title; ?></h2>
      <h5><?= $location; ?></h5>
      <h4>Date Posted: <?= (new DateTime($date))->format('d.m.y'); ?></h4>
      <div class="btn-group">
        <a href="tel:<?= $sellers_contact; ?>" class="btn primary">Contact Seller</a>
        <a href="#" class="share btn" data-url="<?= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" data-title="<?= $title; ?>" data-text="Buy and sell products at good and affordable rates.">
          <span>Share</span>
          <span class="i_icon" style="transform: rotateY(180deg);"></span>
        </a>
      </div>
      <h2>Description</h2>
      <?= $description; ?>
    </div>
  </div>
  <div class="box">
    <h3>Other Items</h3>
    <div class="cards">
      <?php foreach ($otherProducts as $otherProduct): ?>
        <a href="/market/show/<?= $otherProduct->id; ?>" class="card">
          <img src="/public/uploads/<?= explode(",", $otherProduct->img)[0]; ?>" alt="">
          <h4><?= $otherProduct->title; ?></h4>
          <h3 class="price">
            <span class="old">N <?= number_format((int)$otherProduct->price + (0.483 * (int)$otherProduct->price), 2); ?></span>
            <span>N <?= number_format($otherProduct->price, 2); ?></span>
          </h3>
          <h5><?= $otherProduct->location; ?></h5>
        </a>
      <?php endforeach; ?>
    </div>
    <a href="/market" class="btn primary">See more</a>
  </div>
</main>
<script>
  document.addEventListener("DOMContentLoaded", () => {
    let showImg = e => {
      let img = e.target.closest("img");
      if (img) {
        document.querySelector(".gallery .main").setAttribute("src", img.getAttribute("src"));
        console.log();
      }
    }
    document.querySelector(".gallery .img").addEventListener("click", e => {
      showImg(e)
    })
    document.querySelector(".gallery .img").addEventListener("touch", e => {
      showImg(e)
    });
  })
</script>
<?php
$footer_include = "";
require_once __DIR__ . "/inc/Footer.php";
?>