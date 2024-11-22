<section id='inicio' class='bg-white  relative flex items-center justify-center'>
    <!-- Imagen de fondo 1 -->
    <img class='absolute w-auto h-[20.4rem] object-cover z-10' alt='consthera' 
         src="<?php echo get_stylesheet_directory_uri(); ?>/Assets/Clientes-Figura.webp" />
    <!-- Imagen de fondo 2 -->
    <img class='absolute w-full h-[10.4rem] object-cover z-0' alt='clientes pleca'
         src="<?php echo get_stylesheet_directory_uri(); ?>/Assets/Clientes-Pleca.webp" />
    <div class='pb-[5rem] container mx-auto relative z-20'>
        <div>
            <h1 class='text-center font-bold pb-[1rem] pt-[5rem] font-Montse text-[20px] sm:text-[25px] mx-auto w-[90%] mp:w-[70%] text-[#541388] uppercase'>¡Ellos han vivido grandes experiencias con nosotros!</h1>
        </div>
        <div id="carrusel" class="relative w-full overflow-hidden pt-[3rem] mb-[7rem]">
            <div class="carousel-container flex" id="carousel-container">
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
        height: auto;
        overflow: hidden;
    }
    .carousel-container {
        display: flex;
        width: max-content;
        animation: infiniteScroll 40s linear infinite;
    }
    @keyframes infiniteScroll {
        0% {
            transform: translateX(0);
        }
        100% {
            transform: translateX(-50%);
        }
    }
    .carousel-container img {
        min-width: 200px;
        margin: 0 20px;
    }
    .img-grande {
        max-height: 4rem;
    }
    .img-pequeña {
        max-height: 2.3rem;
    }
</style>

<script>
    const slides = document.querySelectorAll('.carousel-container img');
    const totalSlides = slides.length;
    const carouselContainer = document.getElementById('carousel-container');
    for (let i = 0; i < totalSlides; i++) {
        const clone = slides[i].cloneNode(true);
        carouselContainer.appendChild(clone);
    }
    let currentSlide = 0;
    function moveSlide() {
        currentSlide++;
        const newTransformValue = -currentSlide * (100 / totalSlides);
        carouselContainer.style.transform = `translateX(${newTransformValue}%)`;
        if (currentSlide >= totalSlides) {
            currentSlide = 0;
            setTimeout(() => {
                carouselContainer.style.transition = 'none';
                carouselContainer.style.transform = 'translateX(0)';
                setTimeout(() => {
                    carouselContainer.style.transition = 'transform 1s ease';
                }, 50);
            }, 2000);
        }
    }
    setInterval(moveSlide, 2200);
</script>
