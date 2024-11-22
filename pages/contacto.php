<section id='contacto'
   class="bg-[#000] h-screen bg-cover bg-no-repeat bg-center"
   style="background: linear-gradient(to bottom, transparent 100%, white 100%),
   url('<?php echo get_stylesheet_directory_uri(); ?>/Assets/Header-IMG.webp');
   background-size: cover;
   background-position: center;">
  <div class="px-4 pt-[2rem] lg:max-w-[1200px] lg:mx-auto">
    <img class='w-auto h-[4rem] mb-[2rem] md:mb-[3rem]' alt='cosnthera' src="<?php echo get_stylesheet_directory_uri(); ?>/Assets/Header_Logo.webp" />
    <div class="flex flex-col md:flex-row gap-[1.5rem] md:gap-[3rem]">
      <!-- Sección de textos (izquierda) -->
      <div class="flex flex-col mb-[1rem] md:w-1/2">
        <div class="m-auto sm:px-[2rem]">
          <h1 class="text-center sm:text-left font-extrabold font-Montse text-white text-[1.5rem] md:text-[3rem] leading-tight md:leading-[1]">¡Transformamos eventos en experiencias memorables!</h1>
        </div>
      </div>
      <!-- Sección del logo y formulario (derecha) -->
      <div class="md:w-1/2 flex flex-col items-center justify-center ">
        <h1 class="mb-[1.5rem] md:mb-[2rem] font-Montse text-center font-bold text-white text-[1.25rem] md:text-[1.7rem]">¡Quiero un evento <br/> inolvidable!</h1>
        <?php echo do_shortcode('[ninja_form id=1]'); ?>
      </div>
    </div>
  </div>
</section>

