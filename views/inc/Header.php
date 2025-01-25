<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $title ?? "Homepage :: Ntonarch"; ?></title>
    <link rel="shortcut icon" href="/public/assets/fav.svg" type="image/x-icon" />
    <link href="/public/assets/css/themify-icons.css" rel="stylesheet">
    <link href="/public/assets/css/flaticon.css" rel="stylesheet">
    <link href="/public/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/public/assets/css/animate.css" rel="stylesheet">
    <link href="/public/assets/css/owl.carousel.css" rel="stylesheet">
    <link href="/public/assets/css/owl.theme.css" rel="stylesheet">
    <link href="/public/assets/css/slick.css" rel="stylesheet">
    <link href="/public/assets/css/slick-theme.css" rel="stylesheet">
    <link href="/public/assets/css/swiper.min.css" rel="stylesheet">
    <link href="/public/assets/css/owl.transitions.css" rel="stylesheet">
    <link href="/public/assets/css/jquery.fancybox.css" rel="stylesheet">
    <link href="/public/assets/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- <link rel="stylesheet" href="/public/css/preloader.css" /> -->
    <!-- <script src="/public/js/preloader.js"></script> -->
    <?= isset($header_include) ? $header_include : "" ?>
</head>

<body>
    <?php require_once __DIR__ . "/flashMessage.php"; ?>
    <!-- start page-wrapper -->
    <div class="page-wrapper">

        <!-- start preloader -->
        <div class="preloader">
            <div class="lds-ellipsis">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <!-- end preloader -->