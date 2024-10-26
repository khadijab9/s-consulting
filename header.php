<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://kit.fontawesome.com/e802443e36.js" crossorigin="anonymous"></script>
    <title>S Consulting </title>
    <?php wp_head() ?>
</head>

<body>

    <header>
        <nav id=navigation>
            <div class=logo-image>
                <!-- revnoi à l'url de la page d'accueil du site -->
                <a class="logo-site" href="<?php echo home_url(); ?>">
                    <img id="img-logo" src=" <?php echo get_template_directory_uri() . '/assets/img/logosconsulting.jpg';    ?> " alt="logo du site S consulting">
                    <!-- <h1 class="logo-txt"> S Consulting</h1> -->
                </a>

            </div>
            <div class="burgerMenu">
                <span class="line l1"></span>
                <span class="line l2"></span>
                <span class="line l3"></span>
            </div>

            <?php
            wp_nav_menu(array(
                'theme_location' => 'main-menu',
                'menu_class' => 'navbar-nav mr-auto menu-full',
            )); ?>
        </nav>
        <?php
        if (is_front_page()) {
        ?>


        <?php
        }
        ?>
        <?php if (!is_single()) : ?>
            <img id="image-hero" src=" <?php echo get_template_directory_uri() . '/assets/img/bureau.png';    ?> " alt="image hero header bureau">
            <div class="contenth2">
                <h2 class="titleh2">Facilitez vos démarches et accédez à un accompagnement personnalisé</h2>
                <p class="paraHero">Vous avez besoin d'un accompagnement pour vos démarches administratives ou de coaching pour surmonter des obstacles personnels ou professionnels ? Je vous propose un service clé en main pour vous simplifier la vie. Que ce soit pour vos démarches administratives, la traduction de documents, ou un accompagnement personnalisé, je suis là pour vous guider à chaque étape.</p>
            </div>
        <?php endif; ?>
    </header>
    <main>