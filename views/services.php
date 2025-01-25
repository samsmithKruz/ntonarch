<?php
// $header_include = "<link rel=\"stylesheet\" href=\"/public/css/about.css\" />";
$title = "Contact us :: Ntornarch";
$page = "contact";

require_once __DIR__ . "/inc/Header.php";
require_once __DIR__ . "/inc/nav.php";
?>

<section class="page-title"
  style="background-image: url('/public/assets/images/services/img-0.jpg'); background-attachment: fixed;">
  <div class="overlay"
    style="position: absolute; top: 0;left:0; width:100%; height:100%; background-color:#4e1d066f; mix-blend-mode:multiply;">
  </div>
  <div class="container">
    <div class="row">
      <div class="col col-xs-12">
        <h2>Services</h2>
        <ol class="breadcrumb">
          <li><a href="index.html">Home</a></li>
          <li>Services</li>
        </ol>
      </div>
    </div> <!-- end row -->
  </div> <!-- end container -->
</section>
<!-- end page-title -->

<!-- start services-section-s2 -->
<section class="services-section-s2 section-padding">
  <div class="container">
    <style>
      .service-grids img {
        height: 180px;
        width: 100%;
        object-fit: cover;
        object-position: center;
      }
    </style>
    <div class="row">
      <div class="col col-xs-12">
        <div class="service-grids">
          <div class="grid">
            <div class="img-holder">
              <img src="/public/assets/images/services/img-1.jpg" alt="Blog & Media">
            </div>
            <div class="details">
              <i class="fi flaticon-blogging"></i>
              <h3><a href="/blog">Blog & Media</a></h3>
              <p>Engaging content and media resources to inform, educate, and inspire our audience.</p>
            </div>
          </div>

          <div class="grid">
            <div class="img-holder">
              <img src="/public/assets/images/services/img-2.jpg" alt="Agriculture">
            </div>
            <div class="details">
              <i class="fi flaticon-plant"></i>
              <h3><a href="/services/farm">Agriculture</a></h3>
              <p>Advancing sustainable farming practices to empower communities and ensure food security.</p>
            </div>
          </div>

          <div class="grid">
            <div class="img-holder">
              <img src="/public/assets/images/services/img-3.jpg" alt="Farm Management">
            </div>
            <div class="details">
              <i class="fi flaticon-farm"></i>
              <h3><a href="/services/farm">Farm Management</a></h3>
              <p>Streamlining farming operations with innovative techniques and technologies.</p>
            </div>
          </div>

          <div class="grid">
            <div class="img-holder">
              <img src="/public/assets/images/services/img-4.jpg" alt="Engineering & Construction">
            </div>
            <div class="details">
              <i class="fi flaticon-construction"></i>
              <h3><a href="/services/engineering">Engineering & Construction</a></h3>
              <p>Delivering top-notch engineering and construction solutions for modern infrastructure.</p>
            </div>
          </div>

          <div class="grid">
            <div class="img-holder">
              <img src="/public/assets/images/services/img-5.jpg" alt="Daily Motivation">
            </div>
            <div class="details">
              <i class="fi flaticon-motivation"></i>
              <h3><a href="/motivation">Daily Motivation</a></h3>
              <p>Inspiring personal growth and productivity through impactful motivational content.</p>
            </div>
          </div>

          <!-- Adding new services -->

          <div class="grid">
            <div class="img-holder">
              <img src="/public/assets/images/services/img-6.jpg" alt="Information Technology">
            </div>
            <div class="details">
              <i class="fi flaticon-computer"></i>
              <h3><a href="/services/it">Information Technology</a></h3>
              <p>Transforming businesses through innovative IT solutions and cutting-edge technology.</p>
            </div>
          </div>

          <div class="grid">
            <div class="img-holder">
              <img src="/public/assets/images/services/img-7.jpg" alt="Web Development">
            </div>
            <div class="details">
              <i class="fi flaticon-web"></i>
              <h3><a href="/services/web_development">Web Development</a></h3>
              <p>Building responsive, scalable, and secure websites to enhance online presence and user experience.</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div> <!-- end container -->
</section>
<!-- end services-section-s2 -->
<?php
$footer_include = "";
require_once __DIR__ . "/inc/Footer.php";
?>