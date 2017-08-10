<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>

<?php get_header(); ?>
        <div class="bar">

            <div class="bar_wrap">

                <img id="logo_1" class="bar_logo" src="<?php echo esc_url( get_theme_mod( 'customizer_bar_logo_1_setting', get_theme_file_uri().'/img/tross_logo_grey.png' ) ); ?>" alt="" />
                <img id="logo_2" class="bar_logo" src="<?php echo esc_url( get_theme_mod( 'customizer_bar_logo_2_setting', get_theme_file_uri().'/img/logo_atreo.png' ) ); ?>" alt="" />
                <img id="logo_3" class="bar_logo" src="<?php echo esc_url( get_theme_mod( 'customizer_bar_logo_3_setting', get_theme_file_uri().'/img/klogoc_logo_grey.png' ) ); ?>" alt="" />

            </div>

        </div>

        <div id="section_1" class="section">

            <div class="col_container">
                <div id="left_col" class="column">
                    <div id="slot_1" class="slot">
                        <h6 class="slot_header"><?php echo get_post_meta($post->ID, 'sect_1_header_1', true); ?></h6>
                        <p class="slot_text"><?php echo get_post_meta($post->ID, 'sect_1_text_1', true); ?></p>
                    </div>
                    <div id="slot_3" class="slot">

                        <img id="slot_3_image" class="slot_image" src="<?php echo esc_url( get_theme_mod( 'customizer_section_1_image_1_setting', get_theme_file_uri().'/img/chemist_set.png' ) ); ?>" alt="" />

                    </div>
                    <div id="slot_5" class="slot">
                        <h6 class="slot_header"><?php echo get_post_meta($post->ID, 'sect_1_header_3', true); ?></h6>
                        <p class="slot_text"><?php echo get_post_meta($post->ID, 'sect_1_text_3', true); ?></p>
                    </div>
                </div>
                <div id="right_col" class="column">
                    <div id="slot_2" class="slot">

                        <img id="slot_2_image" class="slot_image" src="<?php echo esc_url( get_theme_mod( 'customizer_section_1_image_2_setting', get_theme_file_uri().'/img/screens.png' ) ); ?>" alt="" />

                    </div>
                    <div id="slot_4" class="slot">
                        <h6 class="slot_header"><?php echo get_post_meta($post->ID, 'sect_1_header_2', true); ?></h6>
                        <p class="slot_text"><?php echo get_post_meta($post->ID, 'sect_1_text_2', true); ?></p>
                    </div>
                    <div id="slot_6" class="slot">

                        <img id="slot_6_image" class="slot_image" src="<?php echo esc_url( get_theme_mod( 'customizer_section_1_image_3_setting', get_theme_file_uri().'/img/loud_speakers.png' ) ); ?>" alt="" />


                    </div>
                </div>
            </div>

        </div>

        <div id="section_2" class="section">

            <div class="hero_container">

                <img class="hero_img" src="<?php echo esc_url( get_theme_mod( 'customizer_section_2_image_setting', get_theme_file_uri().'/img/hero_img.png' ) ); ?>" />

            </div>
            <div class="hero_text_container">
                <h6 class="slot_header"><?php echo get_post_meta($post->ID, 'sect_2_header', true); ?></h6>
                <p class="slot_text"><?php echo get_post_meta($post->ID, 'sect_2_text', true); ?></p>
            </div>

        </div>

        <div id="section_3" class="section">

            <div class="slider_container">
				
					<h4 class="slider_header"><?php echo get_post_meta($post->ID, 'slider_header', true); ?></h4
                	<div class="mock_slider">

						<?php echo do_shortcode("[huge_it_slider id='1']"); ?>

					</div>

            </div>

        </div>

        <div id="section_4" class="section">

            <img id="form_background" src="<?php echo get_theme_file_uri( 'img/form_background.png' ); ?>" alt="" />
            <div class="form_container">
                <h3 class="form_header"><?php echo get_post_meta($post->ID, 'form_header', true); ?></h3>
                <h5 class="form_subheader"><?php echo get_post_meta($post->ID, 'form_subheader', true); ?></h5>


				<!--<form action="mailto:jtsjordan@hotmail.com" method="post" enctype="text/plain">
                    <input type="text" name="firstname" placeholder="<?php echo get_post_meta($post->ID, 'form_placeholder_1', true); ?>">
                    <br>
                    <input type="text" name="lastname" placeholder="<?php echo get_post_meta($post->ID, 'form_placeholder_2', true); ?>">
                    <br>
                    <input type="text" name="other" placeholder="<?php echo get_post_meta($post->ID, 'form_placeholder_3', true); ?>">
                    <br>
                    <input id="submit_button" type="submit" value="<?php echo get_post_meta($post->ID, 'form_button_text', true); ?>">
                </form>-->

<?php if ( is_active_sidebar( 'slider_widget_area' ) ) : ?>
	<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'slider_widget_area' ); ?>
	</div><!-- #primary-sidebar -->
<?php endif; ?>

            </div>

        </div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
