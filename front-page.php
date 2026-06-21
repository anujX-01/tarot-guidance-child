<?php
/*
Template Name: Home Page
*/
get_header();
?>

<!-- =========================
         HERO SECTION START
    ========================= -->

    <section class="hero-section">

        <!-- Slide 1 -->
        <div class="hero-slide active">

           <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/image.png" alt="Tarot Reading">

            <div class="hero-overlay"></div>

            <div class="hero-content">

                <span class="hero-subtitle">
                    ✦ Professional Tarot Guidance
                </span>

                <h1>
                    Discover Clarity.<br>
                    Embrace Your Path.
                </h1>

                <p>
                    Gain deeper insight into love, career, relationships
                    and life decisions through personalized tarot readings.
                </p>

                <a href="<?php echo site_url('/booking'); ?>" class="hero-btn">
                    Book Your Session
                    <span class="btn-arrow">→</span>
                </a>

            </div>

        </div>

        <!-- Slide 2 -->
        <div class="hero-slide">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/image2.jpg" alt="Tarot Reading">
            <div class="hero-overlay"></div>

            <div class="hero-content">

                <span class="hero-subtitle">
                    ✦ Professional Tarot Guidance
                </span>

                <h1>
                    Discover Clarity.<br>
                    Embrace Your Path.
                </h1>

                <p>
                    Gain deeper insight into love, career, relationships
                    and life decisions through personalized tarot readings.
                </p>

                <a href="<?php echo site_url('/booking'); ?>" class="hero-btn">
                    Book Your Session
                    <span class="btn-arrow">→</span>
                </a>

            </div>
        </div>

        <!-- Slide 3 -->
        <div class="hero-slide">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/image3.jpg" alt="Tarot Reading">
            <div class="hero-overlay"></div>

            <div class="hero-content">

                <span class="hero-subtitle">
                    ✦ Professional Tarot Guidance
                </span>

                <h1>
                    Discover Clarity.<br>
                    Embrace Your Path.
                </h1>

                <p>
                    Gain deeper insight into love, career, relationships
                    and life decisions through personalized tarot readings.
                </p>

                <a href="<?php echo site_url('/booking'); ?>" class="hero-btn">
                    Book Your Session
                    <span class="btn-arrow">→</span>
                </a>

            </div>
        </div>

        <!-- Slide 4 -->
        <div class="hero-slide">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/image4.jpg" alt="Tarot Reading">
            <div class="hero-overlay"></div>

            <div class="hero-content">

                <span class="hero-subtitle">
                    ✦ Professional Tarot Guidance
                </span>

                <h1>
                    Discover Clarity.<br>
                    Embrace Your Path.
                </h1>

                <p>
                    Gain deeper insight into love, career, relationships
                    and life decisions through personalized tarot readings.
                </p>

                <a href="<?php echo site_url('/booking'); ?>" class="hero-btn">
                    Book Your Session
                    <span class="btn-arrow">→</span>
                </a>

            </div>
        </div>

        <!-- Previous Button -->
        <button class="hero-arrow hero-prev" aria-label="Previous Slide">
            &#10094;
        </button>

        <!-- Next Button -->
        <button class="hero-arrow hero-next" aria-label="Next Slide">
            &#10095;
        </button>

        <!-- Dots -->
        <div class="hero-dots">

            <span class="hero-dot active"></span>
            <span class="hero-dot"></span>
            <span class="hero-dot"></span>
            <span class="hero-dot"></span>

        </div>

        <!-- Decorative Elements -->

        <div class="floating-orb orb-1"></div>

        <div class="floating-orb orb-2"></div>

        <div class="floating-star star-1">✦</div>

        <div class="floating-star star-2">✦</div>

        <div class="floating-star star-3">✦</div>

    </section>

    <!-- =========================
         HERO SECTION END
    ========================= -->

    <!-- about section code starting  -->

 <section class="about-section">

    <div class="about-container">

        <!-- Image Side -->

        <div class="about-image-wrapper">

            <div class="image-glow"></div>

            <div class="about-image-frame">

                <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=800"
                    alt="Tarot Reader">

            </div>

            <div class="floating-symbol symbol-1">✦</div>
            <div class="floating-symbol symbol-2">☾</div>
            <div class="floating-symbol symbol-3">✧</div>

        </div>

        <!-- Content Side -->

        <div class="about-content">

            <span class="about-tag">
                ABOUT TAROT READER
            </span>

            <h2>
                Guiding Souls With
                <span>Clarity & Intuition</span>
            </h2>

            <p>
                Welcome to a space where insight meets intuition.
                Through personalized tarot readings, I help people gain
                clarity in love, relationships, career, and life decisions.
            </p>

            <p>
                My goal is to provide guidance, confidence, and a deeper
                understanding of the path ahead while creating a safe and
                supportive experience for every client.
            </p>

            <a href="<?php echo site_url('/about'); ?>" class="about-btn">
                Read My Full Journey
            </a>

        </div>

    </div>

    <div class="particle particle-1"></div>
    <div class="particle particle-2"></div>
    <div class="particle particle-3"></div>
     <div class="particle particle-4"></div>

