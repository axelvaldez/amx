<?php
$pagetitle = 'Front Page';
$pageurl = get_bloginfo('url') . '/';
$pagedescription = strip_tags(get_field( 'home_desc', 'options'));
?>

<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
<meta property="og:title" content="<?php echo $pagetitle; ?>" />
<meta property="og:url" content="<?php echo $pageurl; ?>" />
<meta property="og:type" content="article" />
<meta property="og:description" content="<?php echo $pagedescription; ?>" />
<meta property="og:image" content="https://axelvaldez.mx/a/files/2020/04/axel-blue.png" />
<meta property="og:image:url" content="https://axelvaldez.mx/a/files/2020/04/axel-blue.png" />
<meta property="og:image:secure_url" content="https://axelvaldez.mx/a/files/2020/04/axel-blue.png" />

<meta itemprop="name" content="<?php echo $pagetitle; ?>" />
<meta itemprop="headline" content="<?php echo $pagetitle; ?>" />
<meta itemprop="description" content="<?php echo $pagedescription; ?>" />
<meta itemprop="image" content="https://axelvaldez.mx/a/files/2020/04/axel-blue.png" />
<meta itemprop="author" content="Axel Valdez" />

<meta name="twitter:title" content="<?php echo $pagetitle; ?>" />
<meta name="twitter:url" content="<?php echo $pageurl; ?>" />
<meta name="twitter:description" content="<?php echo $pagedescription; ?>" />
<meta name="twitter:image" content="https://axelvaldez.mx/a/files/2020/04/axel-blue.png" />
<meta name="twitter:card" content="summary" />
<meta itemprop="author" content="Axel Valdez" />
<meta name="twitter:site" content="@axelvaldezmx" />

<link rel="canonical" href="<?php echo $pagetitle; ?>" />
<meta name="description" content="<?php echo $pagedescription; ?>" />
<meta name="author" content="Axel Valdez" />