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
        <style>
            .service-single-content img {
                width: 100%;
                height: 470px;
                object-fit: cover;
            }
        </style>
        <div class="row">
            <div class="col col-md-9 col-md-push-3">
                <div class="service-single-content">
                    <div class="service-single-img-holder">
                        <img src="/public/assets/images/services/img-6.jpg" alt="Information Technology">
                    </div>
                    <h2>Information Technology</h2>
                    <p>Our Information Technology services are designed to empower businesses through cutting-edge
                        solutions that enhance operational efficiency and drive digital transformation. From cloud
                        computing to cybersecurity and software development, we offer comprehensive IT services that
                        cater to businesses of all sizes. We help organizations leverage the power of technology to stay
                        ahead in an increasingly digital world.</p>
                    <blockquote>
                        <p>"Innovating IT solutions to drive success and enhance business capabilities."</p>
                        <span>- Samuel Benny</span>
                    </blockquote>
                    <div class="clearfix benefit">
                        <div class="img-holder">
                            <img src="/public/assets/images/services/benefit.jpg" alt="Benefits of IT services">
                        </div>
                        <div class="details">
                            <h3>Key Benefits</h3>
                            <ul>
                                <li><span>1</span> Scalable cloud solutions to meet business needs</li>
                                <li><span>2</span> Robust cybersecurity protocols to protect your data</li>
                                <li><span>3</span> Custom software development for enhanced business processes</li>
                            </ul>
                            <p>Our IT solutions are designed to help businesses improve their productivity and
                                streamline operations. By implementing modern technologies, we provide businesses with
                                the tools needed to increase efficiency, reduce costs, and ensure data security.</p>
                        </div>
                    </div>
                    <div class="research">
                        <h3>Research & Development</h3>
                        <p>We continuously invest in R&D to stay ahead of the latest technological trends. Our team
                            explores advancements in artificial intelligence, machine learning, blockchain, and other
                            emerging technologies to deliver state-of-the-art solutions to our clients. We focus on
                            helping businesses adopt innovative IT practices that drive growth and operational
                            excellence.</p>
                    </div>
                    <div class="problem-solution-section">
                        <div class="panel-group theme-accordion-s2" id="accordion">
                            <div class="panel panel-default active-bg-color">
                                <div class="panel-heading">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse-1"
                                        aria-expanded="true">What IT challenges do we solve?</a>
                                </div>
                                <div id="collapse-1" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <p>Our IT services address the common challenges faced by businesses, such as
                                            outdated systems, security vulnerabilities, inefficiencies in operations,
                                            and the need for scalable infrastructure. We provide solutions that
                                            modernize IT systems, protect sensitive data, and improve the overall
                                            digital experience.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapse-2">How do we improve IT operations?</a>
                                </div>
                                <div id="collapse-2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Through automation, cloud technologies, and software development, we help
                                            businesses streamline their IT operations. By integrating intelligent
                                            systems and improving workflows, we ensure that IT infrastructure supports
                                            business goals efficiently and securely.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapse-3">Are our clients satisfied with our IT services?</a>
                                </div>
                                <div id="collapse-3" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Our clients benefit from increased business productivity, robust security
                                            systems, and tailored IT solutions that align with their strategic
                                            objectives. With a focus on customer satisfaction, we have a strong track
                                            record of helping businesses enhance their IT capabilities and achieve
                                            sustainable growth.</p>
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
                            <li><a href="/services/farm">Agriculture & Farming</a></li>
                            <li class="current"><a href="/services/it">Information Technologs</a></li>
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