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

        <!-- Slider main container -->
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">Slide 1</div>
                <div class="swiper-slide">Slide 2</div>
                <div class="swiper-slide">Slide 3</div>
                ...
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev">
                <svg width="90" height="221" viewBox="0 0 90 221" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M84.0605 0.220148C82.3012 0.571891 81.621 0.900181 76.7889 4.04241C72.2617 6.9736 69.7049 8.47437 61.7765 12.9532C54.4814 17.0803 47.7258 21.9578 45.7789 24.5138C44.3011 26.4601 44.9579 28.852 47.1159 29.5086C48.4295 29.9072 49.4381 29.4851 54.153 26.507C61.6357 21.8171 68.532 17.479 72.074 15.2513C73.974 14.0319 75.5926 13.0705 75.6395 13.1174C75.7099 13.2112 72.4728 17.69 66.9135 25.2173C49.4381 48.8075 39.0233 65.058 29.406 83.7473C21.196 99.646 13.3614 119.484 9.04537 135.242C3.83794 154.166 0.389773 178.319 0.0379198 198.228C-0.196649 211.313 0.647801 217.714 2.82929 219.543C3.55646 220.153 4.18979 220.317 4.18979 219.895C4.18979 219.754 4.00214 219.262 3.74411 218.77C2.80583 216.894 2.66509 215.463 2.66509 206.998C2.66509 197.102 3.46263 186.902 5.26881 173.465C8.15401 151.892 12.1886 135.172 18.7331 117.772C27.764 93.7367 37.5455 74.8599 53.1209 51.387C57.6011 44.6101 72.4024 23.9745 72.6135 24.1855C72.637 24.209 71.9333 26.2256 71.0419 28.6878C67.0543 39.6622 64.4036 50.449 63.7938 58.328C63.6765 60.0633 63.4888 63.7917 63.4184 66.6057C63.3012 71.108 63.3246 71.7177 63.653 71.8349C63.8641 71.9287 64.0987 71.9287 64.1691 71.8349C64.2394 71.7646 64.7555 68.9975 65.3185 65.6677C65.8814 62.3379 66.7259 58.117 67.1716 56.3114C69.9395 45.1728 79.2284 22.9896 85.4679 12.6015C89.3852 6.08252 90.1828 3.76102 89.1741 1.81471C88.2828 0.102898 86.9222 -0.31919 84.0605 0.220148Z" fill="currentColor"/>
                </svg>
            </div>
            <div class="swiper-button-next">
                <svg width="90" height="221" viewBox="0 0 90 221" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M84.0605 0.220148C82.3012 0.571891 81.621 0.900181 76.7889 4.04241C72.2617 6.9736 69.7049 8.47437 61.7765 12.9532C54.4814 17.0803 47.7258 21.9578 45.7789 24.5138C44.3011 26.4601 44.9579 28.852 47.1159 29.5086C48.4295 29.9072 49.4381 29.4851 54.153 26.507C61.6357 21.8171 68.532 17.479 72.074 15.2513C73.974 14.0319 75.5926 13.0705 75.6395 13.1174C75.7099 13.2112 72.4728 17.69 66.9135 25.2173C49.4381 48.8075 39.0233 65.058 29.406 83.7473C21.196 99.646 13.3614 119.484 9.04537 135.242C3.83794 154.166 0.389773 178.319 0.0379198 198.228C-0.196649 211.313 0.647801 217.714 2.82929 219.543C3.55646 220.153 4.18979 220.317 4.18979 219.895C4.18979 219.754 4.00214 219.262 3.74411 218.77C2.80583 216.894 2.66509 215.463 2.66509 206.998C2.66509 197.102 3.46263 186.902 5.26881 173.465C8.15401 151.892 12.1886 135.172 18.7331 117.772C27.764 93.7367 37.5455 74.8599 53.1209 51.387C57.6011 44.6101 72.4024 23.9745 72.6135 24.1855C72.637 24.209 71.9333 26.2256 71.0419 28.6878C67.0543 39.6622 64.4036 50.449 63.7938 58.328C63.6765 60.0633 63.4888 63.7917 63.4184 66.6057C63.3012 71.108 63.3246 71.7177 63.653 71.8349C63.8641 71.9287 64.0987 71.9287 64.1691 71.8349C64.2394 71.7646 64.7555 68.9975 65.3185 65.6677C65.8814 62.3379 66.7259 58.117 67.1716 56.3114C69.9395 45.1728 79.2284 22.9896 85.4679 12.6015C89.3852 6.08252 90.1828 3.76102 89.1741 1.81471C88.2828 0.102898 86.9222 -0.31919 84.0605 0.220148Z" fill="currentColor"/>
                </svg>
            </div>

            <!-- If we need scrollbar -->
            <div class="swiper-scrollbar"></div>
        </div>
    </section>

    <!-- Contacto -->
    <section class="s-contact" id="contact">
        <h2>Contacto</h2>
    </section>

    <!-- 🥭 Mango Widget -->
    <?php echo get_template_part('template_parts/mango-widget'); ?>
</main>

<?php get_footer(); ?>
