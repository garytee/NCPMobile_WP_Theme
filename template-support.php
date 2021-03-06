<?php 
/*
Template Name: Support
*/
get_header();
?>
<div id="primary" class="content-area">
  <main id="main" class="site-main">
    <?php
    while ( have_posts() ) :
      the_post();
      ?>
      <?php if ( have_rows( 'flexible_content' ) ): ?>
        <?php while ( have_rows( 'flexible_content' ) ) : the_row(); ?>
          <?php if ( get_row_layout() == 'hero_image_w_text' ) : ?>
            <div class="row_1">
              <?php $hero_image = get_sub_field( 'hero_image' ); ?>
              <?php if ( $hero_image ) { ?>
                <img class="banner_image desktop_banner" src="<?php echo $hero_image['url']; ?>" alt="<?php echo $hero_image['alt']; ?>" />
              <?php } ?>
              <?php $mobile_hero_image = get_sub_field( 'mobile_hero_image' ); ?>
              <?php if ( $mobile_hero_image ) { ?>
                <img class="banner_image mobile_banner" src="<?php echo $mobile_hero_image['url']; ?>" alt="<?php echo $mobile_hero_image['alt']; ?>" />
              <?php } ?>
              <div class="pagetitle">
                <div class="supportpageheadertext">
                  <?php the_sub_field( 'hero_title' ); ?>
                </div>
                <div class="supportpageheadersubtext">
                  <?php the_sub_field( 'hero_subtext' ); ?>
                </div>
                <?php if ( have_rows( 'hero_buttons' ) ) : ?>
                  <div class="homepageheaderbuttons">
                    <div class="row">
                      <?php while ( have_rows( 'hero_buttons' ) ) : the_row(); ?>
                        <?php $button_image = get_sub_field( 'button_image' ); ?>
                        <?php if ( $button_image ) { ?>
                          <div class="col">
                            <a href="<?php the_sub_field( 'button_url' ); ?>">
                              <img src="<?php echo $button_image['url']; ?>" alt="<?php echo $button_image['alt']; ?>" />
                            </a>
                          </div>
                        <?php } ?>
                      <?php endwhile; ?>
                    </div>
                  </div>
                  <?php else : ?>
                    <?php // no rows found ?>
                  <?php endif; ?>
                </div>
                <?php if ( have_rows( 'hero_arrow' ) ) : ?>
                  <?php while ( have_rows( 'hero_arrow' ) ) : the_row(); ?>
                    <?php $image = get_sub_field( 'image' ); ?>
                    <?php if ( $image ) { ?>
                      <div class="smooth-scroll">
                        <a data-scroll="" href="<?php the_sub_field( 'link_to_section' ); ?>">
                          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                        </a>
                      </div>
                    <?php } ?>
                  <?php endwhile; ?>
                </div>
              <?php endif; ?>
              <?php elseif ( get_row_layout() == 'support_info' ) : ?>
                <?php if ( have_rows( 'support_info' ) ) : ?>
                  <div class="background_div">
                    <div id="support" class="section supportinfosection">
                      <ul class="center-flex__2-of-3">
                        <?php while ( have_rows( 'support_info' ) ) : the_row(); ?>
                          <span>
                            <li>
                              <div>
                                <div class="supportcoltitle">
                                  <?php $icon = get_sub_field( 'icon' ); ?>
                                  <?php if ( $icon ) { ?>
                                    <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" />
                                  <?php } ?>    
                                    <?php the_sub_field( 'title' ); ?>
                                </div>
                                <div class="supportcoltext">
                                  <?php the_sub_field( 'text' ); ?>
                              </div>
                            </div>
                          </li>
                        </span>
                      <?php endwhile; ?>
                    </ul>
                  </div>
                </div>
                <?php else : ?>
                  <?php // no rows found ?>
                <?php endif; ?>
                <?php elseif ( get_row_layout() == 'video_popup' ) : ?>
                  <div class="section videopopupsection">
                    <a href="<?php the_sub_field( 'video_link' ); ?>" data-rel="responsivelightbox-video-0" class="wp-video-popup">
                      <?php $background_image = get_sub_field( 'background_image' ); ?>
                      <?php if ( $background_image ) { ?>
                        <img class="video_banner_image desktop_video_banner" src="<?php echo $background_image['url']; ?>" alt="<?php echo $background_image['alt']; ?>" />
                      <?php } ?>
                      <?php $mobile_background_image = get_sub_field( 'mobile_background_image' ); ?>
                      <?php if ( $mobile_background_image ) { ?>
                        <img class="video_banner_image mobile_video_banner" src="<?php echo $mobile_background_image['url']; ?>" alt="<?php echo $mobile_background_image['alt']; ?>" />
                      <?php } ?>
                      <div class="video_banner_overlay">
                        <div class="video_overlay_title">
                          <?php the_sub_field( 'main_text' ); ?>
                        </div>
                        <?php $play_button_image = get_sub_field( 'play_button_image' ); ?>
                        <?php if ( $play_button_image ) { ?>
                          <div class="video_overlay_play_button">
                            <img src="<?php echo $play_button_image['url']; ?>" alt="<?php echo $play_button_image['alt']; ?>" />
                          </div>
                        <?php } ?>
                        <div class="video_overlay_subtitle">
                          <?php the_sub_field( 'sub_text' ); ?>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
                <!-- background div -->
                <?php elseif ( get_row_layout() == 'panel_member_section' ) : ?>
                  <div class="section panelmembersection">
                    <div class="row row_1">
                      <div class="col">
                        <div class="paneltitle">
                          <?php the_sub_field( 'main_text' ); ?>
                        </div>
                        <?php if ( have_rows( 'buttons' ) ) : ?>
                          <div class="panelbuttons">
                            <div class="row">
                              <?php while ( have_rows( 'buttons' ) ) : the_row(); ?>
                                <div class="col">
                                  <?php $image = get_sub_field( 'image' ); ?>
                                  <?php if ( $image ) { ?>
                                    <a href="<?php the_sub_field( 'link' ); ?>">
                                      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    </a>
                                  <?php } ?>
                                </div>
                              <?php endwhile; ?>
                            </div>
                          </div>
                          <?php else : ?>
                            <?php // no rows found ?>
                          <?php endif; ?>
                          <div class="panel_pc_link">
                            <?php the_sub_field( 'pc_link' ); ?>
                          </div>
                          <div class="panelsubtext">
                            <?php the_sub_field( 'sub_text' ); ?>
                            <div class="row">
                              <div class="col">
                                <?php the_sub_field( 'phone_number' ); ?>
                              </div>
                              <div class="col">
                                <?php the_sub_field( 'email_address' ); ?>
                              </div>
                            </div>
                          <?php endif; ?>
                        <?php endwhile; ?>
                      </div>
                    </div>
                  </div>
                </div>
                <?php else: ?>
                  <?php // no layouts found ?>
                <?php endif; ?>
                <?php
    endwhile; // End of the loop.
    ?>
  </main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();