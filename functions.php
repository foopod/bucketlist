<?php

function startwordpress_scripts() {
	wp_enqueue_style( 'athena', get_template_directory_uri() . '/assets/css/style.css', array());
}
add_action( 'wp_enqueue_scripts', 'startwordpress_scripts' );

// Add Google Fonts
function startwordpress_google_fonts() {
				wp_register_style('GFonts', 'https://fonts.googleapis.com/css?family=Work+Sans:300|Quattrocento:400');
				wp_enqueue_style( 'GFonts');
                
		}
add_action('wp_print_styles', 'startwordpress_google_fonts');

add_theme_support( 'title-tag' );


// ------------------------------- Custom settings--------------------------------------//

function custom_settings_add_menu() {
  add_menu_page( 'Theme Settings', 'Theme Settings', 'manage_options', 'custom-settings', 'custom_settings_page', null, 99 );
}
add_action( 'admin_menu', 'custom_settings_add_menu' );

// Create Custom Global Settings
function custom_settings_page() { ?>
  <div class="wrap">
    <h1>Theme Settings</h1>
    <form method="post" action="options.php">
       <?php
           settings_fields( 'section' );
           do_settings_sections( 'theme-options' );      
           submit_button(); 
       ?>          
    </form>
  </div>
<?php }

// Twitter
function setting_twitter() { ?>
  <input type="text" name="twitter" id="twitter" value="<?php echo get_option( 'twitter' ); ?>" />
<?php }

function setting_github() { ?>
  <input type="text" name="github" id="github" value="<?php echo get_option('github'); ?>" />
<?php }

function setting_email() { ?>
  <input type="text" name="email" id="emal" value="<?php echo get_option('email'); ?>" />
<?php }

function setting_scrollimage() { ?>
  <input type="text" name="scrollimage" id="scrollimage" value="<?php echo get_option('scrollimage'); ?>" />
<?php }

function setting_profileimage() { ?>
  <input type="text" name="profileimage" id="profileimage" value="<?php echo get_option('profileimage'); ?>" />
<?php }

function custom_settings_page_setup() {
  add_settings_section( 'section', 'All Settings', null, 'theme-options' );
   add_settings_field( 'twitter', 'Twitter URL', 'setting_twitter', 'theme-options', 'section' );
  add_settings_field( 'github', 'GitHub URL', 'setting_github', 'theme-options', 'section' );
    add_settings_field( 'email', 'Public Email', 'setting_email', 'theme-options', 'section' );
    add_settings_field( 'scrollimage', 'Scrolling Image', 'setting_scrollimage', 'theme-options', 'section' );
    add_settings_field( 'profileimage', 'Profile Image', 'setting_profileimage', 'theme-options', 'section' );
  
	register_setting( 'section', 'twitter' );
  register_setting( 'section', 'github' );
    register_setting( 'section', 'email' );
    register_setting( 'section', 'scrollimage');
    register_setting( 'section', 'profileimage');
}
add_action( 'admin_init', 'custom_settings_page_setup' );