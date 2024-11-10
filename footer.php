        <footer class="footer">
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
