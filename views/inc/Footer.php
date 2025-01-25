
<!-- start site-footer -->
<footer class="site-footer">
    <div class="upper-footer">
        <div class="container">
            <div class="row">
                <div class="col col-lg-4 col-md-4 col-sm-6">
                    <div class="widget about-widget">
                        <div class="logo widget-title">
                            <h3>About us</h3>
                        </div>
                        <p>At <strong>Ntonarch</strong>, we unite diverse industries under one hub—engineering, technology,
                        agriculture, and more.</p>
                        <div class="social">
                            <ul>
                                <li><a href="#"><i class="ti-facebook"></i></a></li>
                                <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                <li><a href="#"><i class="ti-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-4 col-md-4 col-sm-6">
                    <div class="widget link-widget">
                        <div class="widget-title">
                            <h3>Important Links</h3>
                        </div>
                        <ul>
                            <li><a href="/about">About us</a></li>
                            <li><a href="/about#team">The team</a></li>
                            <li><a href="/services">Our services</a></li>
                            <li><a href="/contact">Contact</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="/blog">Blog</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col col-lg-4 col-md-4 col-sm-6">
                    <div class="widget contact-widget service-link-widget">
                        <div class="widget-title">
                            <h3>Address Location</h3>
                        </div>
                        <ul>
                            <li>House no 25, dreen street, melborn Dowltown</li>
                            <li>Phone:  ++8525120</li>
                            <li>Office Time: 8AM- 4PM</li>
                            <li>Email: demo@ex.com</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </div>
    <div class="lower-footer">
        <div class="container">
            <div class="row">
                <div class="separator"></div>
                <div class="col col-xs-12">
                    <p class="copyright">Copyright &copy; <?=(new DateTime())->format('Y');?> Ntonarch. All rights reserved. Developed by <a href="https://github.com/samsmithkruz">Sam Benny</a></p>
                    <div class="short-links">
                        <ul>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Terms of Use</a></li>
                            <li><a href="#">Cookies</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- end site-footer -->

</div>
<!-- end of page-wrapper -->



<!-- All JavaScript files
================================================== -->
<script src="/public/assets/js/jquery.min.js"></script>
<script src="/public/assets/js/bootstrap.min.js"></script>

<!-- Plugins for this template -->
<script src="/public/assets/js/jquery-plugin-collection.js"></script>

<!-- Custom script for this template -->
<script src="/public/assets/js/script.js"></script>
<script src="/public/js/shareAPI.js"></script>

<?= isset($footer_include) ? $footer_include : "" ?>

</body>
</html>