</section>

<!-- about section end  -->

<!-- service section starting -->


<section class="services-section">

    <div class="services-header">

        <span class="services-tag">
            SERVICES OVERVIEW
        </span>

        <h2>
            Readings Designed For
            <span>Your Journey</span>
        </h2>

        <p>
            Personalized tarot guidance designed to bring clarity,
            confidence and direction to every stage of life.
        </p>

    </div>

    <div class="services-grid">

       <a href="<?php echo site_url('/services'); ?>" class="service-card">
            <div class="service-top">

                <span class="service-number">
                    01
                </span>

                <span class="service-icon">
                    ✦
                </span>

            </div>

            <h3>
                Love & Relationship
            </h3>

            <p>
                Clarity for love, emotions and meaningful
                connections.
            </p>

            <span class="service-arrow">
                →
            </span>

        </a>

        <a href="<?php echo site_url('/services'); ?>" class="service-card">

            <div class="service-top">

                <span class="service-number">
                    02
                </span>

                <span class="service-icon">
                    ✦
                </span>

            </div>

            <h3>
                Career & Finance
            </h3>

            <p>
                Guidance for growth, opportunities and
                financial direction.
            </p>

            <span class="service-arrow">
                →
            </span>

        </a>

        <a href="<?php echo site_url('/services'); ?>" class="service-card">

            <div class="service-top">

                <span class="service-number">
                    03
                </span>

                <span class="service-icon">
                    ✦
                </span>

            </div>

            <h3>
                Spiritual Guidance
            </h3>

            <p>
                Connect deeply with your intuition
                and purpose.
            </p>

            <span class="service-arrow">
                →
            </span>

        </a>

        <a href="<?php echo site_url('/services'); ?>" class="service-card">

            <div class="service-top">

                <span class="service-number">
                    04
                </span>

                <span class="service-icon">
                    ✦
                </span>

            </div>

            <h3>
                Life Path Reading
            </h3>

            <p>
                Discover possibilities, strengths
                and future direction.
            </p>

            <span class="service-arrow">
                →
            </span>

        </a>

    </div>

    <div class="services-btn-wrapper">

       <a href="<?php echo site_url('/services'); ?>" class="services-btn">
            View All Services
        </a>

    </div>

</section>



<!-- service section end  -->

<!-- why choose me section starting -->

