
<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
<meta property="og:title" content="<?php the_title(); ?>" />
<meta property="og:url" content="<?php the_permalink(); ?>" />
<meta property="og:type" content="article" />
<meta property="og:description" content="<?php echo get_the_excerpt(); ?>" />
<?php if( get_post_type( $post->ID ) == 'photos' ){ ?>
  <meta property="og:image" content="<?php echo get_field('photo'); ?>" />
  <meta property="og:image:url" content="<?php echo get_field('photo'); ?>" />
  <meta property="og:image:secure_url" content="<?php echo get_field('photo'); ?>" />
<?php }else if( has_post_thumbnail() ){ ?>
  <meta property="og:image" content="<?php echo get_the_post_thumbnail_url(); ?>" />
  <meta property="og:image:url" content="<?php echo get_the_post_thumbnail_url(); ?>" />
  <meta property="og:image:secure_url" content="<?php echo get_the_post_thumbnail_url(); ?>" />
<?php } else { ?>
  <meta property="og:image" content="https://axelvaldez.mx/a/files/2020/04/axel-blue.png" />
  <meta property="og:image:url" content="https://axelvaldez.mx/a/files/2020/04/axel-blue.png" />
  <meta property="og:image:secure_url" content="https://axelvaldez.mx/a/files/2020/04/axel-blue.png" />
<?php }?>

<meta itemprop="name" content="<?php the_title(); ?>" />
<meta itemprop="headline" content="<?php the_title(); ?>" />
<meta itemprop="description" content="<?php echo get_the_excerpt(); ?>" />
<?php if( has_post_thumbnail() ){ ?>
  <meta itemprop="image" content="<?php echo get_the_post_thumbnail_url(); ?>" />
<?php } else { ?>
  <meta itemprop="image" content="https://axelvaldez.mx/a/files/2020/04/axel-blue.png" />
<?php }?>
<meta itemprop="author" content="Axel Valdez" />
 

<meta name="twitter:title" content="<?php the_title(); ?>" />
<meta name="twitter:url" content="<?php the_permalink(); ?>" />
<meta name="twitter:description" content="<?php echo get_the_excerpt(); ?>" />
<?php if( get_post_type( $post->ID ) == 'photos' ){ ?>
  <meta name="twitter:image" content="<?php echo get_field('photo'); ?>" />
  <meta name="twitter:card" content="summary_large_image" />
<?php }else if( has_post_thumbnail() ){ ?>
  <meta name="twitter:image" content="<?php echo get_the_post_thumbnail_url(); ?>" />
  <meta name="twitter:card" content="summary_large_image" />
<?php } else { ?>
  <meta name="twitter:image" content="https://axelvaldez.mx/a/files/2020/04/axel-blue.png" />
  <meta name="twitter:card" content="summary" />
<?php }?>
<meta itemprop="author" content="Axel Valdez" />
<meta name="twitter:site" content="@axelvaldezmx" />

<link rel="canonical" href="<?php the_permalink(); ?>" />
<meta name="description" content="<?php echo get_the_excerpt(); ?>" />
<meta name="author" content="Axel Valdez" />