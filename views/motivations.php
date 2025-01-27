<?php
$header_include = "<link rel=\"stylesheet\" href=\"/public/css/blog.css\" />";
$title = "Ntornarch Motivations";
$page = "motivations";

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
        <h2>Motivations</h2>
        <ol class="breadcrumb">
          <li><a href="index.html">Home</a></li>
          <li>Motivations</li>
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
        <div class="blog-content">
          <?php foreach ($motivation_data->motivations as $motivation): ?>
            <div class="post format-standard">
              <div class="meta-title">
                <div class="meta">
                  <ul class="entry-meta">
                    <li><?= (new DateTime($motivation->create_at))->format('d.m.y'); ?></li>
                    <li><a
                        href="/author/<?= $motivation->author_id ?>"><?= htmlspecialchars($motivation->fullname); ?></a>
                    </li>
                    <li>
                      <a href="#" class="share" data-url="<?= DOMAIN ?>/motivations?search=<?= htmlspecialchars($motivation->title); ?>"
                        data-title="<?= htmlspecialchars($motivation->title); ?>"
                        data-text="Read amazing content on <?= DOMAIN ?>">
                        <span>Share</span>
                        <span class="i_icon" style="transform: rotateY(180deg);">&#xE15E;</span>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="title">
                  <h3><?= htmlspecialchars($motivation->title); ?></h3>
                </div>
              </div>
              <p><q><?= htmlspecialchars(getFirstParagraphContent($motivation->content)); ?></q></p>
            </div>
          <?php endforeach; ?>
          <div class="pagination-wrapper pagination-wrapper-left">
            <ul class="pg-pagination">
              <?php $totalPages = ceil($motivation_data->total / 10); ?>

              <li>
                <a href="<?= $motivation_data->current_page > 1 ? "/motivation?page=" . ($motivation_data->current_page - 1) : "#"; ?>"" aria-label="
                  Previous">
                  <i class="fi flaticon-back"></i>
                </a>
              </li>
              <li><?= $totalPages>0? $motivation_data->current_page . " of " . $totalPages:"No Motivation found"; ?></li>
              <li>
                <a href="<?= $motivation_data->current_page < $totalPages ? "/motivation?page=" . ($motivation_data->current_page + 1) : '#'; ?>"" aria-label="
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