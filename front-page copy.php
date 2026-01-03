<?php
/* Template Name: Front Page */
get_header();
?>

<!-- HERO SECTION -->
<section class="hero-section">
    <div class="hero-bg-shapes">
        <div class="shape shape-1"></div>
        <div class="shape shape-2"></div>
        <div class="shape shape-3"></div>
    </div>
    <div class="container hero-container">
        <div class="hero-content">
            <h1 class="hero-title">
                We Craft <span class="text-gradient">Digital <br> Experiences</span> That Scale
            </h1>
            <p class="hero-subtext">
                From cutting-edge web development to predictive data analytics, we engineer solutions that drive business growth and innovation.
            </p>
            <div class="hero-buttons">
                <a href="#contact" class="btn btn-primary">Start Project</a>
                <a href="#services" class="btn btn-glass">View Services &darr;</a>
            </div>
        </div>
    </div>
    <div class="hero-fade-bottom"></div>
</section>

<!-- ... Hero Section ends above here ... -->
    <div class="hero-fade-bottom"></div>
</section>

<!-- ==============================================
     BRAND PARTNERS SECTION
     ============================================== -->
<div class="brand-partners-section">
    <div class="container">
        <div class="partners-grid">
            
            <!-- LOGO 1: Mighty Dispatch -->
            <div class="partner-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/mighty-disptach.webp" alt="Mighty Dispatch">
            </div>

            <!-- LOGO 2: Haulership -->
            <div class="partner-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/haulership.webp" alt="Haulership">
            </div>

            <!-- LOGO 3: Shoozify -->
            <div class="partner-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/shoozify.webp" alt="Shoozify">
            </div>

            <!-- LOGO 4: New Asia Sports -->
            <div class="partner-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/new-asia-sports.webp" alt="New Asia Sports">
            </div>

            <!-- LOGO 5: Toxic Juice Bar -->
            <div class="partner-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/toxic-juice-bar.webp" alt="Toxic Juice Bar">
            </div>

        </div>
    </div>
</div>

<!-- SERVICES SECTION starts below here -->
<section id="services" class="services-section section-padding">

