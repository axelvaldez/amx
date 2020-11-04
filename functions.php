<?php
  add_theme_support( 'menus' );
  add_theme_support( 'post-thumbnails' );
  add_post_type_support( 'notes', 'thumbnail' );

  // REGISTER LINK TAGS

  function create_link_tags_taxonomy() {
    $labels = array(
      'name' => _x( 'Link Tags', 'taxonomy general name' ),
      'singular_name' => _x( 'Link Tag', 'taxonomy singular name' ),
      'search_items' =>  __( 'Search Link Tags' ),
      'all_items' => __( 'All Link Tags' ),
      'edit_item' => __( 'Edit Link Tag' ), 
      'update_item' => __( 'Update Link Tag' ),
      'add_new_item' => __( 'Add New Link Tag' ),
      'new_item_name' => __( 'New Link Tag Name' ),
      'menu_name' => __( 'Link Tags' ),
    ); 	
  
    register_taxonomy('link_tag',array('links'), array(
      'hierarchical' => false,
      'labels' => $labels,
      'show_ui' => true,
      'show_admin_column' => true,
      'query_var' => true,
      'rewrite' => array( 'slug' => 'links/tag' ),
    ));
  }
  add_action( 'init', 'create_link_tags_taxonomy', 0 );


  // REGISTER POST TYPES

  function create_posttypes() {
    // notes
    register_post_type( 'notes',
      array(
          'labels' => array(
              'name' => __( 'Notes' ),
              'singular_name' => __( 'Note' )
          ),
          'public' => true,
          'has_archive' => true,
          'rewrite' => array('slug' => 'notes'),
          'supports' => array( 'title', 'editor', 'author', 'comments', 'revisions', 'custom-fields', ),
          'taxonomies' => array('post_tag'),
      )
    );

    // links
    register_post_type( 'links',
      array(
          'labels' => array(
              'name' => __( 'Links' ),
              'singular_name' => __( 'Link' )
          ),
          'public' => true,
          'has_archive' => true,
          'rewrite' => array('slug' => 'links'),
          'supports' => array( 'title', 'editor', 'author', 'revisions', 'custom-fields', ),
          'taxonomies' => array('link_tag'),
      )
    );

    // links
    register_post_type( 'photos',
      array(
          'labels' => array(
              'name' => __( 'Photos' ),
              'singular_name' => __( 'Photo' )
          ),
          'public' => true,
          'has_archive' => true,
          'rewrite' => array('slug' => 'photos'),
          'supports' => array( 'title', 'editor', 'author', 'revisions', 'custom-fields', ),
      )
    );
  }
  add_action( 'init', 'create_posttypes' );

  // ADD CUSTOM POST TYPES TO TAXONOMY ARCHIVES

  function av_add_custom_types( $query ) {
    if( is_category() || is_tag() && empty( $query->query_vars['suppress_filters'] ) ) {
      $query->set( 'post_type', array(
       'post', 'photos', 'notes', 'links'
      ));
      return $query;
    }
  }
  add_filter( 'pre_get_posts', 'av_add_custom_types' );

  // REGISTER MENU
  function register_menu() {
    register_nav_menu('main-nav',__( 'Main Nav' ));
  }
  add_action( 'init', 'register_menu' );

  // ADD POST TYPES TO FEED

  function avmx_feed_request($qv) {
      if (isset($qv['feed']) && !isset($qv['post_type']))
          $qv['post_type'] = array('notes', 'links', 'photos');
      return $qv;
  }
  add_filter('request', 'avmx_feed_request');

  // REMOVE DEFAULT POST TYPE

  function remove_default_post_type_menu_item() {
    remove_menu_page('edit.php');
  }
  add_action('admin_menu','remove_default_post_type_menu_item');

  // REMOVE UL FROM NAV MENU
  function remove_ul ( $menu ){
    return preg_replace( array( '#^<ul[^>]*>#', '#</ul>$#' ), '', $menu );
  }
  add_filter( 'wp_nav_menu', 'remove_ul' );

  // REMOVE CLASSES AND ID FROM NAV MENU
  function remove_css_id_filter($var) {
    return is_array($var) ? array_intersect($var, array('current-menu-item')) : '';
  }
  add_filter('page_css_class', 'remove_css_id_filter', 100, 1);
  add_filter('nav_menu_item_id', 'remove_css_id_filter', 100, 1);
  add_filter('nav_menu_css_class', 'remove_css_id_filter', 100, 1);

  // REMOVE ITEMS FROM WP_HEAD
  remove_action('wp_head', 'wp_generator');

  // ADD CLASS TO TAG LINKS

  function add_tag_class($links) {
      return str_replace('<a href="', '<a class="tag-link p-category" href="', $links);
  }
  add_filter( "term_links-post_tag", 'add_tag_class');

  // ADD EXCERPTS TO PAGES

  add_post_type_support( 'page', 'excerpt' );

  // ADD ACF OPTIONS PAGE

  if( function_exists('acf_add_options_page') ) {
    acf_add_options_page();
  }

  // REMOVE BLOCK LIBRARY

  function avmx_remove_block_library_css(){
    wp_dequeue_style( 'wp-block-library' );
  } 
  add_action( 'wp_enqueue_scripts', 'avmx_remove_block_library_css' );
?>