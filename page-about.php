<?php
/*
Template Name: About Page
*/
get_header(); 
?>

<!-- Wrap everything to scope styles -->
<div class="qwery-about-wrapper">

    <!-- 1. HERO SECTION -->
    <section class="qw-hero">
        <div class="container">
            <div class="qw-hero-grid">
                <div class="qw-hero-content">
                    <span class="qw-subtitle">Hello & Welcome</span>
                    <h1 class="qw-title">We Create <span class="highlight">Digital</span><br> Products.</h1>
                    <p class="qw-desc">
                        We are a creative agency with a passion for design. We develop smart solutions for clients from various fields.
                    </p>
                    <div class="qw-hero-btn-group">
                        <a href="#contact" class="qw-btn">Get in Touch</a>
                        <a href="#team" class="qw-link">Meet the Team &rarr;</a>
                    </div>
                </div>
                <div class="qw-hero-image">
                    <!-- Main large image -->
                    <img src="https://placehold.co/600x700/f3f4f6/D3FE3E?text=Agency+Life" alt="Agency" class="main-img">
                    <!-- Floating Badge -->
                    <div class="qw-badge">
                        <span class="badge-number">15+</span>
                        <span class="badge-text">Years of<br>Experience</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- 1.4 CORPORATE SERVICE TIMELINE SECTION -->
    <section class="qw-corp-section">
        <div class="container">
            <div class="qw-corp-grid">
                
                <!-- LEFT COLUMN (Sticky Title) -->
                <div class="qw-corp-left">
                    <div class="qw-sticky-wrapper">
                        <span class="qw-subtitle">Corporate Service</span>
                        <h2 class="qw-title-small">We develop & create digital future.</h2>
                        <p class="qw-desc-small">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.
                        </p>
                    </div>
                </div>

                <!-- RIGHT COLUMN (Timeline List) -->
                <div class="qw-corp-right">
                    
                    <!-- Item 1 -->
                    <div class="corp-item">
                        <div class="corp-icon">
                            <!-- Wi-Fi Icon -->
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12.55a11 11 0 0 1 14.08 0"></path><path d="M1.42 9a16 16 0 0 1 21.16 0"></path><path d="M8.53 16.11a6 6 0 0 1 6.95 0"></path><line x1="12" y1="20" x2="12.01" y2="20"></line></svg>
                        </div>
                        <div class="corp-content">
                            <h4>Free and Fast Wi-Fi</h4>
                            <p>Visit our office and feel free to stay at the lunch zone to work or rest.</p>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="corp-item">
                        <div class="corp-icon">
                            <!-- Updates Icon -->
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                        </div>
                        <div class="corp-content">
                            <h4>Free Updates & Support</h4>
                            <p>We value every customer and provide support on a daily basis.</p>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="corp-item">
                        <div class="corp-icon">
                            <!-- Clean Code Icon -->
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>
                        </div>
                        <div class="corp-content">
                            <h4>Super Clean Code</h4>
                            <p>Premium-quality digital and web products provide safety and success.</p>
                        </div>
                    </div>

                    <!-- Item 4 -->
                    <div class="corp-item">
                        <div class="corp-icon">
                            <!-- Endless Icon -->
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                        </div>
                        <div class="corp-content">
                            <h4>Endless Possibilities</h4>
                            <p>Let our creative experts show you the real options for business growth.</p>
                        </div>
                    </div>

                    <!-- Item 5 -->
                    <div class="corp-item">
                        <div class="corp-icon">
                            <!-- Support Icon -->
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path></svg>
                        </div>
                        <div class="corp-content">
                            <h4>Technical Support</h4>
                            <p>Consectetur adipiscing elit, sed do euism od tempor incidunt ut labore.</p>
                        </div>
                    </div>

                    <!-- Item 6 -->
                    <div class="corp-item">
                        <div class="corp-icon">
                            <!-- Solutions Icon -->
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                        </div>
                        <div class="corp-content">
                            <h4>Effective Solutions</h4>
                            <p>Consectetur adipiscing elit, sed do euism od tempor incidunt ut labore.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!--2 1.5 MISSION / VISION / VALUES SECTION -->
    <section class="qw-mvv-section">
        <div class="container">
            
            <!-- A. NAVIGATION TABS -->
            <div class="mvv-navigation">
                <!-- Add new buttons here. match 'data-target' to the ID of the content below -->
                <button class="mvv-btn active" data-target="mission" data-watermark="Mission">Mission</button>
                <button class="mvv-btn" data-target="vision" data-watermark="Vision">Vision</button>
                <button class="mvv-btn" data-target="values" data-watermark="Values">Values</button>
            </div>

            <!-- B. CONTENT DISPLAY AREA -->
            <div class="mvv-content-area">
                
                <!-- Background Watermark Text -->
                <div class="mvv-watermark">Mission</div>

                <!-- CONTENT 1: MISSION -->
                <div id="mission" class="mvv-panel active">
                    <div class="mvv-grid">
                        <div class="mvv-text">
                            <h3 class="mvv-heading">To be forever curious and impactful.</h3>
                            <p class="mvv-desc">
                                We aspire to create and deliver the best digital solutions for businesses wanting to acquire a competitive edge in the industry and serve their customers through robust digital channels.
                            </p>
                            <p class="mvv-desc">
                                KBTech aims to help startups and organizations recognize their potential and leverage optimum, highly customized solutions for business growth and ROI.
                            </p>
                        </div>
                        <div class="mvv-image">
                            <!-- Replace with your specific image -->
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/mission.png" alt="Our Mission">
                        </div>
                    </div>
                </div>

                <!-- CONTENT 2: VISION -->
                <div id="vision" class="mvv-panel">
                    <div class="mvv-grid">
                        <div class="mvv-text">
                            <h3 class="mvv-heading">Defining the future of digital interaction.</h3>
                            <p class="mvv-desc">
                                Our vision is to become the world's leading partner for digital innovation, where technology meets human creativity to solve complex problems.
                            </p>
                            <p class="mvv-desc">
                                We envision a world where every business, regardless of size, has access to enterprise-grade technology strategies.
                            </p>
                        </div>
                        <div class="mvv-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/vision.webp" alt="Our Vision">
                        </div>
                    </div>
                </div>

                <!-- CONTENT 3: VALUES -->
                <div id="values" class="mvv-panel">
                    <div class="mvv-grid">
                        <div class="mvv-text">
                            <h3 class="mvv-heading">Integrity, Innovation, and Impact.</h3>
                            <p class="mvv-desc">
                                <strong>Client First:</strong> We measure our success by your success. <br>
                                <strong>Transparency:</strong> No hidden costs, no confusing jargon.
                            </p>
                            <p class="mvv-desc">
                                We believe in building long-term relationships founded on trust and consistent delivery of excellence.
                            </p>
                        </div>
                        <div class="mvv-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/Values.webp" alt="Our Values">
                        </div>
                    </div>
                </div>

                <!-- TO ADD MORE: Copy a .mvv-panel div, give it a unique ID, and add a matching button above. -->

            </div>
        </div>
    </section>

    <!-- 3. SCROLLING MARQUEE (Signature Qwery Feature) -->
    <div class="qw-marquee">
        <div class="marquee-track">
            <span>STRATEGY &bull; BRANDING &bull; DEVELOPMENT &bull; MARKETING &bull; </span>
            <span>STRATEGY &bull; BRANDING &bull; DEVELOPMENT &bull; MARKETING &bull; </span>
            <span>STRATEGY &bull; BRANDING &bull; DEVELOPMENT &bull; MARKETING &bull; </span>
            <span>STRATEGY &bull; BRANDING &bull; DEVELOPMENT &bull; MARKETING &bull; </span>
        </div>
    </div>


    <!-- 4. TEAM SECTION -->
    <section id="team" class="qw-team">
        <div class="container">
            <div class="qw-section-header">
                <h2 class="qw-section-title">Meet Our Team</h2>
                <a href="#careers" class="qw-link-btn">Join Us &rarr;</a>
            </div>
            
            <div class="qw-team-grid">
                <!-- Member 1 -->
                <div class="qw-team-card">
                    <div class="team-img">
                        <img src="https://placehold.co/400x500/f3f4f6/111?text=CEO" alt="Member">
                    </div>
                    <div class="team-info">
                        <h3>John Miller</h3>
                        <span>CEO & Founder</span>
                    </div>
                </div>

                <!-- Member 2 -->
                <div class="qw-team-card">
                    <div class="team-img">
                        <img src="https://placehold.co/400x500/f3f4f6/111?text=Designer" alt="Member">
                    </div>
                    <div class="team-info">
                        <h3>Sarah Miller</h3>
                        <span>Cheif Of Operations</span>
                    </div>
                </div>

                <!-- Member 3 -->
                <div class="qw-team-card">
                    <div class="team-img">
                        <img src="https://placehold.co/400x500/f3f4f6/111?text=Dev" alt="Member">
                    </div>
                    <div class="team-info">
                        <h3>Yor H. Yamamoto</h3>
                        <span>General Manager</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. STATS / AWARDS -->
    <section class="qw-stats">
        <div class="container">
            <div class="qw-stats-flex">
                <div class="stat-box">
                    <span class="stat-num">450+</span>
                    <span class="stat-label">Projects Completed</span>
                </div>
                <div class="stat-box">
                    <span class="stat-num">25k</span>
                    <span class="stat-label">Hours of Coding</span>
                </div>
                <div class="stat-box">
                    <span class="stat-num">99%</span>
                    <span class="stat-label">Client Satisfaction</span>
                </div>
                <div class="stat-box">
                    <span class="stat-num">15</span>
                    <span class="stat-label">Design Awards</span>
                </div>
            </div>
        </div>
    </section>

</div>
<script>
document.addEventListener("DOMContentLoaded", function() {
    const btns = document.querySelectorAll('.mvv-btn');
    const panels = document.querySelectorAll('.mvv-panel');
    const watermark = document.querySelector('.mvv-watermark');

    btns.forEach(btn => {
        btn.addEventListener('click', () => {
            // 1. Remove active class from all buttons and panels
            btns.forEach(b => b.classList.remove('active'));
            panels.forEach(p => p.classList.remove('active'));

            // 2. Add active class to clicked button
            btn.classList.add('active');

            // 3. Update Watermark Text
            const newText = btn.getAttribute('data-watermark');
            watermark.textContent = newText;

            // 4. Show corresponding panel
            const targetId = btn.getAttribute('data-target');
            document.getElementById(targetId).classList.add('active');
        });
    });
});
</script>
<?php get_footer(); ?>