<?php
// $header_include = "<link rel=\"stylesheet\" href=\"/public/css/index.css\" />";
$title = "Welcome to Ntornarch";
$page = "index";

require_once __DIR__ . "/inc/Header.php";
require_once __DIR__ . "/inc/nav.php"; ?>

<!-- start of hero -->
<section class="hero-slider hero-style-2">
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="slide-inner slide-bg-image" data-background="/public/assets/images/slider/slide-1.jpg">
          <div class="overlay"
            style="position: absolute; top: 0;left:0; width:100%; height:100%; background-color:#4e1d066f; mix-blend-mode:multiply;">
          </div>
          <div class="container">
            <div data-swiper-parallax="300" class="slide-title">
              <h2><span>Welcome to Ntonarch </span> <br>A Hub of Innovation</h2>
            </div>
            <div data-swiper-parallax="400" class="slide-text">
              <p>Ntonarch is more than just a brand; it’s a hub where engineering, technology, and agriculture converge
                to shape a sustainable and innovative future. Join us on a journey to excellence across diverse
                industries.</p>
            </div>
            <div class="clearfix"></div>
            <div data-swiper-parallax="500" class="slide-btns">
              <a href="#" class="theme-btn">Explore Our Vision</a>
              <a href="#" class="theme-btn-s2">Learn About Ntonarch</a>
            </div>
          </div>
        </div> <!-- end slide-inner -->
      </div> <!-- end swiper-slide -->

      <div class="swiper-slide">
        <div class="slide-inner slide-bg-image" data-background="/public/assets/images/slider/slide-2.jpg">
          <div class="overlay"
            style="position: absolute; top: 0;left:0; width:100%; height:100%; background-color:#4e1d066f; mix-blend-mode:multiply;">
          </div>
          <div class="container">
            <div data-swiper-parallax="300" class="slide-title">
              <h2><span>A Hub </span> of Services </h2>
            </div>
            <div data-swiper-parallax="400" class="slide-text">
              <p>At Ntonarch, we bring together unmatched expertise in engineering, advanced technology solutions, and
                sustainable agricultural practices to drive impactful change. Every service we provide is crafted with
                innovation and precision.</p>
            </div>
            <div class="clearfix"></div>
            <div data-swiper-parallax="500" class="slide-btns">
              <a href="#" class="theme-btn">Our Services</a>
              <a href="#" class="theme-btn-s2">Join the Ntonarch Family</a>
            </div>
          </div>
        </div> <!-- end slide-inner -->
      </div> <!-- end swiper-slide -->

      <div class="swiper-slide">
        <div class="slide-inner slide-bg-image" data-background="/public/assets/images/slider/slide-3.jpg">
          <div class="overlay"
            style="position: absolute; top: 0;left:0; width:100%; height:100%; background-color:#4e1d066f; mix-blend-mode:multiply;">
          </div>
          <div class="container">
            <div data-swiper-parallax="300" class="slide-title">
              <h2><span>Empowering a Future </span> of Possibilities</h2>
            </div>
            <div data-swiper-parallax="400" class="slide-text">
              <p>Ntonarch is your one-stop hub for all your needs, from groundbreaking engineering projects to digital
                transformation and farm-to-table agricultural solutions. Together, we create opportunities and transform
                lives.</p>
            </div>
            <div class="clearfix"></div>
            <div data-swiper-parallax="500" class="slide-btns">
              <a href="#" class="theme-btn">Discover What We Do</a>
              <a href="#" class="theme-btn-s2">Contact us</a>
            </div>
          </div>
        </div> <!-- end slide-inner -->
      </div><!-- end swiper-slide -->
    </div>
    <!-- end swiper-wrapper -->

    <!-- swipper controls -->
    <div class="swiper-pagination"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
</section>
<!-- end of hero slider -->
<br><br><br><br>
<!-- start about-us-section-s2 -->
<section class="about-us-section-s2 section-padding p-t-0">
  <div class="container">
    <div class="row">
      <div class="col col-md-5">
        <div class="img-holder about-image">
          <img src="/public/assets/images/about-us.jpg" style="height: 600px; width: 100%; object-fit:cover;" alt>
        </div>
      </div>
      <div class="col col-md-7">
        <div class="about-details">
          <div class="section-title">
            <span>About Us</span>
            <h2>The Most Modern & Versatile <span>Innovation Hub in the World</span></h2>
          </div>
          <div class="details">
            <p>At <strong>Ntonarch</strong>, we unite diverse industries under one hub—engineering, technology,
              agriculture, and more. From groundbreaking engineering solutions to sustainable agricultural practices, we
              redefine excellence and innovation to meet global needs.</p>
            <ul>
              <li><i class="ti-arrow-circle-right"></i> Cutting-edge engineering for industrial growth</li>
              <li><i class="ti-arrow-circle-right"></i> Advanced technological solutions driving transformation</li>
              <li><i class="ti-arrow-circle-right"></i> Sustainable agricultural practices for a better future</li>
              <li><i class="ti-arrow-circle-right"></i> Comprehensive services tailored to every industry</li>
            </ul>
          </div>
          <div class="ceo-quote">
            <blockquote>
              "Ntonarch is not just a hub; it's a vision for a world driven by innovation, sustainability, and
              excellence."
              <span>- Samuel Benny (CEO of Ntonarch)</span>
            </blockquote>
          </div>

        </div>
      </div>
    </div>
  </div> <!-- end container -->