<!-- SERVICES SECTION -->
<section id="services" class="services-section section-padding">
    <div class="container">
        <div class="section-header text-center">
            <h2 class="section-title">Our Expertise</h2>
            <p class="section-subtitle">Comprehensive digital solutions tailored to your business needs.</p>
            
            <!-- TABS NAVIGATION -->
            <!-- Note: CSS will handle the mobile wrapping seen in your image -->
            <div class="service-tabs">
                <button class="tab-btn active" onclick="openServiceTab(event, 'creative')">Creative</button>
                <button class="tab-btn" onclick="openServiceTab(event, 'writing')">Writing</button>
                <button class="tab-btn" onclick="openServiceTab(event, 'marketing')">Marketing</button>
                <button class="tab-btn" onclick="openServiceTab(event, 'management')">Management</button>
            </div>
        </div>
        
        <!-- ==============================================
             TAB 1: CREATIVE
             ============================================== -->
        <div id="creative" class="services-grid tab-content" style="display: grid;">
            
            <!-- 1. Brand Identity & Logo -->
            <div class="service-card">
                <div class="service-icon-box">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                </div>
                <h3>Brand Identity & Logo</h3>
                <p>Memorable visual systems that define your brand's personality.</p>
            </div>
            
            <!-- 2. Video Editing -->
            <div class="service-card">
                <div class="service-icon-box">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="23 7 16 12 23 17 23 7"/><rect x="1" y="5" width="15" height="14" rx="2" ry="2"/></svg>
                </div>
                <h3>Video Editing</h3>
                <p>Professional post-production to tell compelling visual stories.</p>
            </div>

            <!-- 3. Website Development -->
            <div class="service-card">
                <div class="service-icon-box">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>
                </div>
                <h3>Website Development</h3>
                <p>Custom, responsive, and high-performance websites.</p>
            </div>

            <!-- 4. UI/UX Design -->
            <div class="service-card">
                <div class="service-icon-box">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/></svg>
                </div>
                <h3>UI/UX Design</h3>
                <p>User-centric interfaces that drive engagement.</p>
            </div>

            <!-- 5. Animation -->
            <div class="service-card">
                <div class="service-icon-box">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="2.18" ry="2.18"/><line x1="7" y1="2" x2="7" y2="22"/><line x1="17" y1="2" x2="17" y2="22"/><line x1="2" y1="12" x2="22" y2="12"/><line x1="2" y1="7" x2="7" y2="7"/><line x1="2" y1="17" x2="7" y2="17"/><line x1="17" y1="17" x2="22" y2="17"/><line x1="17" y1="7" x2="22" y2="7"/></svg>
                </div>
                <h3>Animation</h3>
                <p>Motion graphics and 2D/3D animations.</p>
            </div>

             <!-- 6. Illustration -->
             <div class="service-card">
                <div class="service-icon-box">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 19l7-7 3 3-7 7-3-3z"/><path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"/><path d="M2 2l7.586 7.586"/><circle cx="11" cy="11" r="2"/></svg>
                </div>
                <h3>Illustration</h3>
                <p>Custom digital artwork to make your brand unique.</p>
            </div>
        </div>

        <!-- ==============================================
             TAB 2: WRITING
             ============================================== -->
        <div id="writing" class="services-grid tab-content" style="display: none;">
            
            <!-- 1. Content Writing -->
            <div class="service-card">
                <div class="service-icon-box">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg>
                </div>
                <h3>Content Writing</h3>
                <p>Engaging web content aligned with your brand voice.</p>
            </div>
            
            <!-- 2. Copy Writing -->
            <div class="service-card">
                <div class="service-icon-box">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
                </div>
                <h3>Copy Writing</h3>
                <p>Persuasive sales copy designed to convert visitors.</p>
            </div>

            <!-- 3. Blog/Article Writing -->
            <div class="service-card">
                <div class="service-icon-box">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
                </div>
                <h3>Blog/Article Writing</h3>
                <p>SEO-optimized articles to boost traffic and authority.</p>
            </div>

            <!-- 4. Press Release -->
            <div class="service-card">
                <div class="service-icon-box">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
                </div>
                <h3>Press Release Writing</h3>
                <p>Professional announcements to get media attention.</p>
            </div>

             <!-- 5. Academic Writing -->
             <div class="service-card">
                <div class="service-icon-box">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg>
                </div>
                <h3>Academic Writing</h3>
                <p>Thesis, dissertations, and research assistance.</p>
            </div>
        </div>

        <!-- ==============================================
             TAB 3: MARKETING
             ============================================== -->
        <div id="marketing" class="services-grid tab-content" style="display: none;">
            
            <!-- 1. SMM -->
            <div class="service-card">
                <div class="service-icon-box">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"/><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"/></svg>
                </div>
                <h3>Social Media Marketing</h3>
                <p>Strategic campaigns across FB, IG, LinkedIn, and more.</p>
            </div>
            
            <!-- 2. PPC -->
            <div class="service-card">
                <div class="service-icon-box">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"/><line x1="1" y1="10" x2="23" y2="10"/><path d="M12 15l3 3 3-3"/></svg>
                </div>
                <h3>Pay Per Click (PPC)</h3>
                <p>Targeted ad campaigns that deliver instant leads.</p>
            </div>

            <!-- 3. ORM -->
            <div class="service-card">
                <div class="service-icon-box">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                </div>
                <h3>Reputation Management</h3>
                <p>Monitoring and improving your brand's digital perception.</p>
            </div>

            <!-- 4. Email Marketing -->
            <div class="service-card">
                <div class="service-icon-box">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                </div>
                <h3>Email Marketing</h3>
                <p>Automated newsletters and drip campaigns.</p>
            </div>

             <!-- 5. SMS Marketing -->
             <div class="service-card">
                <div class="service-icon-box">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/></svg>
                </div>
                <h3>SMS Marketing</h3>
                <p>Direct mobile outreach with high open rates.</p>
            </div>

             <!-- 6. Digital PR -->
             <div class="service-card">
                <div class="service-icon-box">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m3 11 18-5v12L3 14v-3z"/><path d="M11.6 16.8a3 3 0 1 1-5.8-1.6"/></svg>
                </div>
                <h3>Digital PR Marketing</h3>
                <p>Building authority through strategic media relations.</p>
            </div>
        </div>

        <!-- ==============================================
             TAB 4: MANAGEMENT (NEW)
             ============================================== -->
        <div id="management" class="services-grid tab-content" style="display: none;">
            
            <!-- 1. eCommerce Store Management -->
            <div class="service-card">
                <div class="service-icon-box">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/></svg>
                </div>
                <h3>eCommerce Management</h3>
                <p>Complete handling of Shopify, Amazon, and WooCommerce stores.</p>
            </div>
            
            <!-- 2. Dispatch Handling -->
            <div class="service-card">
                <div class="service-icon-box">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="3" width="15" height="13" rx="2" ry="2"/><line x1="16" y1="8" x2="20" y2="8"/><line x1="16" y1="16" x2="23" y2="16"/><line x1="16" y1="12" x2="23" y2="12"/><line x1="7" y1="21" x2="7" y2="16"/><line x1="7" y1="3" x2="7" y2="8"/></svg>
                </div>
                <h3>Dispatch Handling</h3>
                <p>Efficient logistics and dispatch coordination.</p>
            </div>

            <!-- 3. Complete Managerial Services -->
            <div class="service-card">
                <div class="service-icon-box">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="8.5" cy="7" r="4"/><line x1="20" y1="8" x2="20" y2="14"/><line x1="23" y1="11" x2="17" y2="11"/></svg>
                </div>
                <h3>Managerial Services</h3>
                <p>End-to-end business operation oversight.</p>
            </div>

            <!-- 4. Sales Handling -->
            <div class="service-card">
                <div class="service-icon-box">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg>
                </div>
                <h3>Sales Handling</h3>
                <p>Driving revenue through optimized sales processes.</p>
            </div>

             <!-- 5. HR & Recruitment -->
             <div class="service-card">
                <div class="service-icon-box">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                </div>
                <h3>HR & Recruitment</h3>
                <p>Talent acquisition and workforce management.</p>
            </div>

             <!-- 6. Production Management -->
             <div class="service-card">
                <div class="service-icon-box">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M12 8v4"/><path d="M12 16h.01"/></svg>
                </div>
                <h3>Production Management</h3>
                <p>Streamlining workflow for maximum efficiency.</p>
            </div>
        </div>

    </div>
