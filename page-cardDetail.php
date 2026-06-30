<?php
/*
Template Name: cardDetail Page
*/

get_header();
?>

<script>

const imageBasePath =
"<?php echo get_stylesheet_directory_uri(); ?>/assets/images/tarot-card/";
const cardDetailPage =
"<?php echo site_url('/tarot-card-detail/'); ?>";
</script>



 <!-- hero section starting -->

<section class="tarot-detail-hero">

    <div class="hero-bg-glow hero-glow-1"></div>
    <div class="hero-bg-glow hero-glow-2"></div>

    <div class="tarot-detail-container">

        <div class="tarot-image-side">

            <div class="tarot-card-frame">

                <img
                    id="heroCardImage"
                    src=""
                    alt=""
                >

            </div>

        </div>

        <div class="tarot-content-side">

            <span
                id="heroCardType"
                class="card-category"
            ></span>

            <h1
                id="heroCardTitle"
                class="hero-card-title"
            ></h1>

            <div class="hero-keywords">

                <span>Freedom</span>
                <span>Adventure</span>
                <span>Trust</span>

            </div>

            <p
                id="heroCardDescription"
                class="hero-description"
            >
                The Fool represents stepping into the unknown
                with faith, optimism and trust in the journey.
                It symbolizes new beginnings and limitless
                possibilities.
            </p>

            <div class="hero-buttons">

                <a href="#meaning-section"
                   class="hero-btn-primary">
                    Explore Meaning
                </a>

                <a href="#"
                   class="hero-btn-secondary">
                    Book Reading
                </a>

            </div>

        </div>

    </div>

</section>

    <!-- hero section ending  -->

    <!-- meaning section starting -->
  
 <section class="card-meaning-section" id="meaning-section">

    <div class="meaning-bg-glow meaning-glow-1"></div>
    <div class="meaning-bg-glow meaning-glow-2"></div>

    <div class="meaning-container">

        <span class="meaning-tag">
            CARD CORE MEANING
        </span>

        <h2 class="meaning-title" id = "meaning-title">
            <!-- Trust The Jounery -->
        </h2>

        <p class="meaning-subtitle" id = "meaningDescription">
            <!-- The Fool reminds us that every new beginning starts with a leap of faith.
            Growth comes when we embrace the unknown and trust our inner guidance. -->
        </p>

        <div class="meaning-insights-grid">

            <div class="meaning-insight-card">

                <div class="insight-icon">
                    ✦
                </div>

                <h3>
                    Symbolism
                </h3>

                <p id = "symbolismText">
                    <!-- Represents fresh starts, innocence, freedom, curiosity and limitless possibilities. -->
                </p>

            </div>

            <div class="meaning-insight-card">

                <div class="insight-icon">
                    ☾
                </div>

                <h3>
                    Message
                </h3>

                <p id = "messageText">
                    <!-- Step forward with confidence. Trust your instincts and remain open to opportunities. -->
                </p>

            </div>

            <div class="meaning-insight-card">

                <div class="insight-icon">
                    ✧
                </div>

                <h3>
                    Life Lesson
                </h3>

                <p id = "lifeLessonText">
                    <!-- Growth begins when fear no longer controls your decisions and actions. -->
                </p>

            </div>

        </div>

        <div class="meaning-content-box">

            <div class="meaning-content-line"></div>

            <div class="meaning-content">

                <h3>
                    Detailed Meaning
                </h3>

                <p id = "detailedMeaningText">
                    <!-- The Fool symbolizes the beginning of a journey filled with opportunities,
                    discoveries and personal growth. It encourages you to embrace uncertainty
                    with optimism and courage. -->
                </p>

                <p id = "detailedMeaningText" >
                    <!-- This card reminds us that every meaningful adventure starts with a single
                    step. By trusting yourself and remaining open-minded, you create space
                    for transformation and new possibilities to enter your life. -->
                </p>

            </div>

        </div>

    </div>

</section>

    <!-- meaning section ending -->

    <!-- Upright vs Reversed section starting  -->
    