</section>
<!-- end about-us-section-s2 -->

<!-- start services-section-s2 -->
<section class="services-section-s2 section-padding">
  <div class="container">
    <div class="row">
      <div class="col col-lg-4 col-lg-offset-4 col-sm-6 col-sm-offset-3">
        <div class="section-title-s4">
          <span>Our Hub</span>
          <h2>The Best Services <span>we provide</span></h2>
        </div>
      </div>
    </div>
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
              <h3><a href="#">Blog & Media</a></h3>
              <p>Engaging content and media resources to inform, educate, and inspire our audience.</p>
            </div>
          </div>

          <div class="grid">
            <div class="img-holder">
              <img src="/public/assets/images/services/img-2.jpg" alt="Agriculture">
            </div>
            <div class="details">
              <i class="fi flaticon-plant"></i>
              <h3><a href="#">Agriculture</a></h3>
              <p>Advancing sustainable farming practices to empower communities and ensure food security.</p>
            </div>
          </div>

          <div class="grid">
            <div class="img-holder">
              <img src="/public/assets/images/services/img-3.jpg" alt="Farm Management">
            </div>
            <div class="details">
              <i class="fi flaticon-farm"></i>
              <h3><a href="#">Farm Management</a></h3>
              <p>Streamlining farming operations with innovative techniques and technologies.</p>
            </div>
          </div>

          <div class="grid">
            <div class="img-holder">
              <img src="/public/assets/images/services/img-4.jpg" alt="Engineering & Construction">
            </div>
            <div class="details">
              <i class="fi flaticon-construction"></i>
              <h3><a href="#">Engineering & Construction</a></h3>
              <p>Delivering top-notch engineering and construction solutions for modern infrastructure.</p>
            </div>
          </div>

          <div class="grid">
            <div class="img-holder">
              <img src="/public/assets/images/services/img-5.jpg" alt="Daily Motivation">
            </div>
            <div class="details">
              <i class="fi flaticon-motivation"></i>
              <h3><a href="#">Daily Motivation</a></h3>
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
              <h3><a href="#">Information Technology</a></h3>
              <p>Transforming businesses through innovative IT solutions and cutting-edge technology.</p>
            </div>
          </div>

          <div class="grid">
            <div class="img-holder">
              <img src="/public/assets/images/services/img-7.jpg" alt="Web Development">
            </div>
            <div class="details">
              <i class="fi flaticon-web"></i>
              <h3><a href="#">Web Development</a></h3>
              <p>Building responsive, scalable, and secure websites to enhance online presence and user experience.</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div> <!-- end container -->
</section>
<!-- end services-section-s2 -->
<!-- start contact-section -->
<section class="contact-section section-padding">
  <div class="container">
    <div class="row">
      <div class="col col-md-6">
        <div class="left-col">
          <div class="img-holder">
            <img src="/public/assets/images/contact-us.jpg" style="width:100%; height:540px; object-fit:cover;" alt>
          </div>
        </div>
      </div>
      <div class="col col-md-6">
        <div class="contact-form">
          <div class="section-title">
            <span>Contact us</span>
            <h2>You can contact us, <span>if you have any query</span></h2>
          </div>
          <form method="post" action="/contact" class="contact-validation-active" id="contact-form-main">
            <div>
              <input type="text" class="form-control" name="name" id="name" placeholder="Name*">
            </div>
            <div>
              <input type="email" class="form-control" name="email" id="email" placeholder="Email*">
            </div>
            <div>
              <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone*">
            </div>
            <div class="fullwidth">
              <textarea class="form-control" name="note" id="note" placeholder="Case Description..."></textarea>
            </div>
            <div class="submit-area">
              <button type="submit" class="submit-btn">Submit Now</button>
              <div id="loader">
                <i class="ti-reload"></i>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div> <!-- end container -->
</section>
<!-- end contact-section -->