</section>

<!-- ==============================================
     NEW WHY CHOOSE US (Video Background)
     ============================================== -->
<section class="wcu-video-section">
    
    <!-- 1. THE BACKGROUND VIDEO -->
    <div class="video-bg-container">
        <video autoplay muted loop playsinline class="bg-video">
            <source src="<?php echo get_template_directory_uri(); ?>/assets/Digital-world.mp4" type="video/mp4">
        </video>
        <!-- Dark Overlay to ensure text readability -->
        <div class="video-overlay"></div>
    </div>

    <!-- 2. THE CONTENT -->
    <div class="container wcu-video-content">
        <div class="wcu-split-layout">
            
            <!-- LEFT COLUMN: Text & Bullets -->
            <div class="wcu-left-col">
                <h4 class="accent-subtitle">Why Partner With Us?</h4>
                <h2 class="wcu-main-heading">Why Choose <span class="highlight">KBTech?</span></h2>
                
                <ul class="wcu-feature-list">
                    <!-- Update these bullets easily -->
                    <li>
                        <strong>Worldwide Footprint:</strong> Serving clients across 12+ countries with localized expertise.
                    </li>
                    <li>
                        <strong>End-to-End Services:</strong> From concept to code, we handle the entire lifecycle.
                    </li>
                    <li>
                        <strong>Top 1% Talent:</strong> We hire only the industry's best engineers and designers.
                    </li>
                    <li>
                        <strong>Agile & Transparent:</strong> Complete visibility into your project's progress 24/7.
                    </li>
                </ul>
            </div>

            <!-- RIGHT COLUMN: Stats Grid (The Boxes) -->
            <div class="wcu-right-col">
                <div class="stats-grid-box">
                    
                    <!-- BOX 1 -->
                    <div class="stat-card">
                        <h3>17+</h3>
                        <p>Years on market</p>
                    </div>

                    <!-- BOX 2 -->
                    <div class="stat-card">
                        <h3>400+</h3>
                        <p>People on board</p>
                    </div>

                    <!-- BOX 3 -->
                    <div class="stat-card">
                        <h3>2500+</h3>
                        <p>Projects delivered</p>
                    </div>

                    <!-- BOX 4 -->
                    <div class="stat-card">
                        <h3>73</h3>
                        <p>Our NPS Score</p>
                    </div>

                    <!-- WANT MORE BOXES? Copy a .stat-card div and paste it here. 
                         The CSS Grid will handle the layout automatically. -->

                </div>
            </div>

        </div>
    </div>
</section>

<!-- ==============================================
     Our Achievements (Sticky Scroll Version)
     ============================================== -->
