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
                        <img src="/public/assets/images/services/img-7.jpg" alt="Web Development">
                    </div>
                    <h2>Web Development</h2>
                    <p>Our web development services are designed to create innovative, responsive, and user-friendly
                        websites that help businesses establish a strong online presence. Whether you're looking for a
                        simple website, an e-commerce platform, or a complex web application, we offer end-to-end
                        solutions tailored to meet your specific needs. We use the latest technologies to build
                        scalable, secure, and high-performance websites that engage users and drive results.</p>
                    <blockquote>
                        <p>"Crafting web experiences that not only look great but also deliver exceptional
                            functionality."</p>
                        <span>- Samuel Benny</span>
                    </blockquote>
                    <div class="clearfix benefit">
                        <div class="img-holder">
                            <img src="/public/assets/images/services/benefit.jpg" alt="Web Development Benefits">
                        </div>
                        <div class="details">
                            <h3>Key Benefits</h3>
                            <ul>
                                <li><span>1</span> Responsive design that adapts to all screen sizes</li>
                                <li><span>2</span> Custom web applications tailored to business needs</li>
                                <li><span>3</span> Optimized for fast loading speeds and SEO</li>
                            </ul>
                            <p>We focus on building websites that are not only visually appealing but also functional
                                and optimized for performance. Our solutions ensure that your website loads quickly,
                                provides a seamless user experience, and ranks well on search engines.</p>
                        </div>
                    </div>
                    <div class="research">
                        <h3>Research & Development</h3>
                        <p>In the ever-evolving field of web development, we continuously explore the latest frameworks,
                            tools, and best practices to provide our clients with cutting-edge web solutions. From
                            front-end technologies like React and Vue.js to back-end frameworks such as Node.js and
                            Laravel, we ensure that your website is built using the most efficient and modern
                            technologies available.</p>
                    </div>
                    <div class="problem-solution-section">
                        <div class="panel-group theme-accordion-s2" id="accordion">
                            <div class="panel panel-default active-bg-color">
                                <div class="panel-heading">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse-1"
                                        aria-expanded="true">What web development challenges do we solve?</a>
                                </div>
                                <div id="collapse-1" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <p>We solve common challenges in web development such as slow loading times,
                                            poor mobile responsiveness, security vulnerabilities, and inefficient
                                            content management. Our goal is to build websites that are fast, secure, and
                                            easy to manage, ensuring a seamless experience for both users and
                                            administrators.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapse-2">How do we enhance web functionality?</a>
                                </div>
                                <div id="collapse-2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>We enhance web functionality by implementing custom features such as content
                                            management systems (CMS), e-commerce integration, advanced forms, and
                                            interactive elements. Our team works closely with clients to understand
                                            their specific needs and develop features that improve the overall user
                                            experience and operational efficiency.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapse-3">Are our clients satisfied with our web development
                                        services?</a>
                                </div>
                                <div id="collapse-3" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Our clients benefit from a strong, user-friendly online presence that helps
                                            them achieve their business goals. Whether it’s increasing traffic,
                                            improving engagement, or enhancing conversions, our websites are designed to
                                            meet the unique needs of each client and ensure a satisfying digital
                                            experience.</p>
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
                            <li><a href="/services/it">Information Technology</a></li>
                            <li class="current">
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