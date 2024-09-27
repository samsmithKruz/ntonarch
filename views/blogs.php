<?php
$header_include = "<link rel=\"stylesheet\" href=\"/public/css/blog.css\" />";
$title = "Ntornach :: Blog";
$page = "services";
require_once __DIR__ . "/inc/Header.php";

?>

<section id="banner" class="tilt-container">
    <div class="container tilt-item" style="background-image: url('/public/assets/blogs.jpg');">
        <h1>Blog Today</h1>
    </div>
</section>
<main class="container">
    <div class="blogs">
        <?php foreach ($blog_data->blogs as $e => $blogs): ?>
            <div class="blog">
                <a href="/blog/show/<?=$blogs->id;?>">
                    <img src="/public/uploads/<?=$blogs->thumbnail;?>" alt="Blog" />
                </a>
                <div class="content">
                    <a href="/blog/author/<?=$blogs->author_id;?>" style="font-size: 1rem;font-weight:400; display:flex;align-items:center;gap:.5rem; margin-bottom: 1rem;">
                        <?php if(!empty($blogs->avatar)):?>
                            <img style="height: 1rem; width:1rem; border-radius:1rem;object-fit:cover;" src="/public/uploads/<?=$blogs->avatar;?>" />
                        <?php endif?>
                        <?=$blogs->fullname;?>
                    </a>
                    <a href="/blog/show/<?=$blogs->id;?>" class="truncate" style="--line: 2;">
                    <?=$blogs->title;?>
                    </a>
                    <div class="info">
                        <div>
                            <span class="i_icon">&#xE01B;</span>
                            <span> <?=(new DateTime($blogs->created_at))->format('d.m.Y');?></span>
                        </div>
                        <div>
                            <span> 5</span>
                            <span class="i_icon">&#xE0B7;</span>
                        </div>
                        <a href="#" class="share" data-url="/blog/show/<?=$blogs->id;?>" data-title="/blog/show/<?=$blogs->title;?>" data-text="continue to view this blog content">
                            <span>Share</span>
                            <span class="i_icon" style="transform: rotateY(180deg);">&#xE15E;</span>
                        </a>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
        <div class="paginations">
            <a href="#" class="prev">Prev</a>
            <div class="pages">
                <a href="#">1</a>
                <a href="#">2</a>
                <a>...</a>
            </div>
            <a href="#" class="next">Next</a>
        </div>
        <script>
            function renderPagination(totalPages, currentPage) {
                console.log(`Rendering pagination: totalPages = ${totalPages}, currentPage = ${currentPage}`);

                let pagination = '';

                // Previous Button
                if (currentPage > 1) {
                    pagination += `<a href="?page=${currentPage - 1}" class="prev">Prev</a>`;
                }

                // Page Numbers with truncation
                let pages = '<div class="pages">';

                if (totalPages <= 5) {
                    // Show all pages if total pages <= 5
                    for (let page = 1; page <= totalPages; page++) {
                        pages += pageButton(page, currentPage);
                    }
                } else {
                    // Show the first two pages, current page, last two pages, and "..."
                    if (currentPage > 3) {
                        pages += pageButton(1, currentPage);
                        pages += pageButton(2, currentPage);
                        pages += '<a>...</a>';
                    }

                    let startPage = Math.max(3, currentPage - 1);
                    let endPage = Math.min(totalPages - 2, currentPage + 1);

                    for (let page = startPage; page <= endPage; page++) {
                        pages += pageButton(page, currentPage);
                    }

                    if (currentPage < totalPages - 2) {
                        pages += '<a>...</a>';
                        pages += pageButton(totalPages - 1, currentPage);
                        pages += pageButton(totalPages, currentPage);
                    }
                }

                pages += '</div>';
                pagination += pages;

                // Next Button
                if (currentPage < totalPages) {
                    pagination += `<a href="?page=${currentPage + 1}" class="next">Next</a>`;
                }

                document.querySelector('.paginations').innerHTML = pagination;
            }

            // Helper function to generate page buttons
            function pageButton(page, currentPage) {
                if (page === currentPage) {
                    return `<a href="?page=${page}" class="active">${page}</a>`;
                }
                return `<a href="?page=${page}">${page}</a>`;
            }


            // Initial render for page 1
            renderPagination(<?= $blog_data->total; ?>, <?= $blog_data->current_page; ?>);
        </script>
    </div>
    <aside class="latest">
        <h3>POPULAR BLOGS</h3>
        <div class="cards">
            <div class="card">
                <a href="#">
                    <img src="/public/assets/about.png" alt="Latest" />
                </a>
                <div class="content">
                    <a href="#" class="truncate" style="--line:2;">“She’s the best, Biden urges Democrats to embrace Harris</a>
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
                    <img src="/public/assets/about.png" alt="Latest" />
                </a>
                <div class="content">
                    <a href="#" class="truncate" style="--line:2;">“She’s the best, Biden urges Democrats to embrace Harris</a>
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
                    <img src="/public/assets/about.png" alt="Latest" />
                </a>
                <div class="content">
                    <a href="#" class="truncate" style="--line:2;">“She’s the best, Biden urges Democrats to embrace Harris</a>
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
                    <img src="/public/assets/about.png" alt="Latest" />
                </a>
                <div class="content">
                    <a href="#" class="truncate" style="--line:2;">“She’s the best, Biden urges Democrats to embrace Harris</a>
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
                    <img src="/public/assets/about.png" alt="Latest" />
                </a>
                <div class="content">
                    <a href="#" class="truncate" style="--line:2;">“She’s the best, Biden urges Democrats to embrace Harris</a>
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