<section class="upright-reversed-section">

    <div class="ur-glow ur-glow-1"></div>
    <div class="ur-glow ur-glow-2"></div>

    <div class="ur-container">

        <div class="ur-header">

            <span class="ur-tag">
                DUAL ENERGY OF THE CARD
            </span>

            <h2 class="ur-title">
                Upright vs Reversed
            </h2>

            <p class="ur-subtitle">
                Every tarot card carries two energies. One reveals its natural flow,
                while the other highlights lessons, blockages or hidden challenges.
            </p>

        </div>

        <div class="ur-comparison-wrapper">

            <!-- Upright -->

            <div class="ur-card upright-card">

                <div class="energy-badge upright-badge">
                    UPRIGHT ENERGY
                </div>

                <h3 id = "uprightTitle">
                    <!-- Trust The Journey -->
                </h3>

                <p id = "uprightDescription">
                    <!-- The Fool in its upright position represents optimism,
                    freedom, faith and embracing new opportunities. -->
                </p>

                <!-- <ul class="energy-points" >

                    <li >New Beginner</li>
                    <li >Adventure</li>
                    <li>Faith</li>
                    <li>Opportunity</li>
                    <li>Personal Growth</li>

                </ul> -->

                <ul class="energy-points" id="uprightKeywords"></ul>

                <div class="energy-line"></div>

            </div>

            <!-- Center Axis -->

            <div class="energy-axis">

                <div class="axis-circle"></div>

                <div class="axis-line"></div>

                <div class="axis-circle"></div>

            </div>

            <!-- Reversed -->

            <div class="ur-card reversed-card">

                <div class="energy-badge reversed-badge">
                    REVERSED ENERGY
                </div>

                <h3 id = "reversedTitle" >
                    <!-- Fear Of The Unknown -->
                </h3>

                <p id = "reversedDescription">
                    Reversed, The Fool may indicate hesitation,
                    reckless decisions or resistance to change.
                </p>

                <ul class="energy-points" id = "reversedKeywords" >

                    <!-- <li>Fear</li>
                    <li>Risk Taking</li>
                    <li>Delay</li>
                    <li>Doubt</li>
                    <li>Lack Of Direction</li> -->

                </ul>

                <div class="energy-line"></div>

            </div>

        </div>

    </div>

</section>

    <!-- Upright vs Reversed section ending  -->

    <!-- keyword section starting  -->

<section class="tarot-keywords-section">

    <div class="keywords-glow keywords-glow-1"></div>
    <div class="keywords-glow keywords-glow-2"></div>

    <div class="keywords-container">

        <div class="keywords-header">

            <span class="keywords-tag">
                ESSENCE OF THE CARD
            </span>

            <h2 class="keywords-title">
                Keywords & Energies
            </h2>

            <p class="keywords-subtitle">
                Every tarot card carries unique vibrations and symbolic energies.
                These keywords reveal the core themes behind the card's message.
            </p>

        </div>

        <div class="keywords-orbit-wrapper">

            <div class="keyword-center-core">

                <span id = "keywordsTitle">
                    <!-- THE FOOL -->
                </span>

            </div>

            <div class="keyword-pill keyword-1">
                <!-- Freedom -->
            </div>

            <div class="keyword-pill keyword-2">
                <!-- Adventure -->
            </div>

            <div class="keyword-pill keyword-3">
                <!-- Trust -->
            </div>

            <div class="keyword-pill keyword-4">
                <!-- Optimism -->
            </div>

            <div class="keyword-pill keyword-5">
                <!-- Potential -->
            </div>

            <div class="keyword-pill keyword-6">
                <!-- Curiosity -->
            </div>

            <div class="keyword-pill keyword-7">
                <!-- Growth -->
            </div>

            <div class="keyword-pill keyword-8">
                Discovery
            </div>

        </div>

        <div class="keyword-energy-panel">

            <div class="energy-item">

                <span class="energy-number">
                    01
                </span>

                <div>

                    <h3 id ="positiveTitle">
                      <!-- Positive Energy -->
                    </h3>

                    <p id = "positiveDescription">
                        <!-- Confidence, exploration, trust and embracing new opportunities. -->
                    </p>

                </div>

            </div>

            <div class="energy-item">

                <span class="energy-number">
                    02
                </span>

                <div>

                    <h3 id = "spiritualEnergyTitle">
                        <!-- Spiritual Energy -->
                    </h3>

                    <p id = "spiritualEnergyDescription" >
                        <!-- Trusting divine timing and following your soul's journey. -->
                    </p>

                </div>

            </div>

            <div class="energy-item">

                <span class="energy-number">
                    03
                </span>

                <div>

                    <h3 id = "shadowTitle">
                        <!-- Shadow Energy -->
                    </h3>

                    <p id = "shadowDescription">
                        <!-- Recklessness, uncertainty and fear of making the wrong choice. -->
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

    <!-- keyword section ending  -->

    <!-- Love / Career / Spiritual section starting  -->
  
 <section class="love-career-spiritual-section">

    <div class="lcs-glow lcs-glow-1"></div>
    <div class="lcs-glow lcs-glow-2"></div>

    <div class="lcs-container">

        <div class="lcs-header">

            <span class="lcs-tag">
                REAL LIFE INTERPRETATIONS
            </span>

            <h2 class="lcs-title">
                Love • Career • Spiritual
            </h2>

            <p class="lcs-subtitle">
                Discover how this tarot card influences relationships,
                professional growth and your spiritual journey.
            </p>

        </div>

        <div class="lcs-grid">

            <!-- LOVE -->

            <div class="lcs-card love-card">

                <div class="lcs-icon">
                    ♥
                </div>

                <div class="lcs-card-number">
                    01
                </div>

                <h3 id = "loveTitle">
                    <!-- Love & Relationships -->
                </h3>

                <p id = "loveDescription">
                    <!-- The Fool encourages openness, trust and emotional vulnerability.
                    It often signals new romantic beginnings, exciting connections
                    and opportunities to experience love without fear. -->
                </p>

                <div class="lcs-highlight" id = "loveHighlight">
                    <!-- New romance, trust and emotional freedom. -->
                </div>

            </div>

            <!-- CAREER -->

            <div class="lcs-card career-card">

                <div class="lcs-icon">
                    ✦
                </div>

                <div class="lcs-card-number">
                    02
                </div>

                <h3 id = "careerTitle">
                    <!-- Career & Success -->
                </h3>

                <p id = "careerDescription">
                    <!-- This card suggests taking bold steps toward your goals.
                    New opportunities, career shifts and innovative ideas
                    can lead to significant growth and success. -->
                </p>

                <div class="lcs-highlight" id = "careerHighlight">
                    <!-- New opportunities and courageous action. -->
                </div>

            </div>

            <!-- SPIRITUAL -->

            <div class="lcs-card spiritual-card">

                <div class="lcs-icon">
                    ☾
                </div>

                <div class="lcs-card-number">
                    03
                </div>

                <h3 id = "spiritualTitle">
                    <!-- Spiritual Journey -->
                </h3>

                <p id = "spiritualDescription">
                    <!-- Spiritually, The Fool represents faith in the universe.
                    It encourages you to release control, trust divine timing
                    and embrace personal transformation. -->
                </p>

                <div class="lcs-highlight" id = "spiritualHighlight">
                    <!-- Faith, trust and spiritual awakening. -->
                </div>

            </div>

        </div>

    </div>