<section class="why-choose-section">

    <div class="why-header">

        <span class="why-tag">
            WHY CHOOSE ME
        </span>

        <h2>
            Trusted Guidance.
            <span>Meaningful Insights.</span>
        </h2>

    </div>

    <div class="why-journey">

        <div class="why-step">

            <div class="why-circle">
                01
            </div>

            <h3>
                Years Of Experience
            </h3>

            <p>
                Professional tarot guidance built through years
                of helping clients find clarity and confidence.
            </p>

        </div>

        <div class="why-line"></div>

        <div class="why-step">

            <div class="why-circle">
                02
            </div>

            <h3>
                Private Sessions
            </h3>

            <p>
                Every reading remains completely confidential,
                respectful and secure.
            </p>

        </div>

        <div class="why-line"></div>

        <div class="why-step">

            <div class="why-circle">
                03
            </div>

            <h3>
                Personal Guidance
            </h3>

            <p>
                Each session is tailored specifically to your
                questions and circumstances.
            </p>

        </div>

        <div class="why-line"></div>

        <div class="why-step">

            <div class="why-circle">
                04
            </div>

            <h3>
                Classical Approach
            </h3>

            <p>
                Combining intuition, symbolism and traditional
                tarot wisdom for meaningful insight.
            </p>

        </div>

    </div>

</section>

<!-- why choose me section end -->

<!-- how it work section starting  -->

<section class="process-section">

    <div class="process-header">

        <span class="process-tag">
            HOW IT WORKS
        </span>

        <h2>
            Your Journey In
            <span>Three Simple Steps</span>
        </h2>

    </div>

    <div class="process-wrapper">

        <div class="process-step">

            <div class="step-circle">
                01
            </div>

            <h3>
                Choose Reading
            </h3>

            <p>
                Select the tarot reading that best matches your needs.
            </p>

        </div>

        <div class="process-line"></div>

        <div class="process-step">

            <div class="step-circle">
                02
            </div>

            <h3>
                Book Your Slot
            </h3>

            <p>
                Pick a convenient date and time for your session.
            </p>

        </div>

        <div class="process-line"></div>

        <div class="process-step">

            <div class="step-circle">
                03
            </div>

            <h3>
                Receive Guidance
            </h3>

            <p>
                Gain clarity, insight and confidence through your reading.
            </p>

        </div>

    </div>

</section>
<!-- how it work section end  -->

<!-- testimonial section starting -->

<section class="testimonial-section">

    <div class="testimonial-header">

        <span class="testimonial-tag">
            TESTIMONIALS
        </span>

        <h2>
            What My Clients
            <span>Say</span>
        </h2>

    </div>

    <div class="testimonial-slider">

        <!-- Slide 1 -->

        <div class="testimonial-slide active">

            <div class="quote-icon">❝</div>

            <div class="stars">
                ★★★★★
            </div>

            <p>
                The reading gave me clarity during a difficult time in my life.
                Everything was explained with kindness and honesty. I left the
                session feeling confident and at peace.
            </p>

            <h4>
                Sarah Johnson
            </h4>

        </div>

        <!-- Slide 2 -->

        <div class="testimonial-slide">

            <div class="quote-icon">❝</div>

            <div class="stars">
                ★★★★★
            </div>

            <p>
                Amazing experience. The guidance helped me make an important
                career decision. I highly recommend these readings to anyone
                looking for direction.
            </p>

            <h4>
                Michael Smith
            </h4>

        </div>

        <!-- Slide 3 -->

        <div class="testimonial-slide">

            <div class="quote-icon">❝</div>

            <div class="stars">
                ★★★★★
            </div>

            <p>
                Professional, compassionate and insightful. The session
                answered many questions I had been carrying for months.
            </p>

            <h4>
                Emily Davis
            </h4>

        </div>

        <!-- Navigation -->

        <button class="testimonial-btn prev-btn">
            &#10094;
        </button>

        <button class="testimonial-btn next-btn">
            &#10095;
        </button>

    </div>

</section>

<!-- testimonial section end  -->




