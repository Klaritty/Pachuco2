<section id='inicio' class='bg-black relative flex items-center justify-center'>
    <!-- Imagen de fondo -->
    <img class='absolute w-auto h-[20.4rem] object-cover z-0' alt='consthera' 
         src="<?php echo get_stylesheet_directory_uri(); ?>/Assetss/Landing/Clientes_CirculoFondo.webp" />
    
    <div class='pb-[6rem] pt-[6rem] container mx-auto relative z-10'>
        <h1 class='text-center pb-[2rem] font-Montse text-[40px] mp:text-[60px] mx-auto w-[90%] mp:w-[70%] text-white'>Hemos compartido la pista de baile con ellos.</h1>
        
        <!-- Carrusel -->
        <div id="carrusel" class="relative w-full overflow-hidden mb-[3rem]">
            <div class="carousel-container flex" id="carousel-container">
                <!-- Imágenes del carrusel -->
                <img class='h-auto max-h-[2.5rem] object-contain mx-4' alt='Adidas' 
                     src="<?php echo get_stylesheet_directory_uri(); ?>/Assetss/Landing/Clientes_Logo_Adidas.webp" />
                <img class='h-auto max-h-[2.5rem] object-contain mx-4' alt='Bayer' 
                     src="<?php echo get_stylesheet_directory_uri(); ?>/Assetss/Landing/Clientes_Logo_Bayer.webp" />
                <img class='h-auto max-h-[2.5rem] object-contain mx-4' alt='Coca' 
                     src="<?php echo get_stylesheet_directory_uri(); ?>/Assetss/Landing/Clientes_Logo_Coca.webp" />
                <img class='h-auto max-h-[2.5rem] object-contain mx-4' alt='DHL' 
                     src="<?php echo get_stylesheet_directory_uri(); ?>/Assetss/Landing/Clientes_Logo_DHL.webp" />
                <img class='h-auto max-h-[2.5rem] object-contain mx-4' alt='Dportenis' 
                     src="<?php echo get_stylesheet_directory_uri(); ?>/Assetss/Landing/Clientes_Logo_Dportenis.webp" />
                <img class='h-auto max-h-[2.5rem] object-contain mx-4' alt='Google' 
                     src="<?php echo get_stylesheet_directory_uri(); ?>/Assetss/Landing/Clientes_Logo_Google.webp" />
                <img class='h-auto max-h-[2.5rem] object-contain mx-4' alt='NMDP' 
                     src="<?php echo get_stylesheet_directory_uri(); ?>/Assetss/Landing/Clientes_Logo_NMDP.webp" />
                <img class='h-auto max-h-[2.5rem] object-contain mx-4' alt='Planeta' 
                     src="<?php echo get_stylesheet_directory_uri(); ?>/Assetss/Landing/Clientes_Logo_Planeta.webp" />
                <img class='h-auto max-h-[2.5rem] object-contain mx-4' alt='PPG' 
                     src="<?php echo get_stylesheet_directory_uri(); ?>/Assetss/Landing/Clientes_Logo_PPG.webp" />
                <img class='h-auto max-h-[2.5rem] object-contain mx-4' alt='Solera' 
                     src="<?php echo get_stylesheet_directory_uri(); ?>/Assetss/Landing/Clientes_Logo_Solera.webp" />
            </div>
        </div>
    </div>
</section>


<style>
   #carrusel {
    position: relative;
    width: 100%;
    height: auto; /* Ajusta la altura automáticamente */
    overflow: hidden;
}

.carousel-container {
    display: flex;
    width: max-content; /* Deja que el contenedor se ajuste al contenido */
    animation: infiniteScroll 50s linear infinite; /* Ajusta el tiempo para controlar la velocidad */
}

@keyframes infiniteScroll {
    0% {
        transform: translateX(0);
    }
    100% {
        transform: translateX(-100%);
    }
}

.carousel-container img {
    min-width: 200px; /* Establece el ancho mínimo para que cada imagen sea un "slide" */
    margin: 0 20px; /* Margen entre las imágenes */
}
</style>


<script>
    const slides = document.querySelectorAll('.carousel-container img');
    const totalSlides = slides.length;
    let currentSlide = 0;

    // Duplica las imágenes para efecto infinito
    const carouselContainer = document.getElementById('carousel-container');
    for (let i = 0; i < totalSlides; i++) {
        const clone = slides[i].cloneNode(true);
        carouselContainer.appendChild(clone);
    }

    function moveSlide(direction) {
        currentSlide = (currentSlide + direction + totalSlides) % totalSlides;
        const newTransformValue = -currentSlide * (100 / (totalSlides * 2)); // Cambia el valor del transform
        carouselContainer.style.transform = `translateX(${newTransformValue}%)`;
    }

    // Opcional: Auto-carrusel
    setInterval(() => {
        moveSlide(1);
    }, 2200); // Cambia cada 1.2 segundos para un movimiento más fluido
</script>
