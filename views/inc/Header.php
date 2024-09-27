<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Homepage :: Ntonarch</title>
    <link rel="shortcut icon" href="/public/assets/fav.svg" type="image/x-icon" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" href="/public/css/swiper-bundle.min.css" />
    <script src="/public/js/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="/public/css/preloader.css" />
    <script src="/public/js/preloader.js"></script>
    <?= isset($header_include) ? $header_include : "" ?>
</head>

<body>
    <?php require_once __DIR__ . "/flashMessage.php"; ?>
    <div class="preloader">
        <img src="/public/assets/logo.svg" alt="" />
    </div>
    <header>
        <a href="/" class="logo">
            <img src="/public/assets/logo.svg" alt="Ntonarch" />
        </a>
        <a href="/login" class="btn primary" style="color: #fff;position:absolute; top: 0; right: 0; margin: .5rem;">Login</a>
        <div class="menu">
            <nav>
                <a href="/" class="<?= $page == "home" ? "active" : ""; ?> link">HOME</a>
                <a href="/about" class="<?= $page == "about" ? "active" : ""; ?> link">ABOUT</a>
                <div class="<?= $page == "services" ? "active" : ""; ?> link dropdown">
                    SERVICES
                    <div class="items">
                        <a href="/blog">Blogs & Media</a>
                        <a href="/products">Market</a>
                        <a href="/engineering">Engineering</a>
                        <a href="/computer">Computer</a>
                        <a href="/foundation">Foundation</a>
                    </div>
                </div>
                <a href="/about#team" class="<?= $page == "contact" ? "active" : ""; ?> link">CONTACT US</a>
            </nav>
        </div>
    </header>