<!-- frequency ask question section starting  -->
 <section class="faq-section">

    <div class="faq-header">

        <span class="faq-tag">
            FAQ
        </span>

        <h2>
            Frequently Asked
            <span>Questions</span>
        </h2>

    </div>

    <div class="faq-container">

        <div class="faq-item">

            <button class="faq-question">

                <span>
                    What are tarot readings?
                </span>

                <span class="faq-icon">+</span>

            </button>

            <div class="faq-answer">

                <p>
                    Tarot readings provide guidance and insight into
                    different areas of life such as relationships,
                    career, personal growth and future possibilities.
                </p>

            </div>

        </div>

        <div class="faq-item">

            <button class="faq-question">

                <span>
                    Is my reading confidential?
                </span>

                <span class="faq-icon">+</span>

            </button>

            <div class="faq-answer">

                <p>
                    Yes. Every session remains completely private and
                    confidential.
                </p>

            </div>

        </div>

        <div class="faq-item">

            <button class="faq-question">

                <span>
                    How long does a session last?
                </span>

                <span class="faq-icon">+</span>

            </button>

            <div class="faq-answer">

                <p>
                    Most sessions last between 30 and 60 minutes
                    depending on the service selected.
                </p>

            </div>

        </div>

        <div class="faq-item">

            <button class="faq-question">

                <span>
                    Do you offer online readings?
                </span>

                <span class="faq-icon">+</span>

            </button>

            <div class="faq-answer">

                <p>
                    Yes. Readings can be conducted online through video
                    call or other preferred communication methods.
                </p>

            </div>

        </div>

    </div>

</section>
<!-- frequency ask question section ending  -->

<!-- CTA section starting -->

<section class="cta-section">

    <div class="cta-glow glow-1"></div>
    <div class="cta-glow glow-2"></div>

    <div class="cta-content">

        <span class="cta-tag">
            YOUR JOURNEY STARTS HERE
        </span>

        <h2>
            Ready To Receive
            <span>Guidance & Clarity?</span>
        </h2>

        <p>
            Book your personalized tarot reading today and gain insight,
            confidence, and direction for your next chapter.
        </p>

        <a href="<?php echo site_url('/booking'); ?>" class="hero-btn">
            Book Your Session
            <span>→</span>
        </a>

    </div>

</section>

<!-- CTA section ending -->

<!-- contact us section starting -->
 <section class="contact-section" id="contact">

    <div class="contact-container">

        <!-- Left Side -->

        <div class="contact-content">

            <span class="contact-tag">
                GET IN TOUCH
            </span>

            <h2>
                Let's Start Your
                <span>Journey Together</span>
            </h2>

            <p>
                Have questions about a reading or want guidance before booking?
                Reach out and I'll be happy to help you find the right path.
            </p>

            <div class="contact-info">

                <div class="contact-item">

                    <div class="contact-icon">
                        ✦
                    </div>

                    <div>
                        <h4>Email</h4>
                        <p>hello@tarotreader.com</p>
                    </div>

                </div>

                <div class="contact-item">

                    <div class="contact-icon">
                        ☎
                    </div>

                    <div>
                        <h4>Phone</h4>
                        <p>+91 98765 43210</p>
                    </div>

                </div>

                <div class="contact-item">

                    <div class="contact-icon">
                        ⌂
                    </div>

                    <div>
                        <h4>Location</h4>
                        <p>Available Worldwide Online</p>
                    </div>

                </div>

            </div>

            <div class="social-links">

                <a href="#">f</a>
                <a href="#">i</a>
                <a href="#">x</a>
                <a href="#">▶</a>

            </div>

        </div>

        <!-- Right Side -->

        <div class="contact-form-area">

            <div class="form-glow"></div>

            <!-- Replace this later with WordPress Form Plugin -->

            <div class="form-placeholder">

                <h3>
                    Contact Form
                </h3>

                <!-- <p>
                    Replace this area with your WordPress Form Plugin shortcode.
                </p> -->

       <?php echo do_shortcode('[contact-form-7 id="313df27" title="Contact From"]'); ?>

            </div>

        </div>

    </div>

</section> 
<!-- contact us section ending -->
 

<?php
get_footer();
?>