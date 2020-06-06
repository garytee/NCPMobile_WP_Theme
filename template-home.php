<?php 
/*
Template Name: Home
*/
get_header();
?>
<div id="primary" class="content-area">
  <main id="main" class="site-main">
    <?php while ( have_posts() ) : the_post(); ?>
      <?php if ( have_rows( 'flexible_content' ) ): ?>
        <?php while ( have_rows( 'flexible_content' ) ) : the_row(); ?>
          <?php if ( get_row_layout() == 'hero_image_w_text' ) : ?>
            <div class="row_1 section">
              <?php $hero_image = get_sub_field( 'hero_image' ); ?>
              <?php if ( $hero_image ) { ?>
                <img class="banner_image desktop_banner" src="<?php echo $hero_image['url']; ?>" alt="<?php echo $hero_image['alt']; ?>" />
              <?php } ?>
              <?php $mobile_hero_image = get_sub_field( 'mobile_hero_image' ); ?>
              <?php if ( $mobile_hero_image ) { ?>
                <img class="banner_image mobile_banner" src="<?php echo $mobile_hero_image['url']; ?>" alt="<?php echo $mobile_hero_image['alt']; ?>" />
              <?php } ?>
              <div class="pagetitle">
                <?php the_sub_field( 'hero_title' ); ?>
                <?php if ( have_rows( 'hero_buttons' ) ) : ?>
                  <div class="homepageheaderbuttons homeherobutton">
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
                </div>
                <?php else : ?>
                  <?php // no rows found ?>
                <?php endif; ?>
              </div>
              <?php elseif ( get_row_layout() == 'phone_hover_section' ) : ?>
                <div class="phonehoversection section">
                  <div class="row">
                    <div class="col">
                      <div class="bg-container">
                        <?php $phone_1 = get_sub_field( 'phone_1' ); ?>
                        <?php if ( $phone_1 ) { ?>
                          <div class="bg-block active"><img src="<?php echo $phone_1['url']; ?>" alt="<?php echo $phone_1['alt']; ?>" /></div>
                        <?php } ?>
                        <?php $phone_2 = get_sub_field( 'phone_2' ); ?>
                        <?php if ( $phone_2 ) { ?>
                          <div class="bg-block"><img src="<?php echo $phone_2['url']; ?>" alt="<?php echo $phone_2['alt']; ?>" /></div>
                        <?php } ?>
                        <?php $phone_3 = get_sub_field( 'phone_3' ); ?>
                        <?php if ( $phone_3 ) { ?>
                          <div class="bg-block"><img src="<?php echo $phone_3['url']; ?>" alt="<?php echo $phone_3['alt']; ?>" /></div>
                        <?php } ?>
                        <?php $phone_4 = get_sub_field( 'phone_4' ); ?>
                        <?php if ( $phone_4 ) { ?>
                          <div class="bg-block"><img src="<?php echo $phone_4['url']; ?>" alt="<?php echo $phone_4['alt']; ?>" /></div>
                        <?php } ?>
                      </div>
                    </div>
                    <div class="col">
                      <div class="phonehovertitle">
                        <?php the_sub_field( 'title' ); ?>
                      </div>
                      <ul class="select-block">
                        <li class="select-item active">
                          <?php the_sub_field( 'phone_text_1' ); ?>
                        </li>
                        <li class="select-item">
                          <?php the_sub_field( 'phone_text_2' ); ?>
                        </li>
                        <li class="select-item">
                          <?php the_sub_field( 'phone_text_3' ); ?>
                        </li>
                        <li class="select-item">
                          <?php the_sub_field( 'phone_text_4' ); ?>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
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
                <?php elseif ( get_row_layout() == 'how_it_works' ) : ?>
                  <div class="howitworks section">
                    <div class="row">
                      <div class="col">
                        <div class="howitworkstitle">
                          <?php the_sub_field( 'title' ); ?>
                        </div>
                        <div class="howitworksdescription">
                          <?php the_sub_field( 'text' ); ?>
                          <?php if ( have_rows( 'buttons' ) ) : ?>
                            <div class="homepageheaderbuttons">
                              <div class="row">
                                <?php while ( have_rows( 'buttons' ) ) : the_row(); ?>
                                  <?php $image = get_sub_field( 'image' ); ?>
                                  <?php if ( $image ) { ?>
                                    <div class="col">
                                      <a href="<?php the_sub_field( 'url' ); ?>">
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                      </a>
                                    </div>
                                  <?php } ?>
                                <?php endwhile; ?>
                              </div>
                            </div>
                            <?php else : ?>
                              <?php // no rows found ?>
                            <?php endif; ?>
                            <?php the_sub_field( 'text_after_buttons' ); ?>
                            <?php if ( have_rows( 'button' ) ) : ?>
                              <?php while ( have_rows( 'button' ) ) : the_row(); ?>
                                <a href="<?php the_sub_field( 'url' ); ?>">
                                  <button class="faqbutton">
                                    <?php the_sub_field( 'text' ); ?>
                                  </button>
                                </a>
                              <?php endwhile; ?>
                              <?php else : ?>
                                <?php // no rows found ?>
                              <?php endif; ?>
                            </div>
                          </div>
                          <?php if ( have_rows( 'cards' ) ) : ?>
                            <?php while ( have_rows( 'cards' ) ) : the_row(); ?>
                              <div class="col">
                                <div class='card'>
                                  <div class="flip-card-inner">
                                    <?php if ( have_rows( 'card_front' ) ) : ?>
                                      <?php while ( have_rows( 'card_front' ) ) : the_row(); ?>
                                        <div class='front'>
                                          <div class="flip-card-front">
                                            <?php $icon = get_sub_field( 'icon' ); ?>
                                            <?php if ( $icon ) { ?>
                                              <div class="cardicon">
                                                <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" />
                                              </div>
                                            <?php } ?>
                                            <div class="cardtitle">
                                              <?php the_sub_field( 'title' ); ?>
                                            </div>
                                            <?php $plus_icon = get_sub_field( 'plus_icon' ); ?>
                                            <?php if ( $plus_icon ) { ?>
                                              <div class="plusicon">
                                                <img src="<?php echo $plus_icon['url']; ?>" alt="<?php echo $plus_icon['alt']; ?>" />
                                              </div>
                                            <?php } ?>
                                          </div>
                                        </div>
                                      <?php endwhile; ?>
                                      <?php else : ?>
                                        <?php // no rows found ?>
                                      <?php endif; ?>
                                      <?php if ( have_rows( 'card_back' ) ) : ?>
                                        <div class='back'>
                                          <div class="flip-card-backside">
                                            <?php while ( have_rows( 'card_back' ) ) : the_row(); ?>
                                              <?php $icon = get_sub_field( 'icon' ); ?>
                                              <?php if ( $icon ) { ?>
                                                <div class="cardicon">
                                                  <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" />
                                                </div>
                                              <?php } ?>
                                              <div class="cardtitle">
                                                <?php the_sub_field( 'title' ); ?>
                                              </div>
                                              <div class="plusicon">
                                                <?php the_sub_field( 'subtext' ); ?>
                                              </div>
                                            <?php endwhile; ?>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <?php else : ?>
                                    <?php // no rows found ?>
                                  <?php endif; ?>
                                <?php endwhile; ?>
                                <?php else : ?>
                                  <?php // no rows found ?>
                                <?php endif; ?>
                              </div>
                            </div>
                            <?php elseif ( get_row_layout() == 'rewards_section' ) : ?>
                              <div class="rewards_section section">
                                <div class="row">
                                  <div class="col">
                                    <?php $image = get_sub_field( 'image' ); ?>
                                    <?php if ( $image ) { ?>
                                      <img class="pointericon" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php } ?>
                                    <div class="rewardstitle">
                                      <?php the_sub_field( 'title' ); ?>
                                    </div>
                                    <?php the_sub_field( 'text' ); ?>
                                    <?php if ( have_rows( 'button' ) ) : ?>
                                      <?php while ( have_rows( 'button' ) ) : the_row(); ?>
                                        <a href="<?php the_sub_field( 'url' ); ?>">
                                          <button class="rewardsbutton">
                                            <?php the_sub_field( 'text' ); ?>
                                          </button>
                                        </a>
                                      <?php endwhile; ?>
                                      <?php else : ?>
                                        <?php // no rows found ?>
                                      <?php endif; ?>
                                    </div>
                                    <div class="col">
                                      <?php $gift_card_image = get_sub_field( 'gift_card_image' ); ?>
                                      <?php if ( $gift_card_image ) { ?>
                                        <img class="giftcard" src="<?php echo $gift_card_image['url']; ?>" alt="<?php echo $gift_card_image['alt']; ?>" />
                                      <?php } ?>
                                    </div>
                                  </div>
                                </div>
                                <?php elseif ( get_row_layout() == 'make_an_impact' ) : ?>
                                  <div class="makeanimpactsection section">
                                    <div class="makeanimpacttitle">
                                      <?php the_sub_field( 'title' ); ?>
                                    </div>
                                    <div class="row">
                                      <?php if ( have_rows( 'columns' ) ) : ?>
                                        <?php while ( have_rows( 'columns' ) ) : the_row(); ?>
                                          <div class="col wow animated fadeIn" data-wow-offset="10">
                                            <?php the_sub_field( 'column' ); ?>
                                          </div>
                                        <?php endwhile; ?>
                                        <?php else : ?>
                                          <?php // no rows found ?>
                                        <?php endif; ?>
                                      </div>
                                    </div>
                                    <?php elseif ( get_row_layout() == 'panel_member_section' ) : ?>
                                      <div id="panel" class="panelmembersection section">
                                        <div class="row row_1">
                                          <div class="col">
                                            <div class="paneltitle">
                                              <?php the_sub_field( 'main_text' ); ?>
                                            </div>
                                            <?php if ( have_rows( 'buttons' ) ) : ?>
                                              <div class="panelbuttons">
                                                <div class="row">
                                                  <?php while ( have_rows( 'buttons' ) ) : the_row(); ?>
                                                    <?php $image = get_sub_field( 'image' ); ?>
                                                    <?php if ( $image ) { ?>
                                                      <div class="col">
                                                        <a href="<?php the_sub_field( 'link' ); ?>">
                                                          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                                        </a>
                                                      </div>
                                                    <?php } ?>
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
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <?php elseif ( get_row_layout() == 'fine_print' ) : ?>
                                          <div class="fp section">
                                            <?php the_sub_field( 'fine_print' ); ?>
                                          </div>
                                        <?php endif; ?>
                                      <?php endwhile; ?>
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