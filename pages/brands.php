<section id='inicio' class='bg-white relative flex items-center justify-center'>
    <!-- Imagen de fondo 1 -->
    <img class='absolute w-auto h-[20.4rem] object-cover z-10' alt='consthera' 
         src="<?php echo get_stylesheet_directory_uri(); ?>/Assets/Clientes-Figura.webp" />
    
    <!-- Imagen de fondo 2 -->
    <img class='absolute w-full h-[10.4rem] object-cover z-0' alt='clientes pleca' 
         src="<?php echo get_stylesheet_directory_uri(); ?>/Assets/Clientes-Pleca.webp" />

    <div class='pb-[5rem] container mx-auto relative z-20'>
        <div>
            <h1 class='text-center font-bold pb-[1rem] pt-[5rem] font-Montse text-[30px] md:text-[35px] mx-auto w-[90%] mp:w-[70%] text-[#541388] uppercase'>Hemos compartido la pista de baile con ellos.</h1>
        </div>
            
        <!-- Carrusel -->
        <div id="carrusel" class="relative w-full overflow-hidden pt-[3rem] mb-[7rem]">
            <div class="carousel-container flex" id="carousel-container">
                <!-- Imágenes del carrusel -->
                <img class='h-auto max-h-[3rem] object-contain mx-4 img-grande' alt='Adidas' 
                     src="<?php echo get_stylesheet_directory_uri(); ?>/Assetss/Landing/Clientes_Logo_Adidas.webp" />
                <img class='h-auto max-h-[3rem] object-contain mx-4 img-grande' alt='Bayer' 
                     src="<?php echo get_stylesheet_directory_uri(); ?>/Assetss/Landing/Clientes_Logo_Bayer.webp" />
                <img class='h-auto max-h-[3rem] object-contain mx-4 img-grande' alt='Coca' 
                     src="<?php echo get_stylesheet_directory_uri(); ?>/Assetss/Landing/Clientes_Logo_Coca.webp" />
                <img class='h-auto max-h-[2.5rem] object-contain mx-4 img-pequeña' alt='DHL' 
                     src="<?php echo get_stylesheet_directory_uri(); ?>/Assetss/Landing/Clientes_Logo_DHL.webp" />
                <img class='h-auto max-h-[3rem] object-contain mx-4 img-grande' alt='Dportenis' 
                     src="<?php echo get_stylesheet_directory_uri(); ?>/Assetss/Landing/Clientes_Logo_Dportenis.webp" />
                <img class='h-auto max-h-[3rem] object-contain mx-4 img-grande' alt='Google' 
                     src="<?php echo get_stylesheet_directory_uri(); ?>/Assetss/Landing/Clientes_Logo_Google.webp" />
                <img class='h-auto max-h-[3rem] object-contain mx-4 img-grande' alt='NMDP' 
                     src="<?php echo get_stylesheet_directory_uri(); ?>/Assetss/Landing/Clientes_Logo_NMDP.webp" />
                <img class='h-auto max-h-[3rem] object-contain mx-4 img-grande' alt='Planeta' 
                     src="<?php echo get_stylesheet_directory_uri(); ?>/Assetss/Landing/Clientes_Logo_Planeta.webp" />
                <img class='h-auto max-h-[3rem] object-contain mx-4 img-grande' alt='PPG' 
                     src="<?php echo get_stylesheet_directory_uri(); ?>/Assetss/Landing/Clientes_Logo_PPG.webp" />
                <img class='h-auto max-h-[3rem] object-contain mx-4 img-grande' alt='Solera' 
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
        animation: infiniteScroll 40s linear infinite; /* Ajusta el tiempo para controlar la velocidad */
    }

    @keyframes infiniteScroll {
        0% {
            transform: translateX(0);
        }
        100% {
            transform: translateX(-50%); /* Cambiado para que solo pase la mitad del contenido */
        }
    }

    .carousel-container img {
        min-width: 200px; /* Establece el ancho mínimo para que cada imagen sea un "slide" */
        margin: 0 20px; /* Margen entre las imágenes */
    }

    /* Clases adicionales para tamaños de imágenes */
    .img-grande {
        max-height: 4rem; /* Aumenta la altura máxima para imágenes más grandes */
    }

    .img-pequeña {
        max-height: 2.3rem; /* Reduce la altura máxima para la imagen de DHL */
    }
</style>

<script>
    const slides = document.querySelectorAll('.carousel-container img');
    const totalSlides = slides.length;

    // Duplica las imágenes para efecto infinito
    const carouselContainer = document.getElementById('carousel-container');
    for (let i = 0; i < totalSlides; i++) {
        const clone = slides[i].cloneNode(true);
        carouselContainer.appendChild(clone);
    }

    let currentSlide = 0;

    function moveSlide() {
        currentSlide++;
        const newTransformValue = -currentSlide * (100 / totalSlides); // Cambia el valor del transform
        carouselContainer.style.transform = `translateX(${newTransformValue}%)`;
        if (currentSlide >= totalSlides) {
            currentSlide = 0; // Reinicia el índice después de mostrar todas las imágenes
            setTimeout(() => {
                carouselContainer.style.transition = 'none'; // Desactiva la transición momentáneamente
                carouselContainer.style.transform = 'translateX(0)'; // Regresa a la posición inicial
                setTimeout(() => {
                    carouselContainer.style.transition = 'transform 1s ease'; // Reactiva la transición
                }, 50); // Pequeño retraso para permitir el cambio
            }, 2000); // Espera 2 segundos en la posición inicial
        }
    }

    // Opcional: Auto-carrusel
    setInterval(moveSlide, 2200); // Cambia cada 2.2 segundos
</script>
