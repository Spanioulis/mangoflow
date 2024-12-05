        <footer class="footer">
            <ul>
                <li>
                    <a href="https://www.instagram.com/mangoflow.estudio?igsh=MTA0bGUxdmR0ZGJzbQ==" target="_blank" rel="noopener noreferrer">
                        <svg>
                            <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/icons/social.svg#instagram"></use>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="https://www.linkedin.com/in/valeria-gereda-06786346/?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank" rel="noopener noreferrer">
                        <svg>
                            <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/icons/social.svg#linkedin"></use>
                        </svg>
                    </a>
                </li>
            </ul>

            <a href="#top" class="footer__logo">
                <h2>mangoflow estudio</h2>
            </a>
        </footer>

        <?php wp_footer(); ?>

        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const topButton = document.querySelector('.footer__logo');

                topButton.addEventListener('click', (e) => {
                    e.preventDefault();
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                    });
                });
            });
        </script>
    </body>
</html>
