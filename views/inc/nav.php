<header>
    <div class="container">
        <a href="/" class="logo">
            <img src="/public/assets/logo-white.svg" alt="" />
        </a>
        <nav>
            <span class="g_icon close">close</span>
            <a href="/about">About Us</a>
            <div class="dropdown">
                <div class="menu">
                    Services
                    <span class="g_icon">expand_more</span>
                </div>
                <div class="items">
                    <a href="/blog">Blog & Media</a>
                    <a href="/product">Market</a>
                    <a href="/engineering">Engineering</a>
                    <a href="/farm">Farm</a>
                </div>
            </div>
            <a href="/motivation">Motivation</a>
        </nav>
        <div class="cta">
            <?php if (isset($_SESSION[APP]->user)): ?>
                <a href="/dashboard" class="btn primary">Dashboard</a>
            <?php else: ?>
                <a href="/login" class="btn primary">Login</a>
            <?php endif; ?>
            <a href="#" class="mobile g_icon">menu</a>
        </div>
    </div>
    <script>
        document.querySelector("header .mobile").onclick = (e) => {
            e.preventDefault();
            document.querySelector("header nav").classList.toggle("active");
        };
        document.querySelector("header .close").onclick = (e) => {
            e.preventDefault();
            document.querySelector("header nav").classList.remove("active");
        };
    </script>
</header>