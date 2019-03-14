<?php
// Stylesheets and JavaScripts
function littmarck_scripts() {
	
	// Main WP Style.css file
	wp_enqueue_style('wp-style', get_stylesheet_uri());
    
    // Main styling
    wp_enqueue_style('style-main', get_template_directory_uri() .'/css/main.min.css');

    // Scroll bar styling
    wp_enqueue_style('mCustomScroll-bar', get_template_directory_uri() .'/src/sass/mCustomScrollbar/jquery.mCustomScrollbar.min.css');
	
	// jQuery
    wp_enqueue_script('jquery-script', get_template_directory_uri() .'/src/js/jquery/jquery-3.3.1.min.js');
    
    // Mixitup
	wp_enqueue_script('mixitup', get_template_directory_uri() .'/src/js/mixitup/mixitup.min.js');
    
    // Main JS file
    wp_enqueue_script('main-script', get_template_directory_uri() .'/js/main-javascript.min.js');
    
    // Scroll Speed Master
    wp_enqueue_script('scrollSpeed', get_template_directory_uri() .'/src/js/scrollSpeed-master/jQuery.scrollSpeed.js');
    
    //CustomScrollbar
    wp_enqueue_script('mCustomScrollbar', get_template_directory_uri() .'/src/js/mCustomScrollbar/jquery.mCustomScrollbar.min.js');

    //CustomScrollbar
    wp_enqueue_script('fancybox', get_template_directory_uri() .'/src/js/fancybox/jquery.fancybox.min.js');
    
    // Responsive Slides JS file
    //wp_enqueue_script('new-scripts', get_template_directory_uri() .'/js/vendor/responsiveslides.min.js');
	
}
add_action('wp_enqueue_scripts', 'littmarck_scripts');

//Excerpt
add_filter( "the_excerpt", "add_class_to_excerpt" );
function add_class_to_excerpt( $excerpt ) {
    return str_replace('<p', '<p class="p-small"', $excerpt);
}

// Main menu
function register_my_menu() {
    register_nav_menu('main-menu',__( 'Main Menu' ));
  }
  add_action( 'init', 'register_my_menu' );
 

  
// create custom plugin settings menu
add_action('admin_menu', 'baw_create_menu');

function baw_create_menu() {

	//create new top-level menu
	add_menu_page('Page Settings', 'Page Settings', 'administrator', __FILE__, 'baw_settings_page','/wp-content/themes/t.littmarck//img/settings.svg');

	//call register settings function
	add_action( 'admin_init', 'register_mysettings' );
}


function register_mysettings() {

    //Logotype text
    register_setting( 'baw-settings-group', 'logotype_text' );

    //Menu
    register_setting( 'baw-settings-group', 'menu_label' );

	//register our settings
	register_setting( 'baw-settings-group', 'location_label' );
	register_setting( 'baw-settings-group', 'location_city' );
    register_setting( 'baw-settings-group', 'location_street_adress' );
    register_setting( 'baw-settings-group', 'location_zip_city' );
    register_setting( 'baw-settings-group', 'location_country' );

    //Contact
    register_setting( 'baw-settings-group', 'contact_label' );
    register_setting( 'baw-settings-group', 'contact_heading' );
    register_setting( 'baw-settings-group', 'contact_email' );
    register_setting( 'baw-settings-group', 'contact_number' );

    //Footer
    register_setting( 'baw-settings-group', 'footer_name' );
    register_setting( 'baw-settings-group', 'social_facebook' );
    register_setting( 'baw-settings-group', 'social_twitter' );
    register_setting( 'baw-settings-group', 'social_instagram' );
}

function baw_settings_page() {
?>
<div class="wrap">
<h2>Site settings</h2>

<form method="post" action="options.php">
    <?php settings_fields( 'baw-settings-group' ); ?>

<style type="text/css">
input {
    width: 300px;
    padding:8px 5px;
}
</style>

    <h3>Logotype text</h3>
    <table class="form-table">
        <tr valign="top">
        <th scope="row">Logotype text:</th>
        <td><input type="text" name="logotype_text" value="<?php echo get_option('logotype_text'); ?>" /></td>
        </tr>
        
    </table>
    <hr /><br />

    <h3>Menu label</h3>
    <table class="form-table">
        <tr valign="top">
        <th scope="row">Column label:</th>
        <td><input type="text" name="menu_label" value="<?php echo get_option('menu_label'); ?>" /></td>
        </tr>
    </table>
    <hr /><br />

    <h3>Location</h3>
    <table class="form-table">
        <tr valign="top">
        <th scope="row">Column label:</th>
        <td><input type="text" name="location_label" value="<?php echo get_option('location_label'); ?>" /></td>
        </tr>
         
        <tr valign="top">
        <th scope="row">City:</th>
        <td><input type="text" name="location_city" value="<?php echo get_option('location_city'); ?>" /></td>
        </tr>
        
        <tr valign="top">
        <th scope="row">Street adress:</th>
        <td><input type="text" name="location_street_adress" value="<?php echo get_option('location_street_adress'); ?>" /></td>
        </tr>

        <tr valign="top">
        <th scope="row">Zip and city:</th>
        <td><input type="text" name="location_zip_city" value="<?php echo get_option('location_zip_city'); ?>" /></td>
        </tr>

        <tr valign="top">
        <th scope="row">Country:</th>
        <td><input type="text" name="location_country" value="<?php echo get_option('location_country'); ?>" /></td>
        </tr>
    </table>
    <hr /><br />

    <h3>Contact</h3>
    <table class="form-table">
        <tr valign="top">
        <th scope="row">Column label:</th>
        <td><input type="text" name="contact_label" value="<?php echo get_option('contact_label'); ?>" /></td>
        </tr>
         
        <tr valign="top">
        <th scope="row">Heading:</th>
        <td><input type="text" name="contact_heading" value="<?php echo get_option('contact_heading'); ?>" /></td>
        </tr>
        
        <tr valign="top">
        <th scope="row">Email:</th>
        <td><input type="text" name="contact_email" value="<?php echo get_option('contact_email'); ?>" /></td>
        </tr>

        <tr valign="top">
        <th scope="row">Phone number:</th>
        <td><input type="text" name="contact_number" value="<?php echo get_option('contact_number'); ?>" /></td>
        </tr>
    </table>
    <hr /><br />

    <h3>Footer</h3>
    <table class="form-table">
        <tr valign="top">
        <th scope="row">Name:</th>
        <td><input type="text" name="footer_name" value="<?php echo get_option('footer_name'); ?>" /></td>
        </tr>
         
        
        <tr valign="top">
        <th scope="row">Facebook url:</th>
        
        <td><input type="text" name="social_facebook" value="<?php echo get_option('social_facebook'); ?>" /></td>
        </tr>
        
        <tr valign="top">
        <th scope="row">Twitter url:</th>
        <td><input type="text" name="social_twitter" value="<?php echo get_option('social_twitter'); ?>" /></td>
        </tr>

        <tr valign="top">
        <th scope="row">Instagram url:</th>
        <td><input type="text" name="social_instagram" value="<?php echo get_option('social_instagram'); ?>" /></td>
        </tr>
    </table>
    <hr /><br />
    
    <p class="submit">
    <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
    </p>

</form>
</div>
<?php } ?>