<footer class="site-footer">
    <div class="container">
        <div class="footer-top">
            <div class="footer-brand-col">
                <!-- LOGO UPDATE START -->
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer-logo-link">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/logo-footer.svg" alt="Neon Digital" class="footer-logo-img">
                </a>
                <!-- LOGO UPDATE END -->
                
                <p>Empowering businesses with innovative digital solutions and data-driven strategies.</p>
            </div>
            
            <div class="footer-nav-col">
                <h4>Services</h4>
                <ul>
                    <li><a href="#">Web Development</a></li>
                    <li><a href="#">Data Analytics</a></li>
                    <li><a href="#">UI/UX Design</a></li>
                    <li><a href="#">Engineering</a></li>
                </ul>
            </div>
            
            <div class="footer-nav-col">
                <h4>Company</h4>
                <ul>
                    <li><a href="http://kbt.local/about-us/">About Us</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="http://kbt.local/contact-us/">Contact</a></li>
                </ul>
            </div>
            
            <div class="footer-nav-col">
                <h4>Legal</h4>
                <ul>
                    <li><a href="http://kbt.local/privacy-policy/">Privacy Policy</a></li>
                    <li><a href="http://kbt.local/terms-of-service/">Terms of Service</a></li>
                    <li><a href="http://kbt.local/cookie-policy/">Cookie Policy</a></li>
                </ul>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> Neon Digital Agency. All rights reserved.</p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>