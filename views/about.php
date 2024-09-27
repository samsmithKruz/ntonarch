<?php
$header_include = "<link rel=\"stylesheet\" href=\"/public/css/about.css\" />";
$title = "Ntornach :: About us";
$page = "about";
require_once __DIR__ . "/inc/Header.php";

?>

<section id="banner" class="tilt-container">
  <div class="container tilt-item" style="background-image:url('/public/assets/discover.jpg');background-attachment:fixed;">
    <h1>Discover Ntonarch</h1>
  </div>
</section>
<main class="container">
  <section id="introduction">
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
  <section id="team" class="container">
    <h4>Our Team of Innovators</h4>
    <h2>Meet the Team</h2>
    <p>
      At Ntonarch, our success is driven by a team of dedicated and talented professionals who are passionate about making a difference. Each member of our team brings a unique set of skills and experiences, contributing to our mission of innovation and excellence. Get to know the individuals who make Ntonarch a leader in our industry.
    </p>
    <div class="cards">
      <div class="card">
        <img src="./assets/about.png" alt="">
        <h5>(CEO)</h5>
        <h3>Mr. John Doe</h3>
        <h5>example@gmail.com</h5>
        <h5>(0)903 803 6844</h5>
      </div>
      <div class="card">
        <img src="./assets/about.png" alt="">
        <h5>(CEO)</h5>
        <h3>Mr. John Doe</h3>
        <h5>example@gmail.com</h5>
        <h5>(0)903 803 6844</h5>
      </div>
      <div class="card">
        <img src="./assets/about.png" alt="">
        <h5>(CEO)</h5>
        <h3>Mr. John Doe</h3>
        <h5>example@gmail.com</h5>
        <h5>(0)903 803 6844</h5>
      </div>
    </div>

  </section>
</main>

<?php
$footer_include = "<script src=\"/public/js/tilt.js\"></script>";
require_once __DIR__ . "/inc/Footer.php";
?>