<?php
/**
 * Template Name: Contact Page
 */
get_header(); ?>

<div class="contact-page-wrapper">
    <!-- Top White Section -->
    <section class="contact-hero">
        <div class="container-contact">
            <div class="contact-flex-container">
                
                <!-- Left: Visual Content -->
                <div class="contact-visual">
                    <div class="phone-container">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/phone-image.jpg" alt="Phone" class="phone-img">
                    </div>
                    <div class="text-content">
                        <h1 class="bg-text">CONTACT US</h1>
                        <div class="sub-heading-row">
                            <span class="accent-line"></span>
                            <h2>Have a Project?</h2>
                        </div>
                    </div>
                </div>

                <!-- Right: Overlapping Black Form -->
                <div class="contact-form-container">
                    <div class="black-card">
                        <p class="form-intro">What can we do for you?</p>
                        <form id="contact-form-main">
                            <div class="btn-group-grid">
                                <button type="button" class="type-selection">App Design</button>
                                <button type="button" class="type-selection">Web Design</button>
                                <button type="button" class="type-selection">Development</button>
                                <button type="button" class="type-selection">Other</button>
                            </div>

                            <div class="input-row">
                                <label>NAME</label>
                                <input type="text" name="full_name">
                            </div>
                            <div class="input-row">
                                <label>EMAIL</label>
                                <input type="email" name="email_address">
                            </div>
                            <div class="input-row">
                                <label>PHONE</label>
                                <input type="text" name="phone_number">
                            </div>
                            <div class="input-row">
                                <label>PROJECT DETAILS</label>
                                <textarea name="message" rows="1"></textarea>
                            </div>

                            <div class="form-footer-flex">
                                <div class="file-upload">
                                    <i class="fas fa-cloud-upload-alt"></i> <span>UPLOAD FILE</span>
                                </div>
                                <button type="submit" class="btn-submit-contact">SEND MESSAGE &rarr;</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Bottom Gray Section -->
    <section class="contact-details-bar">
        <div class="container-contact">
            <div class="details-flex">
                <div class="detail-block">
                    <h6>OUR ADDRESS</h6>
                    <p>123455 Moscwow<br>Lane Dyuhhee<br>Buildind 90, 389</p>
                </div>
                <div class="detail-block">
                    <h6>OUR CONTACTS</h6>
                    <p>hello@dianapps.com<br>(+91) 93515 84693</p>
                </div>
                <div class="social-icons-row">
                    <a href="#"><i class="fab fa-behance"></i></a>
                    <a href="#"><i class="fab fa-dribbble"></i></a>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>