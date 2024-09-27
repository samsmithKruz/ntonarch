<?php
$header_include = "<link rel=\"stylesheet\" href=\"/public/css/about.css\" />";
$title = "About Ntornarch";
$page = "about";

require_once __DIR__ . "/inc/Header.php";

?>
<div id="hero">
  <?php require_once __DIR__ . "/inc/nav.php"; ?>
  <section class="container tilt-container">
    <div id="banner" class="tilt-item">
      <!-- <h4>About Us</h4> -->
      <h2>Discover Ntonarch</h2>
    </div>
  </section>
</div>
<main>
  <section id="introduction" class="container">
    <h2>Introduction</h2>
    <p>
      Welcome to Ntonarch, where innovation meets excellence. As a leading conglomerate dedicated to shaping the future, we pride ourselves on our commitment to driving positive change across various sectors. Our journey is guided by a passion for leveraging technology, fostering collaboration, and delivering tailored solutions that address today’s challenges and anticipate tomorrow’s needs.
    </p>
    <p>
      At Ntonarch, we understand that the world is constantly evolving, and so are we. Our diverse team of experts brings together a wealth of experience and a shared vision of progress. We operate through multiple specialized hubs, each focusing on delivering exceptional results in their respective fields—from market solutions and media services to engineering excellence and community development.
    </p>
    <h2>Our Mission</h2>
    <p>
      Our mission is to push the boundaries of what’s possible, turning innovative ideas into impactful realities. We strive to be at the forefront of technological advancements, integrating cutting-edge solutions with strategic insights to drive success for our clients and partners. Our approach is deeply rooted in a commitment to excellence, sustainability, and community impact, ensuring that every project we undertake contributes to a brighter, more prosperous future.
    </p>
    <p>
      As you explore our website, you’ll discover how Ntonarch’s hubs collaborate seamlessly to provide comprehensive services that meet diverse needs. Whether you’re looking for advanced market solutions, dynamic media strategies, robust engineering expertise, or meaningful community initiatives, we are here to deliver excellence and make a difference.
    </p>
  </section>
  <section id="blog" class="container">
    <div class="top">
      <h3>Meet The Team</h3>
      <!-- <a href="#" class="btn primary">Visit Blog</a> -->
    </div>
    <div id="cards">
      <div class="card">
        <div class="img">
          <img src="/public/assets/service_man.webp" alt="" />
        </div>
        <a href="#" class="head truncate" style="--line:2;">Mr. John Doe</a>
        <p class="truncate" style="--line:3;">
          Motion Graphics and Animation Design <br>
          (234) 903-803-6844
        </p>

      </div>
      <div class="card">
        <div class="img">
          <img src="/public/assets/service_man.webp" alt="" />
        </div>
        <a href="#" class="head truncate" style="--line:2;">Mr. John Doe</a>
        <p class="truncate" style="--line:3;">
          Motion Graphics and Animation Design <br>
          (234) 903-803-6844
        </p>

      </div>
      <div class="card">
        <div class="img">
          <img src="/public/assets/service_man.webp" alt="" />
        </div>
        <a href="#" class="head truncate" style="--line:2;">Mr. John Doe</a>
        <p class="truncate" style="--line:3;">
          Motion Graphics and Animation Design <br>
          (234) 903-803-6844
        </p>

      </div>
    </div>
    <!-- <a href="#" class="btn primary mobile">Visit Blog</a> -->
  </section>
  <section id="touch">
    <div class="container">
      <h3>Get in Touch with Us Today</h3>
      <p>
        Contact us today to start your journey towards sustainable energy
        solutions with Greener Future. Our team is ready to provide
        personalized support and answer all your questions.
      </p>
      <div>
        <img src="/public/assets/choose.webp" alt="" />
        <form action="">
          <input type="text" placeholder="Name" />
          <input type="text" placeholder="Email" />
          <textarea name="" rows="9" id="" placeholder="Message"></textarea>
          <input type="submit" value="Send Message" />
        </form>
      </div>
    </div>
  </section>
</main>
<?php
$footer_include = "";
require_once __DIR__ . "/inc/Footer.php";
?>