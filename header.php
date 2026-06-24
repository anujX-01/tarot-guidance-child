<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="tarot-header">

    <div class="tarot-header-inner">

        <a href="<?php echo site_url('/'); ?>" class="logo">

            <span class="logo-icon">✦</span>

            <span class="logo-text">Celestial Insights</span>

        </a>

        <button class="menu-toggle" id="menuToggle">
            ☰
        </button>

        <nav class="navbar" id="navbar">

            <a href="<?php echo site_url('/'); ?>">Home</a>

            <a href="<?php echo site_url('/about'); ?>">About</a>

            <a href="<?php echo site_url('/service'); ?>">Services</a>

            <a href="<?php echo site_url('/tarot-cards'); ?>">
                Tarot Cards
            </a>

            <a href="<?php echo site_url('/testimonial'); ?>">
                Testimonial
            </a>

          <a href="<?php echo site_url('/#contact'); ?>">
              Contact
           </a>
  
            <a href="<?php echo site_url('/booking'); ?>" class="header-btn">
                Book Reading
            </a>

        </nav>

    </div>

</header>