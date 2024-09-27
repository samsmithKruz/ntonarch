<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $title ?? "Homepage :: Ntonarch"; ?></title>
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