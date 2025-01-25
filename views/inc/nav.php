<!-- Start header -->
<header id="header" class="site-header header-style-2">

    <nav class="navigation navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="open-btn">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">
                    <img src="/public/assets/logo.svg" style="width: auto;height: 1.5em;" alt>
                </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse navbar-right navigation-holder">
                <button class="close-navbar"><i class="ti-close"></i></button>
                <ul class="nav navbar-nav">
                    <li><a href="/">Home</a></li>
                    <li class="menu-item-has-children">
                        <a href="#">Services</a>
                        <ul class="sub-menu">
                            <li><a href="/market">Market</a></li>
                            <li><a href="/services/engineering">Construction & Engineering</a></li>
                            <li><a href="/services/farm">Agriculture & Farming</a></li>
                            <li><a href="/services/it">Information Technology</a></li>
                            <li><a href="/services/web_development">Web Development</a></li>
                            <li><a href="/motivation">Motivation</a></li>
                        </ul>
                    </li>
                    <li><a href="/blog">Blog</a></li>
                    <li><a href="/about">About Us</a></li>
                    <li><a href="/contact">Contact Us</a></li>
                </ul>
            </div><!-- end of nav-collapse -->

            <div class="search-contact">
                <div class="header-search-form-wrapper">
                    <button class="search-toggle-btn"><i class="ti-search"></i></button>
                    <div class="header-search-form">
                        <form>
                            <div>
                                <input type="text" class="form-control" placeholder="Search here...">
                                <button type="submit"><i class="ti-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="contact-btn">
                    <?php if (isset($_SESSION[APP]->user)): ?>
                        <a href="/dashboard" class="theme-btn">Dashboard</a>
                    <?php else: ?>
                        <a href="/login" class="theme-btn">Login</a>
                    <?php endif; ?>
                </div>
            </div>
        </div><!-- end of container -->
    </nav>
</header>
<!-- end of header -->