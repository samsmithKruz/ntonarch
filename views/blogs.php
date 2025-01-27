<?php
$header_include = "<link rel=\"stylesheet\" href=\"/public/css/blog.css\" />";
$title = "Ntornarch Blogs";
$page = "blog";

require_once __DIR__ . "/inc/Header.php";
require_once __DIR__ . "/inc/nav.php";
?>
<section class="page-title"
  style="background-image: url('/public/assets/images/hero-bg-blog.jpg'); background-attachment: fixed;">
  <div class="overlay"
    style="position: absolute; top: 0;left:0; width:100%; height:100%; background-color:#4e1d066f; mix-blend-mode:multiply;">
  </div>
  <div class="container">
    <div class="row">
      <div class="col col-xs-12">
        <h2>Blog & Media</h2>
        <ol class="breadcrumb">
          <li><a href="index.html">Home</a></li>
          <li>Blog & Media</li>
        </ol>
      </div>
    </div> <!-- end row -->
  </div> <!-- end container -->
</section>
<!-- start blog-pg-section -->
<section class="blog-pg-section section-padding">
  <div class="container">
    <div class="row">
      <div class="col col-md-8">
        <style>
          .blog-content .entry-media img{
            width: 100%;
            height: 400px;
            object-fit: cover;
          }
        </style>
        <div class="blog-content">
          <?php foreach ($blog_data->blogs as $blog): ?>
            <?php // print_r($blog);exit(); ?>
            <div class="post format-standard-image">
              <div class="entry-media">
                <img src="/public/uploads/<?= htmlspecialchars($blog->thumbnail); ?>"
                  alt="<?= htmlspecialchars($blog->title); ?>">
              </div>
              <div class="meta-title">
                <div class="meta">
                  <ul class="entry-meta">
                    <li><a href="/author/<?= $blog->author_id ?>"><?= htmlspecialchars($blog->fullname); ?></a></li>
                    <li><?= (new DateTime($blog->created_at))->format('d.m.y'); ?></li>
                    <li>
                      <a href="#" class="share" data-url="<?= DOMAIN ?>/blog/show/<?= $blog->id ?>"
                        data-title="<?= htmlspecialchars($blog->title); ?>"
                        data-text="Read amazing content on <?= DOMAIN ?>">
                        <span>Share</span>
                        <span class="i_icon" style="transform: rotateY(180deg);">&#xE15E;</span>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="title">
                  <h3><a href="/blog/show/<?= $blog->id ?>" class="truncate"
                      style="--line: 1;"><?= htmlspecialchars($blog->title); ?></a></h3>
                </div>
              </div>
              <p><?= htmlspecialchars(getFirstParagraphContent($blog->body)); ?></p>
              <a href="/blog/show/<?= $blog->id ?>" class="theme-btn">Read More</a>
            </div>
          <?php endforeach; ?>
          <div class="pagination-wrapper pagination-wrapper-left">
            <ul class="pg-pagination">
              <?php $totalPages = ceil($blog_data->total / 10); ?>

              <li>
                <a href="<?= $blog_data->current_page > 1 ? "/blog?page=" . ($blog_data->current_page - 1) : "#"; ?>"" aria-label="
                  Previous">
                  <i class="fi flaticon-back"></i>
                </a>
              </li>
              <li><?= $totalPages>0? $blog_data->current_page . " of " . $totalPages:"No blog found"; ?></li>
              <li>
                <a href="<?= $blog_data->current_page < $totalPages ? "/blog?page=" . ($blog_data->current_page + 1) : '#'; ?>"" aria-label="
                  Next">
                  <i class="fi flaticon-next"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col col-md-4">
        <div class="blog-sidebar">
          <div class="widget search-widget">
            <h3>Search</h3>
            <form>
              <div>
                <input type="text" class="form-control" placeholder="Search Post..">
                <button type="submit"><i class="ti-search"></i></button>
              </div>
            </form>
          </div>
          <div class="widget category-widget">
            <h3>Categories</h3>
            <ul>
              <li><a href="#">Industry (2)</a></li>
              <li><a href="#">Factory (5)</a></li>
              <li><a href="#">Construction (12)</a></li>
              <li><a href="#">Oil & gas (12)</a></li>
              <li><a href="#">Repearing (8)</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div> <!-- end container -->
</section>
<!-- end blog-pg-section -->

<?php
$footer_include = "";
require_once __DIR__ . "/inc/Footer.php";
?>