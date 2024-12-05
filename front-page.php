<?php get_header(); ?>

<main class="template-home">
    <h1 class="s-main-title js-1cp text-center"><?php the_field('main_title'); ?></h1>

    <section class="s-text no-pad js-1cp">
        <h2><?php the_field('main_subtitle'); ?></h2>
        <div>
            <p>Me gusta:</p>

        </div>
        <div class="wrapper">
            <?php for ($i = 0; $i < 3; $i++): ?>
                <div class="item">
                    <?php the_field('main_text_primary'); ?>
                </div>
            <?php endfor; ?>
        </div>
    </section>

    <?php $main_image = get_field('main_image'); ?>
    <section class="s-image revealing-image bg-cover" style="background-image: radial-gradient(transparent, #000), url('<?php echo $main_image ?>');">
    </section>

    <section class="s-text">
        <?php the_field('main_text_secondary'); ?>
    </section>

    <section class="s-services" id="services">
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

    <section class="s-about" id="about-us">
        <h2><?php the_field('about_me_title'); ?></h2>

        <!-- Text container -->
        <div class="s-about__text">
            <p><?php the_field('about_me_text'); ?></p>
        </div>


    </section>

    <section class="s-experience" id="experience">
        <h2><?php the_field('work_title'); ?></h2>

        <!-- Swiper -->
        <?php echo get_template_part('template_parts/swiper' ); ?>
    </section>

    <section class="s-contact" id="contact">
        <h2><?php the_field('contact_title'); ?></h2>
        <p><?php the_field('contact_text'); ?></p>
    </section>

    <?php echo get_template_part('template_parts/mango-widget'); ?>
</main>

<?php get_footer(); ?>