<!-- start team-section -->
<section class="team-section section-padding p-t-0">
  <div class="container">
    <div class="row">
      <div class="col col-lg-4 col-lg-offset-4 col-sm-6 col-sm-offset-3">
        <div class="section-title-s4">
          <span>Members</span>
          <h2>Our Dedicated Team <span>For your service</span></h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col col-xs-12">
        <style>
        </style>
        <div class="team-grids">
          <div class="grid">
            <div class="img-social">
              <div class="img-holder">
                <img src="/public/assets/images/team/img-1.jpg" alt>
              </div>
              <div class="social">
                <ul>
                  <li><a href="#"><i class="ti-facebook"></i></a></li>
                  <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                  <li><a href="#"><i class="ti-linkedin"></i></a></li>
                  <li><a href="#"><i class="ti-pinterest"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="details">
              <h3>Danial Jain</h3>
              <span>Mechanical Engineering</span>
            </div>
          </div>
          <div class="grid">
            <div class="img-social">
              <div class="img-holder">
                <img src="/public/assets/images/team/img-2.jpg" alt>
              </div>
              <div class="social">
                <ul>
                  <li><a href="#"><i class="ti-facebook"></i></a></li>
                  <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                  <li><a href="#"><i class="ti-linkedin"></i></a></li>
                  <li><a href="#"><i class="ti-pinterest"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="details">
              <h3>Jonathon Bill</h3>
              <span>Site Manager</span>
            </div>
          </div>
          <div class="grid">
            <div class="img-social">
              <div class="img-holder">
                <img src="/public/assets/images/team/img-3.jpg" alt>
              </div>
              <div class="social">
                <ul>
                  <li><a href="#"><i class="ti-facebook"></i></a></li>
                  <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                  <li><a href="#"><i class="ti-linkedin"></i></a></li>
                  <li><a href="#"><i class="ti-pinterest"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="details">
              <h3>Gotalon Simrol</h3>
              <span>Testing Manager</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> <!-- end container -->
</section>
<!-- end team-section -->
<!-- start partners-section -->
<section class="partners-section" style="display:none;">
  <h2 class="hidden">Partners</h2>
  <div class="container">
    <div class="row">
      <div class="col col-xs-12">
        <div class="partner-grids partners-slider">
          <div class="grid">
            <img src="/public/assets/images/partners/img-1.jpg" alt>
          </div>
          <div class="grid">
            <img src="/public/assets/images/partners/img-2.jpg" alt>
          </div>
          <div class="grid">
            <img src="/public/assets/images/partners/img-3.jpg" alt>
          </div>
          <div class="grid">
            <img src="/public/assets/images/partners/img-4.jpg" alt>
          </div>
          <div class="grid">
            <img src="/public/assets/images/partners/img-5.jpg" alt>
          </div>
        </div>
      </div>
    </div>
    <div class="separator"></div>
  </div> <!-- end container -->
</section>
<!-- end partners-section -->
<!-- start blog-section -->
<section class="blog-section section-padding">
  <div class="container">
    <div class="row">
      <div class="col col-md-4">
        <div class="section-title">
          <span>Latest Updates</span>
          <h2>Stay informed with <span>our blog</span></h2>
        </div>
      </div>
      <div class="col col-md-5">
        <div class="title-text">
          <p>Stay informed and inspired with the latest updates on agriculture, engineering, construction, and daily
            motivation. Empower your journey with stories that educate and elevate!</p>
        </div>
      </div>
      <div class="col col-md-3">
        <div class="view-all">
          <a href="/blog" class="theme-btn">Explore All Blogs</a>
        </div>
      </div>

    </div>
    <div class="row">
      <div class="col col-xs-12">
        <style>
          .blog-grids img {
            height: 195px;
            width: 100%;
            object-fit: cover;
            object-position: center;
          }
        </style>
        <div class="blog-grids">
          <?php foreach ($blogs as $blog): ?>
            <div class="grid">
              <div class="entry-media">
                <img src="/public/uploads/<?= htmlspecialchars($blog->thumbnail); ?>"
                  alt="<?= htmlspecialchars($blog->title); ?>">
              </div>
              <div class="author">
                <a href="/author/<?= $blog->author_id ?>"><?= htmlspecialchars($blog->fullname); ?></a>
              </div>
              <div class="details">
                <h3 class="truncate head">
                  <a href="/blog/show/<?= $blog->id ?>">
                    <?= htmlspecialchars($blog->title); ?>
                  </a>
                </h3>
                <p class="date"><?= (new DateTime($blog->created_at))->format('d.m.y'); ?></p>
                <p class="truncate" style="--line: 3;">
                  <?= htmlspecialchars(getFirstParagraphContent($blog->content)); ?>
                </p>
                <a href="/blog/show/<?= $blog->id ?>" class="more">Read more</a>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>

  </div> <!-- end container -->
</section>
<!-- end blog-section -->

<?php
$footer_include = "";
require_once __DIR__ . "/inc/Footer.php";
?>