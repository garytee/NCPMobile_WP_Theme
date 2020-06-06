<?php
add_action( 'wp_enqueue_scripts', 'enqueue' );
function enqueue() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_script( 'theme-scripts', get_stylesheet_directory_uri().'/js/script.js' );
    wp_enqueue_script( 'font-awesome-pro', 'https://kit.fontawesome.com/1086457550.js' );
    wp_enqueue_script( 'smooth-scroll', get_stylesheet_directory_uri().'/js/smooth-scroll.polyfills.min.js' );
    wp_enqueue_script( 'wow-js', get_stylesheet_directory_uri().'/js/wow.min.js' );
    wp_enqueue_style( 'animate-css', get_stylesheet_directory_uri().'/css/animate.css' );
}
// Change login image
    function custom_loginlogo() {
      echo '<style type="text/css">
      h1 a {background-image: url('.get_stylesheet_directory_uri().'/images/ncpfavicon.png) !important;
    }
    .login h1 a{
      -webkit-background-size: cover !important;
      background-size: cover !important;
      height: 185px !important;
      width: 200px !important;
    }
    body.login {
      background-color: #FFFFFF;
    }
    .login label {
      font-size: 12px;
      color: #555555;
    }
    .login input[type="text"]{
      background-color: #ffffff;
      border-color:#dddddd;
      -webkit-border-radius: 4px;
    }
    .login input[type="password"]{
      background-color: #ffffff;
      border-color:#dddddd;
      -webkit-border-radius: 4px;
    }
    .login .button-primary {
      width: 120px;
      float:right;
      background-color:#17a8e3 !important;
      background: -webkit-gradient(linear, left top, left bottom, from(#17a8e3), to(#17a8e3));
      background: -webkit-linear-gradient(top, #17a8e3, #17a8e3);
      background: -moz-linear-gradient(top, #17a8e3, #17a8e3);
      background: -ms-linear-gradient(top, #17a8e3, #17a8e3);
      background: -o-linear-gradient(top, #17a8e3, #17a8e3);
      background-image: -ms-linear-gradient(top, #17a8e3 0%, #17a8e3 100%);
      color: #ffffff;
      -webkit-border-radius: 4px;
      border: 1px solid #0d9ed9;
    }
    .login .button-primary:hover {
      background-color:#17a8e3 !important;
      background: -webkit-gradient(linear, left top, left bottom, from(#17a8e3), to(#0d9ed9 ));
      background: -webkit-linear-gradient(top, #17a8e3, #0d9ed9 );
      background: -moz-linear-gradient(top, #17a8e3, #0d9ed9 );
      background: -ms-linear-gradient(top, #17a8e3, #0d9ed9 );
      background: -o-linear-gradient(top, #17a8e3, #0d9ed9 );
      background-image: -ms-linear-gradient(top, #0b436e 0%, #0d9ed9 100%);
      color: #fff;
      -webkit-border-radius: 4px;
      border: 1px solid #0d9ed9;
    }
    .login .button-primary:active {
      background-color:#17a8e3 !important;
      background: -webkit-gradient(linear, left top, left bottom, from(#0d9ed9), to(#17a8e3));
      background: -webkit-linear-gradient(top, #0d9ed9, #17a8e3);
      background: -moz-linear-gradient(top, #0d9ed9, #17a8e3);
      background: -ms-linear-gradient(top, #0d9ed9, #17a8e3);
      background: -o-linear-gradient(top, #0d9ed9, #17a8e3);
      background-image: -ms-linear-gradient(top, #0d9ed9 0%, #17a8e3 100%);
      color: #fff;
      -webkit-border-radius: 4px;
      border: 1px solid #0d9ed9;
    }
    p#backtoblog {
      display: none;
    }
    </style>';
}
add_action('login_head', 'custom_loginlogo');
// Connect the WordPress post editor to your custom stylesheet
         function my_theme_add_editor_styles() {
          add_editor_style( 'custom-editor-style.css' );
         }
         add_action( 'admin_init', 'my_theme_add_editor_styles' );
         function mce_mod( $init ) {
          $init['block_formats'] = 'Paragraph=p;Heading 1=h1;Heading 2=h2;Heading 3=h3;Heading 4=h4;Heading 5=h5;Heading 6=h6;';
    //This allows color styles to be inherited from the editor styelsheet.
          unset($init['preview_styles']);
          $style_formats = array (
        // array( 'title' => 'Bold text', 'inline' => 'b' ),
          );
          $init['style_formats_merge'] = false;
          return $init;
         }
         add_filter('tiny_mce_before_init', 'mce_mod');
add_filter( 'body_class', 'my_neat_body_class');
function my_neat_body_class( $classes ) {
     if ( is_page(9424) )
          $classes[] = 'homepage';
     return $classes; 
}
function my_acf_admin_head() {
          ?>
          <style type="text/css">
            .acf-flexible-content .layout .acf-fc-layout-handle {
              background-color: #202428;
              color: #eee;
            }
            .acf-repeater.-row > table > tbody > tr > td,
            .acf-repeater.-block > table > tbody > tr > td {
              border-top: 2px solid #202428;
            }
            .acf-repeater .acf-row-handle {
              vertical-align: top !important;
              padding-top: 16px;
            }
            .acf-repeater .acf-row-handle span {
              font-size: 20px;
              font-weight: bold;
              color: #202428;
            }
            .imageUpload img {
              width: 75px;
            }
            .acf-repeater .acf-row-handle .acf-icon.-minus {
              top: 30px;
            }
          </style>
          <?php
         }
         add_action('acf/input/admin_head', 'my_acf_admin_head');
function hwid_acf_admin_footer() {
          ?>
          <script>
            ( function( $) {
              acf.add_filter( 'wysiwyg_tinymce_settings', function( mceInit, id ) {
        // grab the classes defined within the field admin and put them in an array
        var classes = $( '#' + id ).closest( '.acf-field-wysiwyg' ).attr( 'class' );
        if ( classes === undefined ) {
          return mceInit;
        }
        var classArr = classes.split( ' ' ),
        newClasses = '';
        // step through the applied classes and only use those that start with the 'hwid-' prefix
        for ( var i=0; i<classArr.length; i++ ) {
          if ( classArr[i].indexOf( 'hwid-' ) === 0 ) {
            newClasses += ' ' + classArr[i];
          }
        }
        // apply the prefixed classes to the body_class property, which will then
        // put those classes on the rendered iframe's body tag
        mceInit.body_class += newClasses;
        return mceInit;
      });
            })( jQuery );
          </script>
          <?php
         }
         add_action('acf/input/admin_footer', 'hwid_acf_admin_footer');
  register_nav_menus(
    array( 
      'footer-menu2' => esc_html__( 'Footer Menu 2', 'divi' )
    ));