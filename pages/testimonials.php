<section id="testimonios" class="bg-black relative flex items-center justify-center">
    <!-- Carrusel de testimonios -->
    <div id="carrusel-testimonios" class="relative lg:max-w-[1200px] container mx-auto overflow-hidden mb-[3rem]">
        <div class="carousel-container-testimonios flex" id="carousel-container-testimonios">
            <!-- Testimonio 1 -->
            <div class="testimonial-slide flex w-full">
                <div class="w-full md:w-1/2">
                    <img class=" " alt="Testimonio 1"
                        src="<?php echo get_stylesheet_directory_uri(); ?>/Assetss/Landing/Testimonial_IMG.webp" />
                </div>
                <div class="w-full md:w-1/2 flex flex-col items-center justify-center text-white text-right p-4">
                    <!-- Comillas de apertura -->
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/Assetss/Landing/Testimonial_Comillas_abre.webp" 
                    alt="Comilla abre"
                    class='object-cover w-[30px] h-[30px] mb-[2rem] relative' />

                    <p>“Nos encanta colaborar con el equipo de Pachuco, siempre listos para aceptar los desafíos que les planteamos. Son creativos, comprometidos y alineados con las necesidades digitales de nuestro mercado. Valoramos mucho su apoyo en la comunicación de nuestros libros.”</p>

                    <!-- Comillas de cierre -->
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/Assetss/Landing/Testimonial_Comillas_cierre.webp" 
                    alt="Comilla cierre"
                    class='object-cover w-[30px] h-[30px] mt-[2rem] relative' />
                </div>
            </div>

            <!-- Repite el mismo patrón para Testimonios 2 y 3 -->
            <div class="testimonial-slide flex w-full">
                <div class="w-full md:w-1/2">
                    <img class=" " alt="Testimonio 2"
                        src="<?php echo get_stylesheet_directory_uri(); ?>/Assetss/Landing/Testimonial_IMG.webp" />
                </div>
                <div class="w-full md:w-1/2 flex flex-col items-center justify-center text-white text-right p-4">
                    <!-- Comillas de apertura -->
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/Assetss/Landing/Testimonial_Comillas_abre.webp" 
                    alt="Comilla cierre"
                    class='object-cover w-[30px] h-[30px] mb-[2rem] relative' />

                    <p>“Desde el primer día pudimos bajar el concepto y propuesta gráfica para nuestra marca logrando obtener muy buenos comentarios de manera interna y externa...”</p>

                    <!-- Comillas de cierre -->
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/Assetss/Landing/Testimonial_Comillas_cierre.webp" 
                    alt="Comilla cierre"
                    class='object-cover w-[30px] h-[30px] mt-[2rem] relative' />
                </div>
            </div>

            <!-- Testimonio 3 -->
            <div class="testimonial-slide flex w-full">
                <div class="w-full md:w-1/2">
                    <img class=" " alt="Testimonio 3"
                        src="<?php echo get_stylesheet_directory_uri(); ?>/Assetss/Landing/Testimonial_IMG.webp" />
                </div>
                <div class="w-full md:w-1/2 flex flex-col items-center justify-center text-white text-right p-4">
                    <!-- Comillas de apertura -->
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/Assetss/Landing/Testimonial_Comillas_abre.webp" 
                    alt="Comilla cierre"
                    class='object-cover w-[30px] h-[30px] mb-[2rem] relative' />

                    <p>“He tenido el placer de trabajar con ‘Pachuco’ en el desarrollo de diversas campañas digitales para diferentes marcas...”</p>

                    <!-- Comillas de cierre -->
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/Assetss/Landing/Testimonial_Comillas_cierre.webp" 
                    alt="Comilla cierre"
                    class='object-cover w-[30px] h-[30px] mt-[2rem] relative' />
                </div>
            </div>
        </div>
    </div>
</section>


<style>
    #carrusel-testimonios {
        position: relative;
        width: 100%;
        overflow: hidden;
    }

    .carousel-container-testimonios {
        display: flex;
        width: 100%;
        transition: transform 0.5s ease-in-out;
    }

    .testimonial-slide {
        flex: 0 0 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        position: relative;
    }

    .carousel-container-testimonios img {
        height: 40%;
    }

    button {
        cursor: pointer;
    }

    @media (max-width: 768px) {
        .testimonial-slide {
            flex-direction: column;
            justify-content: center;
            min-height: 100vh;
            padding: 20px 0;
        }

        .testimonial-slide img {
            height: auto;
            width: 100%;
            max-height: 200px;
            object-fit: contain;
        }

        .testimonial-slide p {
            text-align: center;
        }
    }

    .testimonial-slide img.absolute {
        z-index: 0; /* Asegura que las comillas estén detrás del texto */
    }

    .testimonial-slide p.relative {
        z-index: 10; /* Mantiene el texto encima de las comillas */
    }
</style>

<script>
    const slidesTestimonios = document.querySelectorAll('.testimonial-slide');
    const totalSlidesTestimonios = slidesTestimonios.length;
    let currentSlideTestimonios = 0;
    const carouselContainerTestimonios = document.getElementById('carousel-container-testimonios');

    // Mueve el slide
    function moveSlideTestimonios(direction) {
        currentSlideTestimonios = (currentSlideTestimonios + direction + totalSlidesTestimonios) % totalSlidesTestimonios;
        const newTransformValue = -currentSlideTestimonios * 100;
        carouselContainerTestimonios.style.transform = `translateX(${newTransformValue}%)`;
    }

    // Auto-carrusel (cambia automáticamente cada 5 segundos)
    setInterval(() => {
        moveSlideTestimonios(1);
    }, 5000);
</script>
