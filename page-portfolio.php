<?php
/**
 * Template Name: Portfolio Page
 */
get_header(); ?>

<div class="portfolio-page-wrapper">
    
    <!-- Hero Section: Heading & Projects -->
    <section class="portfolio-hero">
        <div class="container-custom">
            <h1 class="frisk-main-title">Discover Our <br>Selected Projects</h1>
            
            <div class="hero-project-grid">
                <!-- Project 1 -->
                <div class="frisk-project-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/mission.png" alt="Project">
                    <div class="card-overlay">
                        <span class="cat">Branding</span>
                        <h3>Decentralized Platform</h3>
                    </div>
                </div>
                <!-- Project 2 -->
                <div class="frisk-project-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/tech-network.png" alt="Project">
                    <div class="card-overlay">
                        <span class="cat">Development</span>
                        <h3>Digital Ecosystem</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Awards Section -->
    <section class="history-list-section">
        <div class="container-custom">
            <div class="history-row header-row">
                <span class="h-col">2017</span>
                <span class="h-col">PROJECT NAME</span>
                <span class="h-col text-right">ROLE</span>
            </div>
            
            <div class="history-row">
                <span class="h-year">2024</span>
                <div class="h-info">
                    <h4>New York Design Week</h4>
                    <p>We bring to life the most complex projects, specialize in digital.</p>
                </div>
                <span class="h-role">MAIN DEVELOPER</span>
            </div>

            <div class="history-row">
                <span class="h-year">2023</span>
                <div class="h-info">
                    <h4>The Blue Design Awards</h4>
                    <p>Creative success relationships fuel real success for our clients.</p>
                </div>
                <span class="h-role">ANIMATOR</span>
            </div>
        </div>
    </section>

    <!-- Articles Section -->
    <section class="articles-section">
        <div class="container-custom">
            <h2 class="frisk-section-title">Read Our Articles <br>and News</h2>
            <div class="articles-grid">
                <div class="article-card">
                    <div class="article-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/vision.webp"></div>
                    <div class="article-meta">March 26, 2024 • Branding</div>
                    <h4>Everything You Should Know About Return</h4>
                    <a href="#" class="read-more">READ MORE ↗</a>
                </div>
                <div class="article-card">
                    <div class="article-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/Values.webp"></div>
                    <div class="article-meta">March 26, 2024 • Design</div>
                    <h4>6 Big Commerce Design Tips For Big Results</h4>
                    <a href="#" class="read-more">READ MORE ↗</a>
                </div>
                <div class="article-card">
                    <div class="article-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/mission.png"></div>
                    <div class="article-meta">March 26, 2024 • UI/UX</div>
                    <h4>Four Steps to Conduct a Successful Usability</h4>
                    <a href="#" class="read-more">READ MORE ↗</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Logo Grid Section -->
    <section class="logo-grid-section">
        <div class="container-custom">
            <div class="frisk-logo-grid">
                <div class="logo-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/header-logo.svg" alt="Logo"></div>
                <div class="logo-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/header-logo.svg" alt="Logo"></div>
                <div class="logo-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/header-logo.svg" alt="Logo"></div>
                <div class="logo-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/header-logo.svg" alt="Logo"></div>
                <div class="logo-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/header-logo.svg" alt="Logo"></div>
                <div class="logo-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/header-logo.svg" alt="Logo"></div>
                <div class="logo-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/header-logo.svg" alt="Logo"></div>
                <div class="logo-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/header-logo.svg" alt="Logo"></div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="portfolio-cta-section">
        <div class="container-custom">
            <h2>Let's Create <br>Something Great</h2>
            <p>We shift you from today's reality to tomorrow's potential, ensuring</p>
            <a href="/contact" class="black-btn">LET'S TALK WITH US</a>
        </div>
    </section>

</div>

<?php get_footer(); ?>