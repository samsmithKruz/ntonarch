<?php
$header_include = "<link rel=\"stylesheet\" href=\"/public/css/index.css\" />";
$title = "Welcome to Ntornarch";
$page = "index";

require_once __DIR__ . "/inc/Header.php";

?>

<div id="engineering">

</div>
<div id="hero">
    <?php require_once __DIR__ . "/inc/nav.php"; ?>
    <section class="hero">
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="--bg: url('/public/assets/equip.webp');">
                <div class="overlay"></div>
                <div class="container">
                    <h2>
                        Welcome to <br />
                        <span>Ntonarch Engineering</span>
                    </h2>
                    <p>
                        Engineering Solutions That Shape the Future of Infrastructure
                    </p>
                    <a href="#" class="btn secondary">Discover</a>
                </div>
            </div>
            <div class="swiper-slide" style="--bg: url('/public/assets/choose.webp');">
                <div class="overlay"></div>

            </div>
    </section>
</div>
<main>
    <section id="about-container" class="container">
        <div class="main">
            <h3>About Ntonarch Engineering</h3>
            <p>
                Ntonarch Engineering (NTE) is a division of Ntonarch, distinguished for its comprehensive expertise in civil, structural, and electrical electronics engineering. Our multidisciplinary approach enables us to deliver solutions that exceed client expectations across various engineering fields.
            </p>
            <!-- <a href="#" class="btn primary">About Us</a> -->
        </div>
        <div class="cards">
            <div>
                <h4>Civil Engineering</h4>
                <p>Specializing in architectural design, road and bridge construction, and building development</p>
            </div>
            <div>
                <h4>Electrical and Electronics Engineering</h4>
                <p>Offering services such as installing cutting-edge equipment, renewable energy solutions, including solar power systems, and designing automatic switches and solar traffic lights.</p>
            </div>
            <div>
                <h4>Project Management</h4>
                <p>Experienced project managers leading each endeavor with precision to ensure successful outcomes and client satisfaction.</p>
            </div>
        </div>
        <div class="more-details">

        </div>
    </section>
    <section id="services">
        <div class="container">
            <div class="service">
                <h3>Electrical & Renewable Energy Solutions</h3>
                <span class="service-headline"><b>Sustainable Innovation in Electrical Engineering</b></span>
                <div class="t">
                    <p>
                        Ntonarch Engineering is at the forefront of renewable energy solutions, including solar power systems. We are experts in designing and constructing electrical transmission lines up to 12KVA, automatic switches, and solar-powered traffic lights—making infrastructure safer and more efficient.
                    </p>
                    <a href="#" class="btn primary">Explore Services</a>
                </div>
            </div>
            <div class="service">
                <h3>Commitment to Quality
                </h3>
                <span class="service-headline"><b>Delivering Excellence in Every Project</b></span>
                <div class="t">
                    <p>
                        At Ntonarch Engineering, we pride ourselves on our technical prowess and commitment to delivering high-quality results. Our project managers oversee every phase of development, from meticulous design to precise construction and maintenance, ensuring projects are executed flawlessly.
                    </p>
                    <!-- <a href="#" class="btn primary">Explore Services</a> -->
                </div>
            </div>
            <div class="service">
                <h3>Our Professional Standards</h3>
                <span class="service-headline"><b>Registered with COREN for Excellence</b></span>
                <div class="t">
                    <p>
                        Ntonarch Engineering is registered with the Council for the Regulation of Engineers in Nigeria (COREN), reaffirming our dedication to professional standards, ethics, and quality assurance in all our engineering services.
                    </p>
                    <!-- <a href="#" class="btn primary">Explore Services</a> -->
                </div>
            </div>
            <div class="service">
                <h3>Research & Development</h3>
                <span class="service-headline"><b>Innovating for the Future</b></span>
                <div class="t">
                    <p>
                        Central to our success is our commitment to research and development. With a focus on both soft and hard technical skills, Ntonarch Engineering stays ahead of industry trends, delivering innovative solutions that meet the evolving needs of our clients and communities.
                    </p>
                    <!-- <a href="#" class="btn primary">Explore Services</a> -->
                </div>
            </div>
        </div>
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
    <section id="choose" class="container">
        <h3>Why Choose Ntonarch Engineering?</h3>
        <h4>Excellence, Innovation, and Reliability</h4>
        <p>
            Whether you are planning a large infrastructure project or require cutting-edge electrical solutions, Ntonarch Engineering stands ready to provide innovative, sustainable, and reliable engineering services tailored to your needs.
        </p>

    </section>
    <section id="service-cta" class="container">
        <h3>Let's Build the Future Together</h3>
        <p>Ready to get started on your next project? Contact us today to explore how Ntonarch Engineering can bring your vision to life.</p>
        <a href="#" class="btn primary">Get in Touch </a>
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