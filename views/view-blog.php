<?php

use Models\Comment;

$header_include = "<link rel=\"stylesheet\" href=\"/public/css/view_blog.css\" />";
$title = "Ntornarch's Blog";
$page = "blog";

require_once __DIR__ . "/inc/Header.php";
require_once __DIR__ . "/inc/nav.php"; 
?>

<main class="container">
  <section id="blogs" style="padding-bottom: 2em;">
    <div class="head">
      <h1>
        <?= $blog->title; ?>
      </h1>
      <div class="info">
        <div>
          <span><b>Author:</b><?= $blog->fullname; ?></span>
        </div>
        <div>
          <span class="i_icon"></span>
          <span> <?= (new DateTime($blog->created_at))->format('d.m.y'); ?></span>
        </div>
        <a href="#" class="share" data-url="<?= DOMAIN ?>/blog/show/<?= $blog->id ?>"
          data-title="<?= htmlspecialchars($blog->title); ?>" data-text="Read amazing content on <?= DOMAIN ?>">
          <span>Share</span>
          <span class="i_icon" style="transform: rotateY(180deg);">&#xE15E;</span>
        </a>
      </div>
    </div>
    <div class="content">
      <img class="banner" src="/public/uploads/<?= htmlspecialchars($blog->thumbnail); ?>"
        alt="<?= htmlspecialchars($blog->title); ?>" />
      <?= $blog->body; ?>
    </div>
    <div class="comments">
      <h3>Comments <span>(<?= count(array_filter($comments, function ($comment) {
        return $comment->status === '1';
      })); ?>)</span></h3>
      <div class="comment">
        <?php foreach ($comments as $comment): ?>
          <?php if ($comment->status != '1')
            continue; ?>
          <div>
            <div class="info">
              <div>
                <span class="avatar"><?= substr($comment->name, 0, 1) ?></span>
                <span><?= $comment->name; ?></span>
              </div>
            </div>
            <p class="content">
              <?= $comment->body; ?>
            </p>
          </div>
        <?php endforeach; ?>
        <form action="" method="post">
          <div class="input">
            <input type="hidden" name="blog_id" value="<?= $blog->id ?>">
            <input type="hidden" name="csrf" value="<?= csrf_token(); ?>">
            <input type="text" name="name" placeholder="Name" />
          </div>
          <div class="input">
            <input type="text" name="body" placeholder="Enter your comments here" />
            <input type="submit" value="Comment" />
          </div>
        </form>
      </div>
    </div>
  </section>
  <section id="blog" class="container" style="display: none;">
    <div class="top">
      <h3>More from <?= $blog->fullname; ?></h3>
    </div>
    <div id="cards">
      <div class="card">
        <div class="img">
          <img src="/public/assets/service_man.webp" alt="" />
        </div>
        <div class="author">
          <a href="#">GreenerFuture</a>
          <p>10.04.2024</p>
        </div>
        <a href="#" class="truncate head" style="--line: 2;">Off-Grid Cabin Renewable Energy Setup</a>
        <p class="truncate" style="--line: 3;">
          An off-grid cabin renewable energy setup provides independence,
          sustainability, and peace of mind by generating power in remote
          locations.
        </p>
      </div>
    </div>
    <a href="/blog" class="btn primary mobile">view more</a>
  </section>
</main>
<?php
$footer_include = "";
require_once __DIR__ . "/inc/Footer.php";
?>