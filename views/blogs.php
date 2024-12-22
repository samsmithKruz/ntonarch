<?php
$header_include = "<link rel=\"stylesheet\" href=\"/public/css/blog.css\" />";
$title = "Ntornarch Blogs";
$page = "blog";

require_once __DIR__ . "/inc/Header.php";

?>
<div id="hero">
  <?php require_once __DIR__ . "/inc/nav.php"; ?>
  <section class="container">
    <h2>Blog</h2>
  </section>
</div>
<main>
  <section id="blog" class="container">
    <div id="categories">
      <a href="#" class="btn active">All</a>
      <a href="#" class="btn">Politics</a>
      <a href="#" class="btn">Fame</a>
      <a href="#" class="btn">Story</a>
    </div>
    <div id="cards">
      <?php
      foreach ($blog_data->blogs as $blog):
      ?>
        <div class="card">
          <div class="img">
            <img src="/public/uploads/<?= htmlspecialchars($blog->thumbnail); ?>" alt="<?= htmlspecialchars($blog->title); ?>" />
          </div>
          <div class="share-space">
            <div class="author">
              <a href="/author/<?= $blog->author_id ?>"><?= htmlspecialchars($blog->fullname); ?></a>
              <p><?= (new DateTime($blog->created_at))->format('d.m.y'); ?></p>
            </div>
            <a
              href="#"
              class="share"
              data-url="<?= DOMAIN ?>/blog/show/<?= $blog->id ?>"
              data-title="<?= htmlspecialchars($blog->title); ?>"
              data-text="Read amazing content on <?= DOMAIN ?>">
              <span>Share</span>
              <span class="i_icon" style="transform: rotateY(180deg);">&#xE15E;</span>
            </a>
          </div>
          <a href="/blog/show/<?= $blog->id ?>" class="head truncate" style="--line: 1;"><?= htmlspecialchars($blog->title); ?></a>
          <p class="truncate" style="--line: 3;">
            <?= htmlspecialchars(getFirstParagraphContent($blog->content)); ?>
          </p>
          <a href="/blog/show/<?= $blog->id ?>" class="btn primary">Read More</a>
        </div>
      <?php endforeach; ?>
    </div>
    <div id="pagination">
      <?php $totalPages = ceil($blog_data->total / 10); ?>
      <a href="<?= $blog_data->current_page > 1 ? "/blog?page=" . ($blog_data->current_page - 1) : "#"; ?>" class="prev g_icon">arrow_back</a>
      <div class="page"><?= $blog_data->current_page; ?> of <?= $totalPages; ?></div>
      <a href="<?= $blog_data->current_page < $totalPages ? "/blog?page=" . ($blog_data->current_page + 1) : '#'; ?>" class="next g_icon">arrow_forward</a>
    </div>
    <!-- <a href="#" class="btn primary mobile">Visit Blog</a> -->
  </section>
</main>
<?php
$footer_include = "";
require_once __DIR__ . "/inc/Footer.php";
?>