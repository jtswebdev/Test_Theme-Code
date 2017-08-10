        <footer class="footer">

            <div class="footer_container">

                <div class="icon_container">
                    <a class="icon_link" href="https://twitter.com/codersclan?lang=en"><img class="link_icon" src="<?php echo get_theme_file_uri( 'img/twitter_icon.png' ); ?>" alt="" /></a>
                    <a class="icon_link" href="https://www.facebook.com/CodersClan/"><img class="link_icon" src="<?php echo get_theme_file_uri( 'img/facebook_icon.png' ); ?>" alt="" /></a>
                </div>
                <div class="footer_text_container">
                    <p class="footer_text"><?php echo get_post_meta($post->ID, 'copyright_text', true); ?></p>
                    <div class="link_container">
                        <a class="footer_link" href="#"><?php echo get_post_meta($post->ID, 'footer_link_1', true); ?></a>
                        <a class="footer_link" href="#"><?php echo get_post_meta($post->ID, 'footer_link_2', true); ?></a>
                        <a class="footer_link" href="#"><?php echo get_post_meta($post->ID, 'footer_link_3', true); ?></a>
                        <a class="footer_link" href="#"><?php echo get_post_meta($post->ID, 'footer_link_4', true); ?></a>
                    </div>
                </div>

            </div>

        </footer>

    </body>
</html>