<?php 
    // include navwalker class 
    require_once('wp-bootstrap-navwalker.php');
    /*
    ** function to add my custom style
    ** wp_enqueue_style()
    */
    function tamaa_add_styles() {
        wp_enqueue_style('bs-css', get_template_directory_uri() . '/css/bootstrap.min.css');
        wp_enqueue_style('fontawsome-css', get_template_directory_uri() . '/css/font-awesome.min.css');
        wp_enqueue_style('style-css', get_template_directory_uri() . '/style.css');
        
    }    
    /*
    ** function to add my custom scripts
    ** wp_enqueue_style()
    */
    function tamaa_add_scripts() {
        wp_deregister_script('jquery'); // remove jquery registeration
        wp_register_script('jquery', includes_url('/js/jquery/jquery.js'), false, '', true); // register a new jquery in footer
        wp_enqueue_script('jquery'); //add the new jquery
        wp_enqueue_script('BS-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), false, true);
        wp_enqueue_script('style-js', get_template_directory_uri() . '/js/style.js', array(), false, true);
    }
    add_action('wp_enqueue_scripts', 'tamaa_add_styles');
    add_action('wp_enqueue_scripts', 'tamaa_add_scripts'); 

    /* 
    ** add custom menu support
    */
    function tamaa_register_custom_menu() {
        register_nav_menus(array(
            'BS-menu' => 'Navbar',
            'footer_menu' => 'footer menu'
        ));
    }
    add_action('init', 'tamaa_register_custom_menu');

    function tamaa_bs_menu() {
        wp_nav_menu(array(
            'theme_location' => 'BS-menu',
            'menu_class' => 'nav navbar-nav navbar-right',
            'container' => false,
            'depth' => 2,
            'walker' => new wp_bootstrap_navwalker()
        ));
    }

add_theme_support('post-thumbnails'); // add theme 

/*
** customize the excerpt word lenght & read more dots
*/

function tamaa_read_more($lenght) {
    return 35;
}
add_filter('excerpt_length', 'tamaa_read_more'); // ('name the filter', 'my function name')

/*
** customize the excerpt word lenght & read more dots
*/

function tamaa_dots($more) {
    return '...';
}
add_filter('excerpt_more', 'tamaa_dots'); // ('name the filter', 'my function name')


function numbering_pagination () {
    global $wp_query; // make wp query global
    $all_pages = $wp_query->max_num_pages; // get all posts
    $current_page = max(1, get_query_var('paged')); //get current page
    if($all_pages > 1) { // check if total pages > 1
        return paginate_links(array(
            'base' => get_pagenum_link() . '%_%',
            'format' => 'page/%#%',
            'current' => $current_page
        ));
    }
}


function my_main_sidebar() {
    register_sidebar(array( // register main sidebar
        'name' => 'Main Sidebar',
        'id' => 'main-sidebar',
        'description' => 'Main Sidebar',
        'class' => 'main-sidebar',
        'before_widget' => '<div class="widget-content">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    )); 
}
add_action('widgets_init', 'my_main_sidebar');


/**
 * Generate custom search form
 *
 * @param string $form Form HTML.
 * @return string Modified form HTML.
 */
function wpdocs_my_search_form( $form ) {
          
 if (have_posts()) {
          $form = 
        '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
    <h3 class="screen-reader-text" for="s">' . __( 'Search' ) . '</h3>
    <div class="search-content">
    <input type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="Search for" />
    <input type="submit" id="searchsubmit" value="'. esc_attr__( 'Search' ) .'" />
    </div>
    </form>';
     return $form;
 } else {
     $not = 
         '<div class="search-content">
            <h1> not found </h1>
            </div>
         ';

     
         return $not;
 }
 
    
}
add_filter( 'get_search_form', 'wpdocs_my_search_form' );