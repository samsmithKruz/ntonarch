<?php
// $header_include = "<link rel=\"stylesheet\" href=\"/public/css/about.css\" />";
$title = "Contact us :: Ntornarch";
$page = "contact";

require_once __DIR__ . "/inc/Header.php";
require_once __DIR__ . "/inc/nav.php";
?>

<section class="page-title"
  style="background-image: url('/public/assets/images/contact-us.jpg'); background-attachment: fixed;">
  <div class="overlay"
    style="position: absolute; top: 0;left:0; width:100%; height:100%; background-color:#4e1d066f; mix-blend-mode:multiply;">
  </div>
  <div class="container">
    <div class="row">
      <div class="col col-xs-12">
        <h2>Contact us</h2>
        <ol class="breadcrumb">
          <li><a href="index.html">Home</a></li>
          <li>Contact us</li>
        </ol>
      </div>
    </div> <!-- end row -->
  </div> <!-- end container -->
</section>
<!-- end page-title -->

<!-- start contact-pg-section -->
<section class="contact-pg-section section-padding">
  <div class="container">
    <div class="row">
      <div class="col col-lg-5 col-md-6 col-sm-8">
        <div class="section-title">
          <span>Contact With Us</span>
          <h2>You can contact with us <span>if you have any query</span></h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col col-md-7">
        <form method="post" class="contact-validation-active" id="contact-form-main">
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
            <button type="submit" class="theme-btn">Submit Now</button>
            <div id="loader">
              <i class="ti-reload"></i>
            </div>
          </div>
        </form>
      </div>

      <div class="col col-md-5">
        <div class="office-info">
          <div>
            <h3>San Francisco</h3>
            <ul>
              <li><i class="ti-location-pin"></i> 22/1 nogor stree road bigan, usa</li>
              <li><i class="ti-mobile"></i> 64823425, 316574651256</li>
              <li><i class="ti-email"></i> deom@email.com</li>
            </ul>
          </div>
          <div>
            <h3>Austria Office</h3>
            <ul>
              <li><i class="ti-location-pin"></i> 22/1 nogor stree road bigan, usa</li>
              <li><i class="ti-mobile"></i> 64823425, 316574651256</li>
              <li><i class="ti-email"></i> deom@email.com</li>
            </ul>
          </div>
          <div>
            <h3>London</h3>
            <ul>
              <li><i class="ti-location-pin"></i> 22/1 nogor stree road bigan, usa</li>
              <li><i class="ti-mobile"></i> 64823425, 316574651256</li>
              <li><i class="ti-email"></i> deom@email.com</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div> <!-- end container -->
</section>
<!-- end contact-pg-section -->
<?php
$footer_include = "";
require_once __DIR__ . "/inc/Footer.php";
?>