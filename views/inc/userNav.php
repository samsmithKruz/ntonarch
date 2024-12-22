<aside>
  <span class="close">&times;</span>
  <h4 class="role"><?= ['BLOGGER', 'EDITOR', 'MARKETER', 'ADMIN'][$_SESSION[APP]->user->role]; ?></h4>
  <nav>
    <div class="group">
      <div class="head">
        General
      </div>
      <a href="/dashboard" class=" <?= $page == "dashboard" ? "active" : ""; ?>">
        <span class="i_icon">&#xE871;</span>
        Dashboard
      </a>
      <?php if (access([getenv('ADMIN')])): ?>
        <a href="/admin/manage_roles" class=" <?= $page == "manage_roles" ? "active" : ""; ?>">
          <span class="i_icon">&#xe7f0;</span>
          Manage Roles
        </a>
      <?php endif; ?>
      <a href="/blog" class=" <?= $page == "blogs" ? "active" : ""; ?>">
        <span class="i_icon">&#xe051;</span>
        Blogs Listings
      </a>
      <a href="/market" class=" <?= $page == "product_listings" ? "active" : ""; ?>">
        <span class="i_icon">&#xe85d;</span>
        Product Listings
      </a>
    </div>
    <div class="group">
      <div class="head">
        Content Management
      </div>
      <?php if (access([getenv('ADMIN'), getenv('BLOGGER'), getenv('EDITOR')])): ?>
        <a href="/blog/add" class=" <?= $page == "post_blogs" ? "active" : ""; ?>">
          <span class="i_icon">&#xe03b;</span>
          Post Blogs
        </a>
      <?php endif; ?>
      <?php if (access([getenv('ADMIN'), getenv('MARKETER')])): ?>
        <a href="/product/add" class=" <?= $page == "post_products" ? "active" : ""; ?>">
          <span class="i_icon">&#xe03b;</span>
          Post Products
        </a>
      <?php endif; ?>
      <?php if (access([getenv('ADMIN'), getenv('BLOGGER'), getenv('EDITOR')])): ?>
        <a href="/blog/manage" class=" <?= $page == "manage_blogs" ? "active" : ""; ?>">
          <span class="i_icon">&#xe85d;</span>
          Manage Blogs
        </a>
      <?php endif; ?>
      <?php if (access([getenv('ADMIN'), getenv('MARKETER')])): ?>
        <a href="/product/manage" class=" <?= $page == "manage_products" ? "active" : ""; ?>">
          <span class="i_icon">&#xe85d;</span>
          Manage Products
        </a>
      <?php endif; ?>
      <?php if (access([getenv('ADMIN'), getenv('EDITOR')])): ?>
        <!-- <a href="/blog/queue" class=" <?= $page == "blogs" ? "active" : ""; ?>">
          <span class="i_icon">&#xe86e;</span>
          Pending Blogs
        </a> -->
      <?php endif; ?>
      <?php if (access([getenv('ADMIN'), getenv('BLOGGER'), getenv('EDITOR')])): ?>
        <a href="/blog/comment" class=" <?= $page == "manage_comments" ? "active" : ""; ?>">
          <span class="i_icon">&#xe0b7;</span>
          Manage Comments
        </a>
      <?php endif; ?>
    </div>
    <a href="/support" class=" <?= $page == "support" ? "active" : ""; ?>">
      <span class="i_icon">&#xe887;</span>
      Support & Help
    </a>
    <a href="/logout">
      <span class="i_icon">&#xe890;</span>
      Logout
    </a>
  </nav>
</aside>
<div class="aside overlay" onclick="document.querySelector('aside').classList.remove('active')"></div>