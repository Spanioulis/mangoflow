<?php get_header(); ?>

<main class="template-home">
    <!-- Section #title -->
    <h1 class="s-main-title js-1cp">Hey!!</h1>

    <!-- Section #cover -->
    <section class="s-text js-1cp">
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptates odit totam libero. Nesciunt rem impedit voluptatem tenetur amet! Animi, minus repellat recusandae aliquid doloremque a dicta quos quasi qui cumque?
        Voluptatem magnam, minus omnis ea, exercitationem quasi quis commodi illo cumque porro id voluptas expedita distinctio eius corporis odit et illum minima officiis dolore officia a voluptatum ab! Ratione, perferendis.
        Temporibus quae debitis asperiores ducimus numquam laudantium dicta quos voluptatum tempore, in, itaque harum laboriosam error inventore voluptate accusantium saepe dolorum non necessitatibus nulla? Aliquam officiis officia est possimus quam.</p>
    </section>

    <!-- Section #main-image -->
    <!-- TODO: Add ACF to background-image -->
    <section class="s-image bg-cover" style="background-image: url('<?php echo get_template_directory_uri(  ); ?>/assets/img/virtual-assistant-1.jpg')">
    </section>

    <section class="s-text no-padding">
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptates odit totam libero. Nesciunt rem impedit voluptatem tenetur amet! Animi, minus repellat recusandae aliquid doloremque a dicta quos quasi qui cumque?
        Voluptatem magnam, minus omnis ea, exercitationem quasi quis commodi illo cumque porro id voluptas expedita distinctio eius corporis odit et illum minima officiis dolore officia a voluptatum ab! Ratione, perferendis.
        Temporibus quae debitis asperiores ducimus numquam laudantium dicta quos voluptatum tempore, in, itaque harum laboriosam error inventore voluptate accusantium saepe dolorum non necessitatibus nulla? Aliquam officiis officia est possimus quam.</p>
    </section>

    <!-- Section #servicios -->
    <section class="s-services" id="services">
        <h2>Servicios</h2>

        <div class="s-services__grid">
            <figure class="image1">
                <img src="<?= get_template_directory_uri( ); ?>/assets/img/virtual-assistant-6.jpg" alt="Agenda y mano de mujer">
            </figure>
            <figure class="image2">
                <img src="<?= get_template_directory_uri( ); ?>/assets/img/virtual-assistant-7.jpg" alt="Agenda y mano de mujer">
            </figure>
            <figure class="image3">
                <img src="<?= get_template_directory_uri( ); ?>/assets/img/virtual-assistant-5.jpg" alt="Agenda y mano de mujer">
            </figure>
        </div>
    </section>

    <!-- Sobre mí -->
    <section class="s-about" id="about-us">
        <h2>Sobre mí</h2>

        <!-- Swiper -->
        <?php echo get_template_part('template_parts/swiper' ); ?>
    </section>

    <!-- Contacto -->
    <section class="s-contact" id="contact">
        <h2>Contacto</h2>
    </section>

    <!-- 🥭 Mango Widget -->
    <?php echo get_template_part('template_parts/mango-widget'); ?>
</main>

<?php get_footer(); ?>
