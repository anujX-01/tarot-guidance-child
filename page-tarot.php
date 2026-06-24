<?php
/*
Template Name: Tarot Page
*/

get_header();
?>

<script>
const tarotImagePath =
"<?php echo get_stylesheet_directory_uri(); ?>/assets/images/tarot-card/";
</script>

    <!-- hero section starting -->

    <section class="tarot-cards-hero">

    <div class="tarot-cards-hero-overlay"></div>

    <div class="tarot-cards-hero-content">

        <span class="hero-tag">
            TAROT CARD MEANINGS
        </span>

        <h1>
            Discover The Wisdom <br>
            Of All 78 Tarot Cards
        </h1>

        <p>
            Explore the complete tarot deck and uncover the deeper meanings,
            symbolism, and guidance behind every card. From Major Arcana to
            Cups, Pentacles, Swords, and Wands, begin your journey into tarot wisdom.
        </p>

        <a href="#tarot-card-library" class="hero-btn">
            Explore Cards
        </a>

    </div>

</section>

<!-- hero section ending  -->

<!-- search and filter section starting -->

<section class="tarot-search-filter-section" id="tarot-card-library">

    <div class="tarot-search-filter-container">

        <div class="tarot-search-box">

            <div class="search-icon">
                <i class="fas fa-search"></i>
            </div>

            <input
                type="text"
                id="tarotSearch"
                placeholder="Search Tarot Card..."
            >

        </div>

        <div class="tarot-filter-wrapper">

            <button class="tarot-filter-btn active" data-filter="all">
                <span>✦</span>
                All Cards
            </button>

            <button class="tarot-filter-btn" data-filter="major">
                <span>☽</span>
                Major Arcana
            </button>

            <button class="tarot-filter-btn" data-filter="cups">
                <span>♛</span>
                Cups
            </button>

            <button class="tarot-filter-btn" data-filter="pentacles">
                <span>◈</span>
                Pentacles
            </button>

            <button class="tarot-filter-btn" data-filter="swords">
                <span>⚔</span>
                Swords
            </button>

            <button class="tarot-filter-btn" data-filter="wands">
                <span>❈</span>
                Wands
            </button>

        </div>

    </div>

</section>

<!-- search and filter section ending  -->

<!-- tarot-card grid section starting  -->

<section class="tarot-vault-section">

    <div class="tarot-vault-bg-glow"></div>

    <div class="tarot-vault-header">

        <span class="vault-tag">
            TAROT CARD LIBRARY
        </span>

        <h2>
            Explore The Complete Tarot Deck
        </h2>

        <p>
            Discover the wisdom, symbolism, and spiritual guidance hidden within every tarot card.
        </p>

    </div>

    <div id="tarotCardsGrid" class="tarot-cards-grid"></div>

</section>

<!-- tarot crad grid section ending  -->

    

<?php
get_footer();
?>

