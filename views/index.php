<?php 
$header_include = "<link rel=\"stylesheet\" href=\"/public/css/index.css\" />";
$title = "Ntornach :: Homepage";
$page = "home";
require_once __DIR__."/inc/Header.php"; 

?>
<section id="hero">
    <!-- Slider main container -->
    <div class="swiper container">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div  class="swiper-slide slide1 tilt-container">
                <div class="tilt-item" style="background-image: url('/public/assets/hero1.jpg'); ">
                    <h1>Empowering Change Through Innovation</h1>
                    <p>
                        Innovation is at the heart of Ntonarch’s mission. We harness new
                        ideas and technologies to drive positive change and create
                        lasting impact. Explore how we’re leading with our innovative
                        solutions.
                    </p>
                </div>
            </div>
            <div class="swiper-slide slide2 tilt-container">
                <div class="tilt-item" style="background-image: url('/public/assets/hero2.jpg'); ">
                    <h1>Innovating Today For A Brighter Tomorrow</h1>
                    <p>
                        At Ntonarch, we merge cutting-edge technology with creative
                        solutions to tackle today’s challenges and shape a promising
                        future. Join us in driving progress and creating new
                        opportunities.
                    </p>
                </div>
            </div>
            <div class="swiper-slide slide3 tilt-container">
                <div class="tilt-item" style="background-image: url('/public/assets/hero3.jpg'); ">
                    <h1>Shaping the Future with Every Step</h1>
                    <p>
                        Every step we take at Ntonarch is geared towards building a
                        better tomorrow. Discover how our forward-thinking approach and
                        impactful projects are making a difference.
                    </p>
                </div>
            </div>
        </div>
        <div class="swiper-btns">
            <div class="swiper-button-prev g_icon">play_arrow</div>
            <div class="swiper-button-next g_icon">play_arrow</div>
        </div>
        <!-- If we need pagination -->
        <!-- <div class="swiper-pagination"></div> -->

        <!-- If we need navigation buttons -->

        <!-- If we need scrollbar -->
        <!-- <div class="swiper-scrollbar"></div> -->
    </div>
</section>
<main style="overflow: hidden;">
    <section id="about" class="container">
        <img src="/public/assets/about.jpg" alt="Ntonarch" data-aos="fade-up-right" />
        <div data-aos="fade-up-left">
            <h4>About</h4>
            <h2>Discover Ntonarch</h2>
            <p>
                At Ntonarch, we are committed to redefining the future through
                innovative solutions and collaborative excellence. Our team of
                dedicated professionals blends cutting-edge technology with creative
                problem-solving to deliver exceptional results across various
                sectors. With a focus on driving progress and creating lasting
                impact, we are your partner in building a brighter tomorrow.
            </p>
            <a href="#">See more</a>
        </div>
    </section>
    <section id="mission" class="tilt-container" data-aos="fade-up">
        <div class="container tilt-item">
            <h2>Our Mission</h2>
            <p>
                Our mission is to address today’s challenges with forward-thinking
                solutions, ensuring that every project and initiative we undertake
                contributes to a more promising future.
            </p>
            <p>
                We envision a world where our innovative approach and strategic
                insights lead to transformative change and success, making a
                positive difference in every community we touch.
            </p>
        </div>
    </section>
    <section id="explore" class="container" data-aos="fade-up">
        <h4>Explore Our Hubs</h4>
        <h2>Discover Our Specialized hubs</h2>
        <p>
            Ntonarch operates through several specialized hubs, each dedicated to
            delivering exceptional services in its domain. Here’s a snapshot of
            what each hub offers:
        </p>
        <div class="tags">
            <span data-aos="fade-left" data-aos-delay="0">Media</span>
            <span data-aos="fade-left" data-aos-delay="100">Market</span>
            <span data-aos="fade-left" data-aos-delay="200">Engineering</span>
            <span data-aos="fade-left" data-aos-delay="300">Computer</span>
            <span data-aos="fade-left" data-aos-delay="400">Foundation</span>
        </div>
    </section>
    <section id="team" class="container">
        <h4>Our Team of Innovators</h4>
        <h2>Meet the Team</h2>
        <p>
            At Ntonarch, our success is driven by a team of dedicated and talented
            professionals who are passionate about making a difference. Each
            member of our team brings a unique set of skills and experiences,
            contributing to our mission of innovation and excellence. Get to know
            the individuals who make Ntonarch a leader in our industry.
        </p>
        <div class="cards">
            <div class="card">
                <img src="/public/assets/about.png" alt="" />
                <h5>(CEO)</h5>
                <h3>Mr. John Doe</h3>
                <h5>example@gmail.com</h5>
                <h5>(0)903 803 6844</h5>
            </div>
            <div class="card">
                <img src="/public/assets/about.png" alt="" />
                <h5>(CEO)</h5>
                <h3>Mr. John Doe</h3>
                <h5>example@gmail.com</h5>
                <h5>(0)903 803 6844</h5>
            </div>
            <div class="card">
                <img src="/public/assets/about.png" alt="" />
                <h5>(CEO)</h5>
                <h3>Mr. John Doe</h3>
                <h5>example@gmail.com</h5>
                <h5>(0)903 803 6844</h5>
            </div>
        </div>
    </section>
    <section id="join" class="container" data-aos="zoom-in">
        <h4>Join Us & Support Our Mission</h4>
        <h2>Get Involved with Ntonarch</h2>
        <div class="cards tilt-container">
            <div class="card tilt-item">
                <p>
                    We’re always looking for passionate and skilled individuals to
                    join our dynamic team. If you’re ready to contribute to
                    cutting-edge projects and be a part of a forward-thinking
                    organization, we’d love to hear from you.
                </p>
                <a href="#" class="btn">
                    Explore Career Opportunities
                </a>
            </div>
            <div class="card tilt-item">
                <p>
                    Support Ntonarch’s mission through donations and involvement in
                    our community-focused initiatives. Your contribution helps us
                    drive impactful projects and create positive change.
                </p>
                <a href="#" class="btn">
                    Make a Donation
                </a>
            </div>
        </div>
    </section>
</main>
<script>
    AOS.init();
    const swiper = new Swiper(".swiper", {
        // Optional parameters
        direction: "horizontal",
        loop: true,
        autoplay: true,
        // If we need pagination
        // pagination: {
        //     el: '.swiper-pagination',
        // },

        // Navigation arrows
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        speed: 600,
        // spaceBetween: 10,

        // And if we need scrollbar
        // scrollbar: {
        //     el: '.swiper-scrollbar',
        // },
    });
</script>
<?php
$footer_include = "<script src=\"/public/js/tilt.js\"></script>";
require_once __DIR__."/inc/Footer.php"; 
?>