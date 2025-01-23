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
                        <span>Ntonarch Farm</span>
                    </h2>
                    <p>
                    Cultivating Health and Sustainability Through Progressive Agriculture
                    </p>
                    <a href="#" class="btn secondary">Explore </a>
                </div>
            </div>
            <div class="swiper-slide" style="--bg: url('/public/assets/choose.webp');">
                <div class="overlay"></div>

            </div>
    </section>
</div>
<main id="farm">
    <section id="about-container" class="container">
        <div class="main">
            <h3>About Ntonarch Farm</h3>
            <p>
            Ntonarch Farm is a dedicated branch of Ntonarch, focused on sustainable farming practices. We specialize in producing a wide range of essential crops, including yam, plantain, rice, beans, pepper, palm oil, okoro, ogbono, and green leafy vegetables—healthy foods that are perfect for a balanced diet.
            </p>
            <!-- <a href="#" class="btn primary">About Us</a> -->
        </div>
        <div class="cards">
            <div>
                <h4>Our Commitment to Sustainability</h4>
                <h5>Sustainable Farming for a Healthier Future</h5>
                <p> At Ntonarch Farm, we prioritize sustainable farming methods, ensuring all products are grown without harmful chemicals. Our practices align with our core values of health and environmental stewardship, allowing us to produce premium crops while protecting the planet.</p>
            </div>
            <div>
                <h4>Our Farm Services</h4>
                <h5>What We Offer
                </h5>
                <ul>
                    <li><b>Crop Production:</b> Specializing in essential crops such as yam, rice, and vegetables.</li>
                    <li><b>Sustainable Practices:</b> Growing healthy produce using eco-friendly methods.</li>
                    <li><b>E-commerce Platform:</b> Offering transparent access to our products through Ntonarch Market.</li>
                    <li><b>Farm Management Consulting:</b> Helping businesses optimize their agricultural practices.</li>
                </ul>
            </div>
            <div>
                <h4>Farm and Market Integration</h4>
                <h5>Seamless Farm to Market Solutions</h5>
                <p>  As part of the Ntonarch ecosystem, Ntonarch Farm works hand-in-hand with Ntonarch Market. We not only provide fresh produce but also valuable cash crops, such as cocoa and timber, ensuring that businesses and consumers have access to high-quality agricultural products.</p>
            </div>
            <div>
                <h4>Innovation in Agriculture</h4>
                <h5>Revolutionizing Farming with Technology</h5>
                <p>Ntonarch Farm integrates modern technology with traditional farming practices to enhance productivity and sustainability. Our digital transformation ensures we meet the evolving needs of our customers and provide consistent premium-quality products.</p>
            </div>
            <div>
                <h4>Digital Transparency</h4>
                <h5>Explore Our Crops Online</h5>
                <p>Through our Ntonarch Market platform, you can explore the variety of crops we produce. Learn about our farming processes and the natural benefits of our products—ensuring every purchase is made with confidence and transparency.</p>
            </div>
        </div>
        <div class="more-details">

        </div>
    </section>
    <section id="services">
        <div class="container">
            <div class="service">
                <h3>Our Vision and Mission</h3>
                <span class="service-headline"><b>Dedicated to Health, Sustainability, and Quality</b></span>
                <div class="t">
                    <p>
                    Ntonarch Farm embodies the vision of Ntonarch to provide health-conscious, sustainable agricultural products. We strive for excellence in every operation, ensuring that we contribute to a healthier and more sustainable world for future generations.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="choose" class="container">
        <h3>Why Choose Ntonarch Farm?</h3>
        <h4>Excellence in Every Harvest</h4>
        <p>
        Ntonarch Farm is more than just a supplier. Whether you're a food enthusiast seeking organically grown products, a business needing bulk provisions, or interested in agricultural education, we are committed to meeting your needs with professionalism and quality.
        </p>

    </section>
    <section id="service-cta" class="container">
        <h3>Join Us on Our Green Journey</h3>
        <p>We invite you to join us at Ntonarch Farm, where we are fostering a future where agriculture nourishes the body and protects the planet. Visit us or explore our digital platforms to experience the richness of our products.</p>
        <h3>Start Your Sustainable Farming Journey Today</h3>
        <p>Contact Us or Visit Ntonarch Farm</p>
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