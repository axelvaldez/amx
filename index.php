<?php get_header(); ?>

<main class="container">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <!-- INTRO -->
      <article class="h-entry page-header row">
      <div class="col-12 lead">
        <?php the_field('home_desc', 'options'); ?>
      </div>
    </article>
    <hr>
    
      <!-- main content -->
      <?php 
      // include lnotes, inks  and photos in query
      // $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

      $temp = $wp_query; 
      $wp_query = null; 
      $wp_query = new WP_Query(); 
      $args = array('paged' => $paged, 'post_type' => array('notes', 'links', 'photos'));
      $wp_query->query($args);

      if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>

        <?php
          if(get_post_type( $post->ID ) == 'links'){
            include('inc/posts/link.php');
          } elseif(get_post_type( $post->ID ) == 'photos'){
            include('inc/posts/photo.php');
          } else {
            include('inc/posts/note.php');
          }
        ?>
        
        <hr>
        
        <?php endwhile;
        include('inc/pagination.php');
        $wp_query = null; 
        $wp_query = $temp;
        else : ?>
          <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
      
    
    
    
    </div>
  </div>
</main>

<?php get_footer(); ?>