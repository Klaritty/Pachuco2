<?php
/*
Template Name: Thank You
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/Pachuco2/tailwind_output.css">
    <link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/Pachuco2/formStyles.css">
    <title>Pachuco</title>
    <link rel="icon" href="<?php echo get_site_url(); ?>/wp-content/themes/Pachuco2/Assets/PDE_Favicon.png" type="image/x-icon" />
    <?php wp_head(); ?>
  </head>

  <body>
    <div class="flex justify-center items-center min-h-screen p-4 bg-center bg-no-repeat bg-origin-content" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/Assets/TY_Page-IMG fondo.png');">
      <div class="absolute top-16 left-12">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/Assets/TY_Page-Logo.png" alt="Logo de la empresa" class="w-52">
      </div>
      <div class="md:w-3/4 flex flex-col container px-4 mx-auto items-center ">
        <div class="w-full mb-[3rem]">
          <h1 class="font-Montse text-[1.5rem] md:text-[2.5rem] lg:text-[3rem] text-white text-left font-bold">¡Gracias por contactarnos!</h1>
          <p class="font-Montse text-[1rem] md:text-[1rem] lg:text-[1.5rem] text-white text-left font-bold">Estás a punto de transformar tu evento en una gran experiencia</p>
        </div>
        <div class="bg-black bg-opacity-60 p-10 rounded-lg">
          <p class="text-white text-center text-base md:text-lg font-Montse">
            En Punto de Encuentro estamos muy emocionados de tener  la oportunidad de crear una experiencia inolvidable junto a ti. Pronto, nos pondremos en contacto contigo para entender tus ideas y apoyarte en la organización de tu próximo evento.
          </p>
          <p class="text-white text-center mb-[2rem] font-bold font-Montse">¡Hagamos que suceda!</p>
          <p class="text-center mb-[2rem] font-bold text-[#15baba] font-Montse">¡Síguenos!</p>
          <div class="flex justify-center space-x-4 gap-[2rem] mt-[2rem]">
            <a href="https://www.instagram.com/pachucolens/" target="_blank">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/Assets/TYP_Icon_Instagram.webp" alt="Instagram" class="w-8 h-8">
            </a>
            <a href="https://tiktok.com/@tu-cuenta" target="_blank">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/Assets/TYP_Icon_Tk.webp" alt="TikTok" class="w-8 h-8">
            </a>
            <a href="https://www.linkedin.com/company/pachuco-digital/mycompany/" target="_blank">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/Assets/TYP_Icon_Linedin.webp" alt="LinkedIn" class="w-8 h-8">
            </a>
          </div>
        </div>
      </div>
    </div>
  <?php wp_footer(); ?>
  </body>
</html>
