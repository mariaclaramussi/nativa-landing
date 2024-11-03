<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=Space+Grotesk:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/ec34bba31e.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/aos.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/index.css" type="text/css">

    <link rel="alternate" hreflang="pt-BR" href="https://nativabiotech.com/">
    <link rel="alternate" hreflang="en-US" href="https://nativabiotech.com/en_us/">
    <link rel="alternate" hreflang="pt" href="https://nativabiotech.com/">
    <link rel="alternate" hreflang="en" href="https://nativabiotech.com/en_us/">

    <title>NAtiva</title>
    <?php wp_head(); ?>

</head>


<body <?php body_class(); ?> data-aos-easing="ease-out" data-aos-duration="600" data-aos-delay="0">
    <?php wp_body_open(); ?>
    <section id="intro">
        <header>
            <div class="menu-desktop">
                <div class="container-fluid">
                    <div class="align-logo-menu">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" class="logo"
                            alt="NAtiva">

                        <ul>
                            <li>
                                <button id="company-btn">Sobre</button>
                            </li>
                            <li>
                                <button id="solutions-btn">Soluções</button>
                            </li>
                            <li>
                                <button id="aboutus-btn">Quem somos</button>
                            </li>
                            <li>
                                <button id="news-btn">Notícias</button>
                            </li>
                        </ul>
                    </div>

                    <div class="align-translation-btn">
                        <button id="contact-btn" class="contact">Entre em contato</button>
                        <ul>
                            <li>
                                <a href="https://nativabiotech.com/" class="transaction-btn">
                                    <img class="flag"
                                        src="https://nativabiotech.com/wp-content/plugins/translatepress-multilingual/assets/images/flags/pt_BR.png"
                                        alt="" style="width: 24px; opacity: 0.6; margin: 0">
                                </a>
                            </li>
                            <li>
                                <a href="https://nativabiotech.com/en_us/" class="transaction-btn">
                                    <img class="flag"
                                        src="https://nativabiotech.com/wp-content/plugins/translatepress-multilingual/assets/images/flags/en_US.png"
                                        alt="" style="width: 24px; opacity: 0.6; margin: 0">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="menu-mobile">
                <nav class="navbar navbar-light light-blue lighten-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" class="logo"
                        alt="NAtiva">

                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu-hamb.svg"
                            alt="Menu hamburguer" class="open">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/close-menu-hamb.svg"
                            alt="Fechar menu hamburguer" class="close">
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent1">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" class="logo"
                            alt="NAtiva">

                        <ul>
                            <li>
                                <a href="#company">Sobre</a>
                            </li>
                            <li>
                                <a href="#solutions">Soluções</a>
                            </li>
                            <li>
                                <a href="#">Quem somos</a>
                            </li>
                            <li>
                                <a href="#news">Notícias</a>
                            </li>
                        </ul>

                        <div class="align-translation-btn">
                            <a class="contact" href="#contact">Entre em contato</a>
                            <ul>
                                <li>
                                    <a href="https://nativabiotech.com/" class="transaction-btn">
                                        <span>pt_br</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://nativabiotech.com/en_us/" class="transaction-btn">
                                        <span>en_us</span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div>
                            <p class="slogan">NAtiva, ativo do Brasil.</p>
                            <p>Todos os direitos reservados ©</p>
                            <p>2022 NAtiva Biotech</p>
                        </div>
                    </div>
                </nav>
            </div>
        </header>

        <div class="container">
            <h1 data-localize="title">
                Integrando biodiversidade e <br>biotecnologia para construção<br>
                de um mundo mais saudàvel
            </h1>
            <p>
                Utilizamos biotecnologia para transformar ativos da biodiversidade<br>
                brasileira em soluções inovadoras endereçadas à saúde e bem-estar
            </p>
        </div>

        <div class="overlay"></div>
        <svg class="scroll" width="40px" height="100%" viewBox="0 0 247 390" version="1.1"
            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:1.5;">
            <path id="wheel" d="M123.359,79.775l0,72.843" style="fill:none;stroke:#fff;stroke-width:20px;"></path>
            <path id="mouse"
                d="M236.717,123.359c0,-62.565 -50.794,-113.359 -113.358,-113.359c-62.565,0 -113.359,50.794 -113.359,113.359l0,143.237c0,62.565 50.794,113.359 113.359,113.359c62.564,0 113.358,-50.794 113.358,-113.359l0,-143.237Z"
                style="fill:none;stroke:#fff;stroke-width:20px;"></path>
        </svg>
    </section>