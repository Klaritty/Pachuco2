<section id="testimonios" class="bg-black relative flex items-center justify-center">
    <!-- Carrusel de testimonios -->
    <div id="carrusel-testimonios" class="relative lg:max-w-[1200px] container mx-auto overflow-hidden mb-[3rem]">
        <div class="carousel-container-testimonios flex" id="carousel-container-testimonios">
            <!-- Testimonio 1 -->
            <div class="testimonial-slide flex w-full">
                <div class="w-full md:w-1/2 mb-[3rem] md:mb-0 flex flex-col items-center">
                    <img alt="Testimonio 1"
                        src="<?php echo get_stylesheet_directory_uri(); ?>/Assetss/Landing/Clientes_Logo_Planeta.webp" 
                        class="cliente-logo mb-4" />
                    <p class="font-bold text-white mt-4">Jan Delgado</p>
                    <p class="text-white">Gerente Mkt Digital</p>
                    <p class="text-white">Grupo Planeta</p>
                </div>
                <div class="w-full md:w-1/2 flex flex-col items-center justify-center text-white text-right p-4">
                    <!-- Comillas de apertura -->
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/Assetss/Landing/Testimonial_Comillas_abre.webp" 
                    alt="Comilla abre"
                    class="comilla-desktop object-cover relative mb-[1rem]" />

                    <p>Nos encanta colaborar con el equipo de Pachuco, siempre listos para aceptar los desafíos que les planteamos. Son creativos, comprometidos y alineados con las necesidades digitales de nuestro mercado. Valoramos mucho su apoyo en la comunicación de nuestros libros.</p>

                    <!-- Comillas de cierre -->
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/Assetss/Landing/Testimonial_Comillas_cierre.webp" 
                    alt="Comilla cierre"
                    class="comilla-desktop object-cover relative mt-[1rem]" />
                </div>
            </div>

            <!-- Testimonio 2 -->
            <div class="testimonial-slide flex w-full">
                <div class="w-full md:w-1/2  mb-[3rem] md:mb-0 flex flex-col items-center">
                    <img alt="Testimonio 2"
                        src="<?php echo get_stylesheet_directory_uri(); ?>/Assetss/Landing/Clientes_Logo_Latino.webp" 
                        class="cliente-logo mb-4" />
                    <p class="font-bold text-white mt-4">Luis Enrique Motte Morales</p>
                    <p class="text-white">Diseñador Senior</p>
                    <p class="text-white">Seguros La Latino</p>
                </div>
                <div class="w-full md:w-1/2 flex flex-col items-center justify-center text-white text-right p-4">
                    <!-- Comillas de apertura -->
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/Assetss/Landing/Testimonial_Comillas_abre.webp" 
                    alt="Comilla abre"
                    class="comilla-desktop object-cover relative mb-[1rem]" />

                    <p>Desde el primer día pudimos bajar el concepto y propuesta gráfica para nuestra marca logrando obtener muy buenos comentarios de manera interna y externa. Siempre  nos han apoyado en las peticiones de proyectos y están al tanto de las tendencias o que puede funcionar para la compañía.</p>
                    
                    <!-- Comillas de cierre -->
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/Assetss/Landing/Testimonial_Comillas_cierre.webp" 
                    alt="Comilla cierre"
                    class="comilla-desktop object-cover relative mt-[1rem]" />
                </div>
            </div>

            <!-- Testimonio 3 -->
            <div class="testimonial-slide flex w-full">
                <div class="w-full md:w-1/2  mb-[3rem] md:mb-0 flex flex-col items-center">
                    <img alt="Testimonio 3"
                        src="<?php echo get_stylesheet_directory_uri(); ?>/Assetss/Landing/Clientes_Logo_Coca.webp" 
                        class="cliente-logo mb-4" />
                    <p class="font-bold text-white mt-4">Julieta Sánchez</p>
                    <p class="text-white">E2E XP and Media Director</p>
                    <p class="text-white">Ubicación de la empresa.</p>
                </div>
                <div class="w-full md:w-1/2 flex flex-col items-center justify-center text-white text-right p-4">
                    <!-- Comillas de apertura -->
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/Assetss/Landing/Testimonial_Comillas_abre.webp" 
                    alt="Comilla abre"
                    class="comilla-desktop object-cover relative mb-[1rem]" />

                    <p>He tenido el placer de trabajar con “Pachuco” en el desarrollo de diversas campañas digitales para diferentes marcas del portafolio de la Compañía. Pachuco ha demostrado ser un socio excelente en todos los aspectos del proceso creativo y de ejecución.</p>

                    <!-- Comillas de cierre -->
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/Assetss/Landing/Testimonial_Comillas_cierre.webp" 
                    alt="Comilla cierre"
                    class="comilla-desktop object-cover relative mt-[1rem]" />
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

    .cliente-logo {
        max-width: 170px;
        height: auto;
        object-fit: contain;
    }

    .comilla-desktop {
        width: 45px;
        height: 30px;
    }

    @media (max-width: 768px) {
        .testimonial-slide {
            flex-direction: column;
            justify-content: center;
            min-height: 100vh;
            padding: 20px 0;
        }

        .cliente-logo {
            max-width: 160px;
            height: auto;
            margin-bottom: 1rem;
        }

        .comilla-desktop {
            width: 35px;
            height: 27px;
            margin-bottom: 1rem;
        }

        .testimonial-slide p {
            text-align: center;
        }
    }

    button {
        cursor: pointer;
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
