<?php 
/*
Template Name: About
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
            <?php $hero_image = get_sub_field( 'hero_image' ); ?>
            <?php if ( $hero_image ) { ?>
              <div class="section row_1">
                <img class="banner_image desktop_banner" src="<?php echo $hero_image['url']; ?>" alt="<?php echo $hero_image['alt']; ?>" />
              <?php } ?>
              <?php $mobile_hero_image = get_sub_field( 'mobile_hero_image' ); ?>
              <?php if ( $mobile_hero_image ) { ?>
                <img class="banner_image mobile_banner" src="<?php echo $mobile_hero_image['url']; ?>" alt="<?php echo $mobile_hero_image['alt']; ?>" />
              <?php } ?>
              <div id="abouttitle" class="pagetitle">
                <div class="aboutpageheadertext">
                  <?php the_sub_field( 'hero_title' ); ?>
                </div>
                <div class="aboutpageheadersubtext">
                  <?php the_sub_field( 'hero_subtext' ); ?>
                </div>
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
                </div>
              <?php endwhile; ?>
            <?php endif; ?>
            <div class="aboutbg">
              <?php elseif ( get_row_layout() == 'about_ncp' ) : ?>
                <div id="about" class="section aboutsec1">
                  <div class="row">
                    <div class="col">
                      <?php $ncp_logo = get_sub_field( 'ncp_logo' ); ?>
                      <?php if ( $ncp_logo ) { ?>
                        <img src="<?php echo $ncp_logo['url']; ?>" alt="<?php echo $ncp_logo['alt']; ?>" />
                      <?php } ?>
                    </div>
                    <div class="col">
                      <?php the_sub_field( 'text' ); ?>
                    </div>
                  </div>
                </div>
                <?php elseif ( get_row_layout() == 'our_parent_companies' ) : ?>
                  <div class="section parentcompanysec">
                   <div class="sectiontitle"> 
                    <?php the_sub_field( 'title' ); ?>
                  </div>
                  <?php if ( have_rows( 'columns' ) ) : ?>
                    <div class="row">
                      <?php while ( have_rows( 'columns' ) ) : the_row(); ?>
                        <div class="col">
                          <?php $image = get_sub_field( 'image' ); ?>
                          <?php if ( $image ) { ?>
                            <div class="parentimg">
                              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                            </div>
                          <?php } ?>
                          <div class="title">
                            <?php the_sub_field( 'title' ); ?>
                          </div>
                          <div class="subtext">
                            <?php the_sub_field( 'text' ); ?>
                          </div>
                        </div>
                      <?php endwhile; ?>
                    </div>
                  </div>
                  <?php else : ?>
                    <?php // no rows found ?>
                  <?php endif; ?>
                </div>
                <?php elseif ( get_row_layout() == 'learn_more' ) : ?>
                  <div class="section aboutlearnmore">
                    <?php the_sub_field( 'learn_more' ); ?>
                  </div>
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