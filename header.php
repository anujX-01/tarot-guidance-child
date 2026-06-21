<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="site-header">

    <div class="header-container">

        <!-- Logo -->

        <a href="<?php echo site_url('/'); ?>" class="logo">

            <span class="logo-icon">✦</span>

            <span class="logo-text">
                Celestial Insights
            </span>

        </a>

        <!-- Navigation -->

        <nav class="navbar">

            <a href="<?php echo site_url('/'); ?>">Home</a>

            <a href="<?php echo site_url('/about'); ?>">
                About
            </a>

            <a href="<?php echo site_url('/service'); ?>">
                Services
            </a>

            

            <a href="<?php echo site_url('/#contact'); ?>">
                Contact
            </a>

        </nav>

        <!-- CTA -->

        <a href="<?php echo site_url('/booking'); ?>" class="header-btn">

            Book Reading

        </a>

    </div>

</header>