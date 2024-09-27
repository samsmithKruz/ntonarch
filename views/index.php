<?php
$header_include = "<link rel=\"stylesheet\" href=\"/public/css/index.css\" />";
$title = "Welcome to Ntornarch";
$page = "index";

require_once __DIR__ . "/inc/Header.php";

?>

    <div id="hero">
      <?php require_once __DIR__."/inc/nav.php"; ?>
      <section class="hero">
        <div class="swiper-wrapper">
          <div class="swiper-slide" style="--bg: url('/public/assets/equip.webp');">
            <div class="overlay"></div>
            <div class="container">
              <h2>
                Powering a <br />
                <span>Greener Future</span>
              </h2>
              <p>
                Switch to solar today for sustainable energy and a greener
                tomorrow. Join us in harnessing the powrer of the sun!
              </p>
              <a href="#" class="btn secondary">Learn More</a>
            </div>
          </div>
          <div class="swiper-slide" style="--bg: url('/public/assets/choose.webp');">
            <div class="overlay"></div>
            <div class="container">
              <h2>
                Powering a 2 <br />
                <span>Greener Future</span>
              </h2>
              <p>
                Switch to solar today for sustainable energy and a greener
                tomorrow. Join us in harnessing the powrer of the sun!
              </p>
              <a href="#" class="btn secondary">Learn More</a>
            </div>
          </div>
          <div
            class="swiper-slide"
            style="--bg: url('/public/assets/service_man.webp');"
          >
            <div class="overlay"></div>
            <div class="container">
              <h2>
                Powering a 3 <br />
                <span>Greener Future</span>
              </h2>
              <p>
                Switch to solar today for sustainable energy and a greener
                tomorrow. Join us in harnessing the powrer of the sun!
              </p>
              <a href="#" class="btn secondary">Learn More</a>
            </div>
          </div>
        </div>
      </section>
    </div>
    <main>
      <section id="committed" class="container">
        <div class="main">
          <h3>Committed to a Sustainable Future</h3>
          <p>
            We are dedicated to providing innovative and sustainable energy
            solutions that help protect our planet and ensure a cleaner, greener
            future for generations to come. With a team of passionate experts
            and a commitment to excellence, we offer cutting-edge renewable
            energy technologies and services designed to meet the unique needs
            of our clients
          </p>
          <a href="#" class="btn primary">About Us</a>
        </div>
        <div class="cards">
          <div>
            <h4>120 +</h4>
            <p>Energy Projects Completed</p>
          </div>
          <div>
            <h4>500 +</h4>
            <p>Total EnergyGenerated</p>
          </div>
          <div>
            <h4>1M</h4>
            <p>Carbon Emissions Reduced</p>
          </div>
          <div>
            <h4>98%</h4>
            <p>Customer Satisfaction Rate</p>
          </div>
          <div>
            <h4>200+</h4>
            <p>Employee Growth</p>
          </div>
          <div>
            <h4>15+</h4>
            <p>Years of Experience</p>
          </div>
        </div>
      </section>
      <section id="services">
        <div class="container">
            <h3>Our Services</h3>
            <div class="t">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse
                varius enim in eros elementum tristique. Duis cursus, mi quis
                viverra ornare, eros dolor interdum nulla, ut commodo diam libero
                vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem
                imperdiet. Nunc ut sem vitae risus tristique posuere.
              </p>
              <a href="#" class="btn primary">Explore Services</a>
            </div>
            <div class="f">
              <div>
                <div>
                  <h4>Solar Energy Solutions</h4>
                  <p>
                    From expert solar panel installation and custom system design to
                    advanced energy storage and flexible financing options, we
                    provide everything you need to transition to sustainable,
                    renewable energy.
                  </p>
                  <a href="#">Read More</a>
                </div>
                <div>
                  <h4>Solar Energy Solutions</h4>
                  <p>
                    From expert solar panel installation and custom system design to
                    advanced energy storage and flexible financing options, we
                    provide everything you need to transition to sustainable,
                    renewable energy.
                  </p>
                  <a href="#">Read More</a>
                </div>
                <div>
                  <h4>Solar Energy Solutions</h4>
                  <p>
                    From expert solar panel installation and custom system design to
                    advanced energy storage and flexible financing options, we
                    provide everything you need to transition to sustainable,
                    renewable energy.
                  </p>
                  <a href="#">Read More</a>
                </div>
                <div>
                  <h4>Solar Energy Solutions</h4>
                  <p>
                    From expert solar panel installation and custom system design to
                    advanced energy storage and flexible financing options, we
                    provide everything you need to transition to sustainable,
                    renewable energy.
                  </p>
                  <a href="#">Read More</a>
                </div>
              </div>
              <img src="/public/assets/service_man.webp" alt="" />
            </div>
        </div>
      </section>
      <section id="featured">
        <h3>Featured Projects</h3>
        <p>
          Explore our showcase of meticulously installed solar panels and
          precision-placed wind turbines, demonstrating our commitment to
          advancing renewable energy solutions.
        </p>
        <a href="#" class="btn secondary">View All Projects</a>
        <div class="featured">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
              <div>
                <img src="/public/assets/turbine.jpg" alt="" />
                <div class="content">
                    <h2>Wind Turbine</h2>
                    <h5>SOLAR</h5>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div>
                <img src="/public/assets/turbine.jpg" alt="" />
                <div class="content">
                    <h2>Wind Turbine</h2>
                    <h5>SOLAR</h5>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div>
                <img src="/public/assets/turbine.jpg" alt="" />
                <div class="content">
                    <h2>Wind Turbine</h2>
                    <h5>SOLAR</h5>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div>
                <img src="/public/assets/turbine.jpg" alt="" />
                <div class="content">
                    <h2>Wind Turbine</h2>
                    <h5>SOLAR</h5>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div>
                <img src="/public/assets/turbine.jpg" alt="" />
                <div class="content">
                    <h2>Wind Turbine</h2>
                    <h5>SOLAR</h5>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-btns">
            <div class="swiper-button-prev g_icon">arrow_back</div>
            <div class="swiper-button-next g_icon">arrow_forward</div>
          </div>
        </div>
      </section>
      <section id="choose" class="container">
        <h3>Why Choose Us?</h3>
        <p>
          At Greener Future, we pride ourselves on delivering top-quality,
          innovative, and sustainable energy solutions that are customized to
          meet your unique needs.
        </p>
        <div>
          <img src="/public/assets/choose.webp" alt="" />
          <div>
            <div>
              <h4><span class="i_icon"></span> Sustainable Solutions</h4>
              <p>
                We are dedicated to helping you transition to renewable energy,
                contributing to a cleaner and greener planet for future
                generations.
              </p>
            </div>
            <div>
              <h4><span class="i_icon"></span> Sustainable Solutions</h4>
              <p>
                We are dedicated to helping you transition to renewable energy,
                contributing to a cleaner and greener planet for future
                generations.
              </p>
            </div>
            <div>
              <h4><span class="i_icon"></span> Sustainable Solutions</h4>
              <p>
                We are dedicated to helping you transition to renewable energy,
                contributing to a cleaner and greener planet for future
                generations.
              </p>
            </div>
            <div>
              <h4><span class="i_icon"></span> Sustainable Solutions</h4>
              <p>
                We are dedicated to helping you transition to renewable energy,
                contributing to a cleaner and greener planet for future
                generations.
              </p>
            </div>
          </div>
        </div>
      </section>
      <section id="motivate" >
        <div class="container" >
            <div class="motivations">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <p>
                      “GreenerFuture transformed our office building into an
                      energy-efficient powerhouse. Their renewable energy solutions have
                      drastically cut our operational costs and improved our
                      environmental footprint. ”
                    </p>
                    <h5>- Sarah M</h5>
                  </div>
                  <div class="swiper-slide">
                    <p>
                      “GreenerFuture transformed our office building into an
                      energy-efficient powerhouse. Their renewable energy solutions have
                      drastically cut our operational costs and improved our
                      environmental footprint. ”
                    </p>
                    <h5>- Sarah M</h5>
                  </div>
                  <div class="swiper-slide">
                    <p>
                      “GreenerFuture transformed our office building into an
                      energy-efficient powerhouse. Their renewable energy solutions have
                      drastically cut our operational costs and improved our
                      environmental footprint. ”
                    </p>
                    <h5>- Sarah M</h5>
                  </div>
                </div>
            </div>
        </div>
      </section>
      <section id="blog" class="container">
        <div class="top">
          <h3>Latest from the Blog</h3>
          <a href="#" class="btn primary">Visit Blog</a>
        </div>
        <div id="cards">
          <div class="card">
            <div class="img">
              <img src="/public/assets/service_man.webp" alt="" />
            </div>
            <div class="author">
              <a href="#">GreenerFuture</a>
              <p>10.04.2024</p>
            </div>
            <a href="#" class="head truncate" style="--line:2;">Off-Grid Cabin Renewable Energy Setup</a>
            <p class="truncate" style="--line:3;">
              An off-grid cabin renewable energy setup provides independence,
              sustainability, and peace of mind by generating power in remote
              locations.
            </p>
            
          </div>
          <div class="card">
            <div class="img">
              <img src="/public/assets/service_man.webp" alt="" />
            </div>
            <div class="author">
              <a href="#">GreenerFuture</a>
              <p>10.04.2024</p>
            </div>
            <a href="#" class="head truncate" style="--line:2;">Off-Grid Cabin Renewable Energy Setup</a>
            <p class="truncate" style="--line:3;">
              An off-grid cabin renewable energy setup provides independence,
              sustainability, and peace of mind by generating power in remote
              locations.
            </p>
            
          </div>
          <div class="card">
            <div class="img">
              <img src="/public/assets/service_man.webp" alt="" />
            </div>
            <div class="author">
              <a href="#">GreenerFuture</a>
              <p>10.04.2024</p>
            </div>
            <a href="#" class="head truncate" style="--line:2;">Off-Grid Cabin Renewable Energy Setup</a>
            <p class="truncate" style="--line:3;">
              An off-grid cabin renewable energy setup provides independence,
              sustainability, and peace of mind by generating power in remote
              locations.
            </p>
            
          </div>
          <div class="card">
            <div class="img">
              <img src="/public/assets/service_man.webp" alt="" />
            </div>
            <div class="author">
              <a href="#">GreenerFuture</a>
              <p>10.04.2024</p>
            </div>
            <a href="#" class="head truncate" style="--line:2;">Off-Grid Cabin Renewable Energy Setup</a>
            <p class="truncate" style="--line:3;">
              An off-grid cabin renewable energy setup provides independence,
              sustainability, and peace of mind by generating power in remote
              locations.
            </p>
            
          </div>
          <div class="card">
            <div class="img">
              <img src="/public/assets/service_man.webp" alt="" />
            </div>
            <div class="author">
              <a href="#">GreenerFuture</a>
              <p>10.04.2024</p>
            </div>
            <a href="#" class="head truncate" style="--line:2;">Off-Grid Cabin Renewable Energy Setup</a>
            <p class="truncate" style="--line:3;">
              An off-grid cabin renewable energy setup provides independence,
              sustainability, and peace of mind by generating power in remote
              locations.
            </p>
            
          </div>
        </div>
        <a href="#" class="btn primary mobile">Visit Blog</a>
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
    require_once __DIR__."/inc/Footer.php"; 
    ?>

