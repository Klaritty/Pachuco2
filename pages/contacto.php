<section id='contacto' class="bg-[#000] bg-cover h bg-no-repeat bg-center" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/Assetss/Landing/Header_IMG.webp');">
  <div class="px-5 py-[2rem] lg:max-w-[1200px] lg:mx-auto">
    <img class='w-auto h-[4rem] mb-[3rem]' alt='cosnthera' src="<?php echo get_stylesheet_directory_uri(); ?>/Assetss/Landing/Header_Logo.webp" />
    <div class="flex flex-col md:flex-row gap-[3rem] lg:gap-[3rem] md:h-[500px]">
      <!-- Sección de textos (izquierda) -->
      <div class="md:pt-[15rem] px-[2rem] flex flex-col mb-[2rem] md:w-1/2 bg-cover bg-no-repeat bg-center">
        <div class="mb-[2rem]">
          <h1 class="text-left font-extrabold font-Montse text-white md:text-[3rem] leading-[1]">GENERAMOS IDEAS QUE EMOCIONAN</h1>
          <p class="text-white font-Montse text-[30px] text-left">¡Únete a la pista de baile!</p>
        </div>
      </div>

      <!-- Sección del logo y formulario (derecha) -->
      <div class="md:w-1/2 mb-[6rem] flex flex-col items-center justify-center mt-[4rem]"> <!-- Ajuste de mt aquí -->
        <h1 class="font-normal mb-[2rem] font-Montse text-center text-white md:text-[1.7rem]">Somos tu próxima <br> agencia creativa</h1>
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
