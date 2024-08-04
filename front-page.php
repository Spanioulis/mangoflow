<?php get_header(); ?>

<main class="template-home">
    <!-- Section #título -->
    <h1 class="s-main-title js-1cp">Hey!!</h1>

    <!-- Section #texto -->
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

        <!-- TODO: Create section or component services grid (¿?) -->
        <!-- TODO: Add info text -->
        <div class="s-services__grid">
            <figure class="s-services__figure image1">
                <div class="s-services__overlay"></div>
                <img src="<?= get_template_directory_uri( ); ?>/assets/img/virtual-assistant-6.jpg" alt="Agenda y mano de mujer">
                <div class="s-services__info-container">
                    <h2>Servicios</h2>
                </div>
            </figure>
            <figure class="s-services__figure image2">
                <div class="s-services__overlay"></div>
                <img src="<?= get_template_directory_uri( ); ?>/assets/img/virtual-assistant-7.jpg" alt="Agenda y mano de mujer">
                <div class="s-services__info-container">
                    <h3>Actualización de Contenido</h3>
                    <p>Copywriting creativo</p>
                </div>
            </figure>
            <figure class="s-services__figure image3">
                <div class="s-services__overlay"></div>
                <img src="<?= get_template_directory_uri( ); ?>/assets/img/virtual-assistant-5.jpg" alt="Agenda y mano de mujer">
                <div class="s-services__info-container">
                    <h3>Edición de Videos y Podcast</h3>
                    <p>Destaque visual y auditivo</p>
                </div>
            </figure>
            <figure class="s-services__figure image4">
                <div class="s-services__overlay"></div>
                <img src="<?= get_template_directory_uri( ); ?>/assets/img/virtual-assistant-8.jpg" alt="Imagen de Social Media">
                <div class="s-services__info-container">
                    <h3>Gestión de RRSS</h3>
                    <p>Diseño y contenido estratégico</p>
                </div>
            </figure>
            <figure class="s-services__figure image5">
                <div class="s-services__overlay"></div>
                <img src="<?= get_template_directory_uri( ); ?>/assets/img/virtual-assistant-9.jpg" alt="Agenda y mano de mujer">
                <div class="s-services__info-container">
                    <h3>Atención al Cliente</h3>
                    <p>Soluciones efectivas</p>
                </div>
            </figure>
        </div>
    </section>

    <!-- Section #sobre mí -->
    <section class="s-about" id="about-us">
        <h2>Sobre mí</h2>

        <!-- Swiper -->
        <?php echo get_template_part('template_parts/swiper' ); ?>
    </section>

    <!-- Section #contacto -->
    <section class="s-contact" id="contact">
        <h2>Contacto</h2>
    </section>

    <!-- 🥭 Mango Widget -->
    <?php echo get_template_part('template_parts/mango-widget'); ?>
</main>

<?php get_footer(); ?>
