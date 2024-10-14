<section id="testimonios" class="bg-black relative flex items-center justify-center">
    <!-- Carrusel de testimonios -->
    <div id="carrusel-testimonios" class="relative container mx-auto overflow-hidden mb-[3rem]">
        <div class="carousel-container-testimonios flex" id="carousel-container-testimonios">
            <!-- Testimonio 1 -->
            <div class="testimonial-slide flex w-full">
                <div class="w-1/2">
                    <img class="object-cover" alt="Testimonio 1"
                        src="<?php echo get_stylesheet_directory_uri(); ?>/Assetss/Landing/Testimonial_IMG.webp" />
                </div>
                <div class="w-1/2 flex items-center justify-center text-white text-right p-4">
                    <p>“Nos encanta colaborar con el equipo de Pachuco, siempre listos para aceptar los desafíos que les planteamos. Son creativos, comprometidos y alineados con las necesidades digitales de nuestro mercado. Valoramos mucho su apoyo en la comunicación de nuestros libros.”</p>
                </div>
            </div>
            <!-- Testimonio 2 -->
            <div class="testimonial-slide flex w-full">
                <div class="w-1/2">
                    <img class="object-cover" alt="Testimonio 2"
                        src="<?php echo get_stylesheet_directory_uri(); ?>/Assetss/Landing/Testimonial_IMG.webp" />
                </div>
                <div class="w-1/2 flex items-center justify-center text-white text-right p-4">
                    <p>“Desde el primer día pudimos bajar el concepto y propuesta gráfica para nuestra marca logrando obtener muy buenos comentarios de manera interna y externa. Siempre nos han apoyado en las peticiones de proyectos y están al tanto de las tendencias o que puede funcionar para la compañía. Seguimos trabajando para crecer y mi intención es llegar a competir en algún Premio de Diseño o Publicidad.”</p>
                </div>
            </div>
            <!-- Testimonio 3 -->
            <div class="testimonial-slide flex w-full">
                <div class="w-1/2">
                    <img class="object-cover" alt="Testimonio 3"
                        src="<?php echo get_stylesheet_directory_uri(); ?>/Assetss/Landing/Testimonial_IMG.webp" />
                </div>
                <div class="w-1/2 flex items-center justify-center text-white text-right p-4">
                    <p>“He tenido el placer de trabajar con ‘Pachuco’ en el desarrollo de diversas campañas digitales para diferentes marcas del portafolio de la Compañía. Pachuco ha demostrado ser un socio excelente en todos los aspectos del proceso creativo y de ejecución. El equipo de ‘Pachuco’ es altamente profesional, creativo y eficiente, siempre entregando proyectos de alta calidad dentro de los plazos establecidos. Su capacidad para entender nuestras necesidades y transformarlas en estrategias digitales efectivas ha sido fundamental para el éxito de nuestras marcas. Recomendaría sin duda a Pachuco para cualquier empresa que busque el desarrollo de campañas digitales innovadoras y efectivas. Su dedicación y conocimiento en el campo de la publicidad digital los convierte en un valioso aliado para alcanzar cualquier objetivo.”</p>
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
    }

    .carousel-container-testimonios img {
        height: 60%;
        object-fit: cover;
    }

    button {
        cursor: pointer;
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
        const newTransformValue = -currentSlideTestimonios * 100; // Cambia el valor del transform
        carouselContainerTestimonios.style.transform = `translateX(${newTransformValue}%)`;
    }

    // Auto-carrusel (cambia automáticamente cada 5 segundos)
    setInterval(() => {
        moveSlideTestimonios(1);
    }, 5000); // Cambia cada 5 segundos
</script>
