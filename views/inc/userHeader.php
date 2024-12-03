<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $title ?? "Homepage :: Ntonarch"; ?></title>
    <link rel="shortcut icon" href="<?= asset("assets/fav.svg"); ?>" type="image/x-icon" />
    <link rel="stylesheet" href="<?= asset("css/preloader.css"); ?>" />
    <script src="<?= asset("js/preloader.js"); ?>"></script>
    <!-- Add SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="<?= asset("css/dashboard.css"); ?>" />
    <?= isset($header_include) ? $header_include : "" ?>
</head>

<body style="background-color: #fafafaee;">
    <div class="preloader">
        <img src="<?= asset("assets/logo.svg"); ?>" alt="" />
    </div>
    <?php require_once __DIR__ . "/flashMessage.php"; ?>

    <header>
        <div>
            <a href="#" class="side-nav i_icon">&#xE5d2;</a>
            <a href="/dashboard" class="logo">
                <img src="<?= asset("assets/logo.svg"); ?>" alt="" />
            </a>

        </div>
        <div class="dropdown">
            <div class="user"><?= $name ?? "User"; ?>
                <?php if (!empty($avatar)): ?>
                    <img style="object-fit:cover;border-radius: 1.5rem; height: 1.5rem; width:1.5rem; " src="/public/uploads/<?= $avatar; ?>" alt="">
                <?php else: ?>
                    <span class="i_icon">&#xE853;</span>
                <?php endif; ?>
            </div>
            <div class="items">
                <a href="/dashboard/settings">
                    <span class="i_icon">&#xf085;</span>
                    Account Settings
                </a>
                <a href="/logout">
                    <span class="i_icon">&#xe890;</span>
                    Logout
                </a>
            </div>
        </div>
    </header>
    <main>

        <?php
        require_once __DIR__ . "/userNav.php";
        ?>
        <script>
            document.querySelector(".side-nav").onclick = (e) => {
                e.preventDefault();
                document.querySelector("main aside").classList.toggle("active");
            };
            document.querySelector("main aside .close").onclick = (e) => {
                e.preventDefault();
                document.querySelector("main aside").classList.remove("active");
            };
        </script>