</section>

    <!-- Love / Career / Spiritual section ending  -->

    <!-- related card section starting  -->


    <section class="related-cards-section">

    <div class="related-glow related-glow-1"></div>
    <div class="related-glow related-glow-2"></div>

    <div class="related-container">

        <div class="related-header">

            <span class="related-tag">
                EXPLORE MORE CARDS
            </span>

            <h2 class="related-title">
                Related Tarot Cards
            </h2>

            <p class="related-subtitle">
                Every card is connected to a larger story. Discover cards that
                share similar energies, lessons and spiritual themes.
            </p>

        </div>

        <div class="related-cards-grid" id="relatedCards">

            <!-- CARD 1 -->

            <article class="related-card">

                <div class="related-card-image">

                    <img
                        src="tarot card/The_Magician.png"
                        alt="The Magician"
                    >

                    <div class="related-card-overlay">

                        <a href="#" class="related-card-btn">
                            Explore Card
                        </a>

                    </div>

                </div>

                <div class="related-card-content">

                    <span class="related-card-type">
                        Major Arcana
                    </span>

                    <h3>
                        The Magician
                    </h3>

                    <p>
                        Manifestation, confidence and personal power.
                    </p>

                </div>

            </article>

            <!-- CARD 2 -->

            <article class="related-card featured-card">

                <div class="related-card-image">

                    <img
                        src="tarot card/The_Star.png"
                        alt="The Star"
                    >

                    <div class="related-card-overlay">

                        <a href="#" class="related-card-btn">
                            Explore Card
                        </a>

                    </div>

                </div>

                <div class="related-card-content">

                    <span class="related-card-type">
                        Major Arcana
                    </span>

                    <h3>
                        The Star
                    </h3>

                    <p>
                        Hope, inspiration and spiritual guidance.
                    </p>

                </div>

            </article>

            <!-- CARD 3 -->

            <article class="related-card">

                <div class="related-card-image">

                    <img
                        src="tarot card/The_Sun.png"
                        alt="The Sun"
                    >

                    <div class="related-card-overlay">

                        <a href="#" class="related-card-btn">
                            Explore Card
                        </a>

                    </div>

                </div>

                <div class="related-card-content">

                    <span class="related-card-type">
                        Major Arcana
                    </span>

                    <h3>
                        The Sun
                    </h3>

                    <p>
                        Success, joy, positivity and fulfillment.
                    </p>

                </div>

            </article>

        </div>

    </div>

</section>

    <!-- related card section ending  -->

    <!-- CTA SECTION STARTING  -->

    <section class="book-reading-cta-section">

    <div class="cta-orb cta-orb-1"></div>
    <div class="cta-orb cta-orb-2"></div>

    <div class="book-reading-cta-container">

        <div class="cta-card">

            <div class="cta-stars">

                <span>✦</span>
                <span>☾</span>
                <span>✧</span>

            </div>

            <span class="cta-tag">
                PERSONAL GUIDANCE AWAITS
            </span>

            <h2 class="cta-title">
                Ready To Discover
                What The Cards
                Reveal For You?
            </h2>

            <p class="cta-description">

                While tarot card meanings provide valuable insight,
                your personal reading reveals the messages, guidance
                and opportunities that are uniquely connected to your journey.

            </p>

            <div class="cta-features">

                <div class="cta-feature">
                    <span>✦</span>
                    Personalized Reading
                </div>

                <div class="cta-feature">
                    <span>☾</span>
                    Love & Relationship Guidance
                </div>

                <div class="cta-feature">
                    <span>✧</span>
                    Career & Spiritual Insights
                </div>

            </div>

            <div class="cta-buttons">

                <a href="/booking" class="cta-primary-btn">
                    Book Your Reading
                </a>

                <a href="/services" class="cta-secondary-btn">
                    View Services
                </a>

            </div>

        </div>

    </div>

</section>

    <!-- CTA SECTION ENDING  -->

<?php
get_footer();
?>

