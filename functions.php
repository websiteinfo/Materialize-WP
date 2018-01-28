<?php
// Add scripts and stylesheets
function startwordpress_scripts() {
	wp_enqueue_style( 'materialize', get_template_directory_uri() . '/css/materialize.min.css' );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css' );
		wp_enqueue_script( 'jquery-2.1.1', get_template_directory_uri() . '/js/jquery-2.1.1.min.js' );
	wp_enqueue_script( 'materialize', get_template_directory_uri() . '/js/materialize.min.js' );
	wp_enqueue_script( 'init', get_template_directory_uri() . '/js/init.js' );
}

add_action( 'wp_enqueue_scripts', 'startwordpress_scripts' );

// WordPress Titles
add_theme_support( 'title-tag' );

// Custom settings
function custom_settings_add_menu() {
  add_menu_page( 'Custom Settings', 'Custom Settings', 'manage_options', 'custom-settings', 'custom_settings_page', null, 99 );
}
add_action( 'admin_menu', 'custom_settings_add_menu' );

// Create Custom Global Settings
function custom_settings_page() { ?>
  <div class="wrap">
    <h1>Custom Settings</h1>
    <form method="post" action="options.php">
       <?php
           settings_fields( 'section' );
           do_settings_sections( 'theme-options' );      
           submit_button(); 
       ?>          
    </form>
  </div>
<?php }


// Support Featured Images
add_theme_support( 'post-thumbnails' );


// This theme uses wp_nav_menu() in one-two locations.
function wptutsplus_register_theme_menu() {
    register_nav_menu( 'primary', 'Main Navigation Menu' );
}
add_action( 'init', 'wptutsplus_register_theme_menu' );
?>