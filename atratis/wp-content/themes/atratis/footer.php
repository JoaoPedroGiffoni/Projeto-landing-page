            <footer>
                <div class="logoFooter">
                    <?php
                    $logo = get_field('logo');
                    if ($logo) {
                        echo '<img src="' . esc_url($logo['url']) . '" alt="' . esc_attr($logo['alt']) . '">';
                    }
                    ?></div>

                <div class="logoIconFooter">
                    <?php
                    $logo_icon = get_field('logo_icon');
                    if ($logo_icon) {
                        echo '<img src="' . esc_url($logo_icon['url']) . '" alt="' . esc_attr($logo_icon['alt']) . '">';
                    }
                    ?>
            </footer>
            <?php wp_footer(); ?></div>
            <script>
                function toggleMenu() {
                    var menu = document.getElementById("menu-menu");
                    menu.style.display = (menu.style.display === "block") ? "none" : "block";
                }
            </script>

            </body>

            </html>