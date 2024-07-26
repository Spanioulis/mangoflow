<?php get_header(); ?>

<main class="template-home">
    <h3><?php the_content(''); ?></h3>
    <!-- Section #cover -->
    <section class="s-cover js-1cp">
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptates odit totam libero. Nesciunt rem impedit voluptatem tenetur amet! Animi, minus repellat recusandae aliquid doloremque a dicta quos quasi qui cumque?
        Voluptatem magnam, minus omnis ea, exercitationem quasi quis commodi illo cumque porro id voluptas expedita distinctio eius corporis odit et illum minima officiis dolore officia a voluptatum ab! Ratione, perferendis.
        Temporibus quae debitis asperiores ducimus numquam laudantium dicta quos voluptatum tempore, in, itaque harum laboriosam error inventore voluptate accusantium saepe dolorum non necessitatibus nulla? Aliquam officiis officia est possimus quam.</p>
    </section>

    <!-- Section #image -->
    <section class="s-image">
        <div class="s-image__overlay"></div>
        <figure>
            <img src="<?php echo get_template_directory_uri(  ); ?>/assets/img/virtual-assistant-1.jpg" alt="Mesa con taza y ordenador">
        </figure>
    </section>

    <!-- TODO: Create section template_part -->
    <figure>
        <a href="mailto:valeriagereda@hotmail.com" target="_blank" rel="noopener noreferrer">
            <img src="<?php echo get_template_directory_uri(  ); ?>/assets/img/mangoflow.png" alt="Mangoflow Studio logo">  
        </a>
    </figure>
</main>

<?php get_footer(); ?>
