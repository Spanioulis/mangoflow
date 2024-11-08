<?php get_header(); ?>

<main class="template-home">
    <!-- Section #título -->
    <h1 class="s-main-title js-1cp"><?php the_field('main_title'); ?></h1>

    <!-- Section #texto -->
    <section class="s-text js-1cp">
        <p><?php the_field('main_text'); ?></p>
    </section>

    <!-- Section #main-image -->
    <?php $main_image = get_field('main_image'); ?>
    <section class="s-image revealing-image bg-cover" style="background-image: radial-gradient(transparent, #000), url('<?php echo $main_image ?>');">
    </section>

    <section class="s-text no-padding">
        <p><?php the_field('main_text_secondary'); ?></p>
    </section>

    <!-- Section #servicios -->
    <section class="s-services" id="services">
        <!-- <h2>Servicios</h2> -->

        <!-- TODO: Create section or component services grid (¿?) -->
        <div class="s-services__grid">
            <figure class="s-services__figure image1">
                <div class="s-services__overlay"></div>
                <!-- <img src="<?= get_template_directory_uri( ); ?>/assets/img/virtual-assistant-9.jpg" alt="Agenda y mano de mujer"> -->
                <div class="s-services__video-container">
                    <video autoplay muted loop playsinline>
                        <source src="<?= get_template_directory_uri(); ?>/assets/video/virtual-assistant.mp4" type="video/mp4">
                        Tu navegador no soporta el elemento de video.
                    </video>
                </div>
                <div class="s-services__info-container">
                    <h2><?php the_field('main_title_services'); ?></h2>
                </div>
            </figure>

            <?php if (have_rows('services')): ?>
                <?php $counter = 2; ?>
                <?php while (have_rows('services')): the_row(); ?>
                    <?php 
                    $image = get_sub_field('image_service');
                    $title = get_sub_field('title_service');
                    $text = get_sub_field('text_service');
                    ?>
                    <figure class="s-services__figure image<?= $counter; ?>">
                        <div class="s-services__overlay"></div>
                        <img src="<?= $image; ?>" alt="Imagen <?= $title; ?>">
                        <div class="s-services__info-container">
                            <h3><?= $title; ?></h3>
                            <p><?= $text; ?></p>
                        </div>
                    </figure>
                    <?php $counter++; ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>

    <!-- Section #sobre mí -->
    <section class="s-about" id="about-us">
        <h2>Sobre mí</h2>

        <!-- Text container -->
        <div class="s-about__text">
            <p>Soy licenciada en Marketing y llevo más de 15 años trabajando en multinacionales líderes en el mercado. A lo largo de mi carrera, he perfeccionado mis habilidades de organización, creatividad, perseverancia y diligencia.</p>
            <p>Decidí convertirme en asistente virtual para encontrar una profesión que realmente se alineara con mis valores y habilidades. Ahora, estoy aquí para ayudarte a optimizar tu tiempo y recursos, aportando mi experiencia y dedicación a tus proyectos.</p>
        </div>

        <!-- Swiper -->
        <?php echo get_template_part('template_parts/swiper' ); ?>
    </section>

    <!-- Section #contacto -->
    <section class="s-contact" id="contact">
        <h2>Contacto</h2>
        <p>Pudes contactar conmigo clicando en el 🥭, o bien  a través de mi <a href="https://www.instagram.com/mangoflow.estudio/" rel="noopener noreferrer">Instagram</a>.</p>
    </section>

    <!-- 🥭 Mango Widget -->
    <?php echo get_template_part('template_parts/mango-widget'); ?>
</main>

<?php get_footer(); ?>