<section class="sticky-wcu-section section-padding">
    <div class="container">
        <div class="sticky-layout">
            
            <!-- LEFT COLUMN: SCROLLING TEXT -->
            <div class="sticky-text-col">
                <h2 class="section-title">Our Achievements</h2>
                <p class="section-subtitle" style="margin-bottom: 60px;">
                    We aspire to create and deliver the best digital solutions for businesses wanting to acquire a competitive edge.
                </p>

                <!-- Scroll Item 1 -->
                <div class="scroll-content-item" data-target="img-1">
                    <h3>5K+ Clients Served</h3>
                    <p>Our team consists of industry veterans who have successfully delivered over 500+ projects. We don't just write code; we architect solutions that are built to scale and withstand high traffic.</p>
                </div>

                <!-- Scroll Item 2 -->
                <div class="scroll-content-item" data-target="img-2">
                    <h3>12K+ Projects Completed</h3>
                    <p>We believe in decisions backed by data. Our strategies are monitored, measured, and optimized in real-time. We provide transparent reporting so you can see exactly where your investment is going.</p>
                </div>

                <!-- Scroll Item 3 -->
                <div class="scroll-content-item" data-target="img-3">
                    <h3>8K+ Reviews</h3>
                    <p>Business never sleeps, and neither do we. Our dedicated support team is available around the clock to ensure your digital assets are running smoothly without interruption.</p>
                </div>
                <!-- Scroll Item 4 -->
                <div class="scroll-content-item" data-target="img-4">
                    <h3>95% Retention Rate</h3>
                    <p>Business never sleeps, and neither do we. Our dedicated support team is available around the clock to ensure your digital assets are running smoothly without interruption.</p>
                </div>
                
                <!-- Spacer to allow final scroll -->
                <div style="height: 100px;"></div>
            </div>

            <!-- RIGHT COLUMN: STICKY IMAGES -->
            <div class="sticky-image-col">
                <div class="image-sticky-wrapper">
                    
                    <!-- Image 1 -->
                    <img id="img-1" class="wcu-sticky-img active" src="<?php echo get_template_directory_uri(); ?>/assets/hand-shake.png" alt="Expertise">
                    
                    <!-- Image 2 -->
                    <img id="img-2" class="wcu-sticky-img" src="<?php echo get_template_directory_uri(); ?>/assets/tech-network.png" alt="Data">
                    
                    <!-- Image 3 -->
                    <img id="img-3" class="wcu-sticky-img" src="<?php echo get_template_directory_uri(); ?>/assets/24-7-service.png" alt="Support">

                    <!-- Image 4 -->
                    <img id="img-4" class="wcu-sticky-img" src="<?php echo get_template_directory_uri(); ?>/assets/Reviews.png" alt="Data">

                    <!-- Background Shape (Optional decoration) -->
                    <div class="blob-bg"></div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ==============================================
     REVIEWS SECTION
     ============================================== -->
<section class="reviews-section section-padding">
    <div class="container">
        <div class="reviews-layout">
            
            <!-- LEFT COLUMN: Text Content -->
            <div class="reviews-text-col">
                <div class="review-label-wrapper">
                    <span class="review-label">CLIENT TESTIMONIALS</span>
                    <svg class="wavy-underline" width="60" height="10" viewBox="0 0 60 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2 5C10 5 10 2 18 2C26 2 26 8 34 8C42 8 42 3 50 3C58 3 58 7 58 7" stroke="#ef4444" stroke-width="2" stroke-linecap="round"/></svg>
                </div>
                
                <h2 class="section-title">Ratings & Reviews</h2>
                <p class="section-desc">
                    We pledge to serve our clients to the fullest in creating versatile product designs and dynamic user experiences. We are creating a meaningful impact in the realm of software development by imparting knowledge to digital communities across the world.
                </p>
            </div>

            <!-- RIGHT COLUMN: Slider -->
            <div class="reviews-slider-col">
                
                <!-- Navigation Arrows -->
                <div class="slider-nav-buttons">
                    <button id="reviewPrev" class="nav-arrow" aria-label="Previous Review">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 18l-6-6 6-6"/></svg>
                    </button>
                    <button id="reviewNext" class="nav-arrow" aria-label="Next Review">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
                    </button>
                </div>

                <!-- The Scrolling Track -->
                <div class="reviews-track" id="reviewsTrack">
                    
                    <!-- REVIEW CARD 1 -->
                    <div class="review-card">
                        <div class="quote-icon">❝</div>
                        <p class="review-body">
                            KBTech built a user-friendly interface that helped increase client engagement. Additionally, the new dashboards and data infrastructure helped the client's internal team evaluate complete processes ahead of time.
                        </p>
                        <div class="review-author">
                            Manager Business Systems<br>
                            Development, Leading AMC
                        </div>
                    </div>

                    <!-- REVIEW CARD 2 -->
                    <div class="review-card">
                        <div class="quote-icon">❝</div>
                        <p class="review-body">
                            Deliverables positively contributed to business growth, particularly on customer retention and upselling. The team used agile methodology to meet the timelines successfully. Their communication skills were the hallmarks.
                        </p>
                        <div class="review-author">
                            CEO,<br>
                            Transheal USA Inc.
                        </div>
                    </div>

                    <!-- REVIEW CARD 3 -->
                    <div class="review-card">
                        <div class="quote-icon">❝</div>
                        <p class="review-body">
                            The team was incredibly responsive and knowledgeable. They took our vague ideas and transformed them into a robust digital platform that has streamlined our operations significantly.
                        </p>
                        <div class="review-author">
                            Director of Operations,<br>
                            FinTech Global
                        </div>
                    </div>

                    <!-- ADD NEW REVIEWS HERE by copying a .review-card div -->

                </div>
            </div>

        </div>
    </div>
