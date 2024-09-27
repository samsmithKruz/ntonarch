<footer>
    <div class="container">
        <div>
            <a href="#" class="logo">
                <img src="/public/assets/logo-white.svg" alt="" />
            </a>
            <div>
                <h4>(234) 903-803-6844</h4>
                <p>Call Us for Tech Support</p>
            </div>
            <div>
                <h4>info@gmail.com</h4>
                <p>Email Us for Query</p>
            </div>
            <div>
                <h4>#24 Roaly Ln. Mosa</h4>
                <p>Uyo, Akwa Ibom</p>
            </div>
        </div>
        <div>
            <div>
                <h5>About Company</h5>
                <p>
                    Join us in our mission to create a sustainable future. Contact
                    Greener Future today and take the first step towards renewable
                    energy solutions.
                </p>
            </div>
            <div class="link">
                <h5>Follow Us</h5>
                <a href="#">Facebook</a>
                <a href="#">Instagram</a>
                <a href="#">Linkedin</a>
                <a href="#">Twitter</a>
            </div>
            <div class="link">
                <h5>Useful Links</h5>
                <a href="#">About Us</a>
                <a href="#">Projects</a>
                <a href="#">FAQ</a>
                <a href="#">Contacts</a>
            </div>
            <div class="link">
                <h5>Services</h5>
                <a href="#">Solar Energy Solutions</a>
                <a href="#">Solar Energy Solutions</a>
                <a href="#">Solar Energy Solutions</a>
            </div>
        </div>
        <div>
            &copy; Ntonarch. All Rights Reserved 2024. Developed by
            <a href="https://github.com/samsmithkruz">Smith Kruz</a>
        </div>
    </div>
</footer>
<script>
    window.addEventListener("scroll", () => {
        const header = document.querySelector("header");
        const scrollPosition =
            window.scrollY || document.documentElement.scrollTop;

        // Change 100 to the number of pixels you want to scroll before changing the class
        if (scrollPosition > 100) {
            header.classList.add("scrolled");
            header.querySelector(".logo img").setAttribute("src", "/public/assets/logo.svg");
        } else {
            header.classList.remove("scrolled");
            header.querySelector(".logo img").setAttribute("src", "/public/assets/logo-white.svg");
        }
    });
</script>
<script src="/public/js/tilt.js"></script>
<script src="/public/js/shareAPI.js"></script>
<?= isset($footer_include) ? $footer_include : "" ?>
</body>

</html>