<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login :: Ntonarch</title>
  <link rel="shortcut icon" href="<?= asset("assets/fav.svg"); ?>" type="image/x-icon" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <!-- <link rel="stylesheet" href="./css/swiper-bundle.min.css" /> -->
  <link rel="stylesheet" href="<?= asset("css/login.css"); ?>" />
  <link rel="stylesheet" href="<?= asset("css/preloader.css"); ?>" />
  <script src="<?= asset("js/preloader.js"); ?>"></script>
  <!-- <script src="./js/swiper-bundle.min.js"></script> -->
</head>

<body>
  <?php require_once __DIR__."/inc/flashMessage.php"; ?>
  <div class="preloader">
    <img  src="<?= asset("assets/logo.svg"); ?>" alt="" />
  </div>
  <form action="/login" method="post">
    <h2>
      <a href="<?= base_url();?>" class="logo">
        <img style="height: 2.5rem !important;" src="<?= asset("assets/fav.svg"); ?>" alt="" />
      </a>
      <span>
        Welcome Back
      </span>
    </h2>
    <!-- <div class="err">
      <span class="i_icon">&#xE001;</span>
      <span class="">Lorem ipsum dolor sit, amet consectetur adipisicing elit. A.</span>
    </div> -->
    <input type="hidden" name="csrf" value="<?=csrf_token();?>">
    <div class="input">
      <label for="email">Email</label>
      <input
        type="email"
        name="email"
        id="email"
        value="<?=old("email");?>"
        placeholder="Please enter your email." />
    </div>
    <div class="input">
      <label for="password">Password</label>
      <input
        type="password"
        name="password"
        id="password"
        placeholder="" />
    </div>
    <div class="input">
      <label for="remember">
        <input type="checkbox" name="remember" id="remember">
        <span></span>
        Keep me logged in
      </label>
      <a href="#">Forgot password</a>
    </div>
    <div class="input">
      <input type="submit" class="btn primary" value="LOGIN" />
    </div>
    <p>
      Don't Have An Account? <a href="#">SignUp</a>
    </p>
  </form>
</body>

</html>