</section>

<script>
// Simple JS to handle the arrow clicks
document.addEventListener("DOMContentLoaded", function() {
    const track = document.getElementById('reviewsTrack');
    const prevBtn = document.getElementById('reviewPrev');
    const nextBtn = document.getElementById('reviewNext');
    
    // Scroll amount: Card width (350) + Gap (30) = 380 approx
    const scrollAmount = 380; 

    nextBtn.addEventListener('click', () => {
        track.scrollBy({ left: scrollAmount, behavior: 'smooth' });
    });

    prevBtn.addEventListener('click', () => {
        track.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
    });
});
</script>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const textItems = document.querySelectorAll('.scroll-content-item');
    const images = document.querySelectorAll('.wcu-sticky-img');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // 1. Get the target ID from the text
                const targetId = entry.target.getAttribute('data-target');
                
                // 2. Hide all images
                images.forEach(img => img.classList.remove('active'));
                
                // 3. Show the matching image
                const activeImg = document.getElementById(targetId);
                if(activeImg) activeImg.classList.add('active');
                
                // 4. Highlight the text
                textItems.forEach(item => item.classList.remove('active-text'));
                entry.target.classList.add('active-text');
            }
        });
    }, {
        threshold: 0.5, // Trigger when 50% of the text is visible
        rootMargin: "-10% 0px -40% 0px" // Adjusts the "active zone" to the middle of screen
    });

    textItems.forEach(item => observer.observe(item));
});
</script>

<!-- CONTACT SECTION -->
<section id="contact" class="contact-section section-padding">
    <div class="container">
        <div class="contact-grid-layout">
            <div class="contact-left">
                <div class="contact-label">GET IN TOUCH</div>
                <h2 class="contact-heading">Let's build something amazing together.</h2>
                <p class="contact-desc">Have a project in mind? We'd love to hear about it. Send us a message and our team will get back to you shortly.</p>
                
                <div class="contact-methods">
                    <div class="method-item">
                        <div class="icon-circle"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg></div>
                        <div>
                            <strong>Email Us</strong>
                            <p>fahad@kbtech.cloud</p>
                        </div>
                    </div>
                     <div class="method-item">
                        <div class="icon-circle"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg></div>
                        <div>
                            <strong>Call Us</strong>
                            <p>+1 (860) 656-4684</p>
                        </div>
                    </div>
                     <div class="method-item">
                        <div class="icon-circle"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg></div>
                        <div>
                            <strong>Visit Us</strong>
                            <p>30 N Gould St #56927
Sheridan, Wyoming 82801</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="contact-right">
                <div class="contact-card">
                     <?php 
                    if ( shortcode_exists( 'contact-form-7' ) ) {
                        echo do_shortcode('[contact-form-7 id="123" title="Contact form 1"]');
                    } else {
                    ?>
                    <form class="clean-form">
                        <div class="form-row">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" placeholder="John Doe">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" placeholder="john@example.com">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Subject</label>
                            <input type="text" placeholder="Project Inquiry">
                        </div>
                        <div class="form-group">
                            <label>Message</label>
                            <textarea rows="4" placeholder="Tell us about your project..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Send Message &rarr;</button>
                    </form>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- JAVASCRIPT FOR TABS -->
<script>
function openServiceTab(evt, tabName) {
    // 1. Get all tab content elements
    var tabContent = document.getElementsByClassName("tab-content");
    for (var i = 0; i < tabContent.length; i++) {
        tabContent[i].style.display = "none";
    }

    // 2. Get all tab buttons
    var tabLinks = document.getElementsByClassName("tab-btn");
    for (var i = 0; i < tabLinks.length; i++) {
        tabLinks[i].className = tabLinks[i].className.replace(" active", "");
    }

    // 3. Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(tabName).style.display = "grid";
    evt.currentTarget.className += " active";
}
</script>

<?php
get_footer();
?>