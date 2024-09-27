<?php
$header_include = "<link rel=\"stylesheet\" href=\"/public/css/blog.css\" />";
$title = "Ntornach :: Blog";
$page = "services";
require_once __DIR__ . "/inc/Header.php";

?>
<style>
    body {
        background: #fafafa46;
        font-size: clamp(1.4vw, 1.125rem, 20px);
    }
</style>


<main class="container">
    <section id="blogs">
        <div class="head">
            <h1 style="text-transform: capitalize;">
                <?= $blog->title; ?>
            </h1>
            <div class="info">
                <div>
                    <a href="/blog/author/<?= $blog->author_id; ?>" style=" display:inline-flex;align-items:center;gap:.5rem;color: inherit;">

                        <?php if (!empty($blog->avatar)): ?>
                            <img style="height: 1rem; width:1rem; border-radius:1rem;object-fit:cover;" src="/public/uploads/<?= $blog->avatar; ?>" />
                        <?php endif ?>
                        <?= $blog->fullname; ?>
                    </a>
                </div>
                <div>
                    <span class="i_icon">&#xE01B;</span>
                    <span> <?= (new DateTime($blog->created_at))->format('d.m.Y'); ?></span>
                </div>
                <a
                    href="#" class="share" data-url="/blog/show/<?= $blog->id; ?>" data-title="/blog/show/<?= $blog->title; ?>" data-text="continue to view this blog content">
                    <span>Share</span>
                    <span class="i_icon" style="transform: rotateY(180deg);">&#xE15E;</span>
                </a>
            </div>
        </div>
        <div class="content">
            <img src="/public/uploads/<?=$blog->thumbnail;?>" alt="" class="banner">
            <?=$blog->content;?>
        </div>
        <div class="comments">
            <h3>Comments <span>(36)</span></h3>
            <div class="comment">
                <div>
                    <div class="info">
                        <div>
                            <span class="avatar">S</span>
                            <span>Smith Kruz</span>
                        </div>
                    </div>
                    <p class="content">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam aliquam totam tenetur praesentium, perferendis iste?
                        <br><small><em>10.04.2024</em></small>
                    </p>
                </div>
                <div>
                    <div class="info">
                        <div>
                            <span class="avatar">S</span>
                            <span>Smith Kruz</span>
                        </div>
                    </div>
                    <p class="content">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam aliquam totam tenetur praesentium, perferendis iste?
                        <br><small><em>10.04.2024</em></small>
                    </p>
                </div>
            </div>
            <form action="#">
                <div class="input" style="align-items:center;">
                    <label for="" style="padding-inline:.5rem; font-weight:500;">Name</label>
                    <input type="text" placeholder="Enter your name">
                </div>
                <div class="input">
                    <input type="text" placeholder="Enter your comments here">
                    <input type="submit" value="Comment">
                </div>
            </form>
        </div>
    </section>
    <aside class="latest">
        <h3>READ MORE</h3>
        <div class="cards">
            <div class="card">
                <a href="#">
                    <img src="./assets/about.png" alt="Latest" />
                </a>
                <div class="content">
                    <a href="#" class="truncate" style="--line: 2;">“She’s the best, Biden urges Democrats to embrace Harris</a>
                    <div class="info">
                        <div>
                            <span class="i_icon">&#xE01B;</span>
                            <span> 10.04.2024</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <a href="#">
                    <img src="./assets/about.png" alt="Latest" />
                </a>
                <div class="content">
                    <a href="#" class="truncate" style="--line: 2;">“She’s the best, Biden urges Democrats to embrace Harris</a>
                    <div class="info">
                        <div>
                            <span class="i_icon">&#xE01B;</span>
                            <span> 10.04.2024</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <a href="#">
                    <img src="./assets/about.png" alt="Latest" />
                </a>
                <div class="content">
                    <a href="#" class="truncate" style="--line: 2;">“She’s the best, Biden urges Democrats to embrace Harris</a>
                    <div class="info">
                        <div>
                            <span class="i_icon">&#xE01B;</span>
                            <span> 10.04.2024</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <a href="#">
                    <img src="./assets/about.png" alt="Latest" />
                </a>
                <div class="content">
                    <a href="#" class="truncate" style="--line: 2;">“She’s the best, Biden urges Democrats to embrace Harris</a>
                    <div class="info">
                        <div>
                            <span class="i_icon">&#xE01B;</span>
                            <span> 10.04.2024</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <a href="#">
                    <img src="./assets/about.png" alt="Latest" />
                </a>
                <div class="content">
                    <a href="#" class="truncate" style="--line: 2;">“She’s the best, Biden urges Democrats to embrace Harris</a>
                    <div class="info">
                        <div>
                            <span class="i_icon">&#xE01B;</span>
                            <span> 10.04.2024</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
</main>


<?php
$footer_include = "<script src=\"/public/js/tilt.js\"></script><script src=\"/public/js/shareAPI.js\"></script>";
require_once __DIR__ . "/inc/Footer.php";
?>