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
                        <img src="/public/assets/images/services/img-4.jpg" alt="Engineering & Construction">
                    </div>
                    <h2>Engineering & Construction</h2>
                    <p>Our Engineering & Construction services are built on a foundation of innovation, precision, and
                        quality. We specialize in designing and executing infrastructure and architectural projects that
                        meet the highest standards, ensuring sustainability, safety, and cost efficiency. From initial
                        planning to project completion, we are dedicated to delivering excellence every step of the way.
                    </p>
                    <blockquote>
                        <p>"Building a better future through innovative engineering and impeccable construction
                            practices."</p>
                        <span>- Samuel Benny</span>
                    </blockquote>
                    <div class="clearfix benefit">
                        <div class="img-holder">
                            <img src="/public/assets/images/services/benefit.jpg" alt="Benefits of our services">
                        </div>
                        <div class="details">
                            <h3>Key Benefits</h3>
                            <ul>
                                <li><span>1</span> Sustainable and eco-friendly construction practices</li>
                                <li><span>2</span> Advanced engineering solutions tailored to client needs</li>
                                <li><span>3</span> On-time project delivery with strict quality control</li>
                            </ul>
                            <p>Our approach combines cutting-edge technology, skilled professionals, and years of
                                expertise to deliver projects that stand the test of time. From residential developments
                                to industrial infrastructures, we ensure precision and excellence in every aspect.</p>
                        </div>
                    </div>
                    <div class="research">
                        <h3>Research & Development</h3>
                        <p>We constantly invest in research to stay at the forefront of the engineering and construction
                            industry. By adopting modern technologies such as 3D modeling, advanced materials, and smart
                            construction techniques, we bring efficiency and innovation to our projects.</p>
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
                                        <p>We tackle complex engineering and construction challenges, including tight
                                            timelines, strict budget constraints, and the need for sustainable
                                            solutions. Our team excels in delivering innovative designs and seamless
                                            execution, even in the most demanding environments.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapse-2">How do we ensure project success?</a>
                                </div>
                                <div id="collapse-2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Our systematic approach includes meticulous planning, transparent
                                            communication, and rigorous quality assurance processes. We collaborate
                                            closely with clients to understand their vision and deliver results that
                                            exceed expectations.</p>
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
                                        <p>Client satisfaction is at the core of our business. With a proven track
                                            record of successful projects and glowing testimonials, we take pride in
                                            building lasting relationships through exceptional service and outstanding
                                            results.</p>
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
                            <li class="current"><a href="/services/engineering">Engineering & Constructions</a></li>
                            <li><a href="/services/farm">Agriculture & Farming</a></li>
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