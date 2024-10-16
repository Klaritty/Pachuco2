<?php
/*
Template Name: Home
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Terapia psicológica y espiritual: sana mente, cuerpo y espíritu a través de Constelaciones familiares, canalización con guías y seres espirituales; limpieza energética o defensa psíquica. Sesiones presenciales y en línea.">
    <meta name="keywords" content="terapia, psicológica,presencial, en línea, psicóloga, psicoterapeuta, Nuevo, León">

    <meta property="og:title" content="Cosnthera">
    <meta property="og:description"
        content="Descubre un espacio de sanación. Nuestros servicios incluyen: terapia psicológica, constelaciones familiares, limpieza energética, defensa psíquica y canalización espiritual. Atención online y presencial.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo get_permalink(); ?>">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Cosnthera">
    <meta name="twitter:description"
        content="Espacio psicoterapéutico y holístico en donde te reconciliarás con el pasado y el presente para equilibrar tu futuro. Terapia presencial y en línea.">

    <link rel="canonical" href="<?php echo get_permalink(); ?>">

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-36VC4346Y2"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'G-36VC4346Y2');
    </script>

    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/Pachuco/tailwind_output.css">
    <link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/Pachuco/formStyles.css">
    <link rel="stylesheet"
        href="<?php echo get_site_url(); ?>/wp-content/themes/Pachuco/node_modules/swiper/swiper-bundle.min.css">

    <title>Pachuco</title>
    <link rel="icon" href="<?php echo get_site_url(); ?>/wp-content/themes/Pachuco/Assets/Landing/favicon.ico" type="image/x-icon" />
    
    <?php wp_head(); ?>
</head>

<body>
    <main id="home">
        <!--contacto-->
        <?php include 'contacto.php'?>
        <!--Services-->
        <?php include 'services.php'; ?>
        <!--brands-->
        <?php include 'brands.php'; ?>
        <!--Testimonios-->
        <?php include 'testimonials.php'?>
        <!--Call-->
        <?php include 'call-to-action.php'?>
        <!--Footer-->
        <?php include 'footer.php'?>
        <!--button to up -->
        <?php include 'scroll-to-up.php'?>
        <?php wp_footer(); ?>
</body>

</html>