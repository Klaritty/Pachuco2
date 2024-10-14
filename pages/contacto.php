<section id='contacto' class="bg-[#000] pt-[7rem] bg-cover h bg-no-repeat bg-center" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/Assetss/Landing/Header_IMG.webp');">
  <div class="px-5 py-[3rem] lg:max-w-[900px] lg:mx-auto">
    <div class="flex flex-col md:flex-row gap-[1rem] lg:gap-[3rem] md:h-[500px]">
      
      <!-- Sección de textos (izquierda) -->
      <div class="md:pt-[12rem] px-[2rem] flex flex-col mb-[2rem] md:w-1/2 bg-cover bg-no-repeat bg-center md:bg-[url('http://159.223.204.188/wp-content/themes/Consthera/assets/images/contact_frame.png')]">
        <div class="mb-[2rem]">
          <h1 class="text-left font-extrabold font-Montse text-white md:text-[4rem] leading-tight">Generamos Ideas que emocionan</h1>
          <p class="text-white font-Montse text-[30px] text-left">¡Únete a la pista de baile!</p>
        </div>
      </div>

      <!-- Sección del logo y formulario (derecha) -->
      <div class="md:w-1/2 mb-[6rem] flex flex-col items-center justify-center mt-[2rem]"> <!-- Agregar mt aquí -->
        <img class='w-auto h-[4rem] mb-[3rem]' alt='cosnthera' src="<?php echo get_stylesheet_directory_uri(); ?>/Assetss/Landing/Header_Logo.webp" />
        <h1 class="text-left font-bold font-Montse text-white md:text-[1.7rem]">Somos tu próxima agencia creativa</h1>
        <?php echo do_shortcode('[ninja_form id=1]'); ?>
      </div>
    </div>

    <!-- Sección de textos finales centrados -->
    <div class="flex flex-col items-center justify-center text-center pt-[7rem]">
      <h2 class="text-white font-Montse font-bold text-[1.5rem]">Para bailar se necesitan 2</h2>
      <p class="text-white font-Montse text-[1rem] mt-[1rem]">
        Como agencia creativa estamos convencidos de que las ideas mueven emociones. <br>
        Creamos soluciones creativas de marketing y comunicación que conectan marca y consumidor.
      </p>
    </div>
  </div>
</section>
