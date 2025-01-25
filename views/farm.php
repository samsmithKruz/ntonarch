<?php
// $header_include = "<link rel=\"stylesheet\" href=\"/public/css/index.css\" />";
$title = "Welcome to Ntornarch";
$page = "index";

require_once __DIR__ . "/inc/Header.php";
require_once __DIR__ . "/inc/nav.php"; ?>

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

<section class="service-single-section section-padding">
    <div class="container">
        <div class="row">
            <style>
                .service-single-content img {
                    width: 100%;
                    height: 470px;
                    object-fit: cover;
                }
            </style>
            <div class="col col-md-9 col-md-push-3">
                <div class="service-single-content">
                    <div class="service-single-img-holder">
                        <img src="/public/assets/images/services/img-3.jpg" alt="Agriculture & Farming">
                    </div>
                    <h2>Agriculture & Farming</h2>
                    <p>Our Agriculture & Farming services are dedicated to enhancing food security and promoting
                        sustainable farming practices. With a focus on innovative agricultural solutions, we provide
                        comprehensive support to farmers, from crop management to resource optimization, ensuring that
                        agriculture thrives for generations to come. We leverage technology, modern farming methods, and
                        sustainable practices to increase productivity and efficiency.</p>
                    <blockquote>
                        <p>"Revolutionizing agriculture for a sustainable and prosperous future."</p>
                        <span>- Samuel Benny</span>
                    </blockquote>
                    <div class="clearfix benefit">
                        <div class="img-holder">
                            <img src="/public/assets/images/services/benefit.jpg" alt="Benefits of our services">
                        </div>
                        <div class="details">
                            <h3>Key Benefits</h3>
                            <ul>
                                <li><span>1</span> Sustainable farming methods that protect the environment</li>
                                <li><span>2</span> Advanced agricultural technology for improved crop yield</li>
                                <li><span>3</span> Expert consultation on farm management and growth optimization</li>
                            </ul>
                            <p>Our team brings a wealth of experience in agriculture, providing tailored solutions to
                                meet the unique needs of each farm. We focus on improving soil health, reducing water
                                waste, and introducing cutting-edge technologies that increase yield and efficiency.</p>
                        </div>
                    </div>
                    <div class="research">
                        <h3>Research & Development</h3>
                        <p>We continuously research and adopt the latest agricultural innovations, including precision
                            farming, climate-smart practices, and crop breeding technologies. Our goal is to provide
                            farmers with the tools they need to overcome challenges like climate change, resource
                            scarcity, and fluctuating market demands.</p>
                    </div>
                    <div class="problem-solution-section">
                        <div class="panel-group theme-accordion-s2" id="accordion">
                            <div class="panel panel-default active-bg-color">
                                <div class="panel-heading">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse-1"
                                        aria-expanded="true">What challenges do we solve?</a>
                                </div>
                                <div id="collapse-1" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <p>We address critical challenges in agriculture such as soil degradation, water
                                            scarcity, pest control, and climate unpredictability. Our solutions are
                                            designed to enhance productivity while ensuring long-term sustainability for
                                            farmers and their communities.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapse-2">How do we improve farming outcomes?</a>
                                </div>
                                <div id="collapse-2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Through a combination of innovative farming techniques, advanced equipment,
                                            and personalized consulting, we optimize farming practices for higher
                                            yields, improved soil health, and better water management. Our solutions
                                            help farmers enhance productivity with minimal environmental impact.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapse-3">Are our clients satisfied?</a>
                                </div>
                                <div id="collapse-3" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Our clients benefit from improved crop yield, healthier soil, and optimized
                                            farm management practices. With a track record of success stories, our
                                            clients consistently report better outcomes and a more sustainable approach
                                            to farming.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="theme-btn">Get the Service</a>
                </div>

            </div>
            <div class="col col-md-3 col-md-pull-9">
                <div class="service-sidebar">
                    <div class="widget service-list-widget">
                        <ul>
                            <li><a href="/services">All Service</a></li>
                            <li><a href="/services/engineering">Engineering & Constructions</a></li>
                            <li class="current"><a href="/services/farm">Agriculture & Farming</a></li>
                            <li><a href="/services/it">Information Technology</a></li>
                            <li>
                                <a href="/services/web_development">Web Development</a>
                            </li>
                        </ul>
                    </div>
                    <div class="widget contact-widget">
                        <div>
                            <h5>We are industrial <span>Experts</span></h5>
                            <a href="/contact">Contact with us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end row -->
    </div> <!-- end container -->
</section>

<?php
$footer_include = "";
require_once __DIR__ . "/inc/Footer.php";
?>