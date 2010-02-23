<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<title><?php
	if (is_home()) {
		 bloginfo('name');
	} elseif (is_404()) { ?>
		404 Not Found 
	<?php } elseif (is_category()) { ?>
		<?php bloginfo('name'); ?> - Category: <?php wp_title(''); ?>
	<?php } elseif (is_search()) { ?>
		<?php bloginfo('name'); ?> - Search Results 
	<?php } elseif ( is_day() || is_month() || is_year() ) { ?>
		<?php bloginfo('name'); ?> - Archives: <?php wp_title(''); ?>
	<?php } else { ?>
		<?php bloginfo('name'); ?> - <?php wp_title(''); ?>
	<?php } ?>
	</title>

	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?php bloginfo('url'); ?>/xmlrpc.php?rsd" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	
	<!--[if lte IE 7]>
	<link href="<?php bloginfo('template_directory'); ?>/ie.css" type="text/css" rel="stylesheet" media="screen" />
	<![endif]-->
	
	<!--[if lte IE 6]>
	<link href="<?php bloginfo('template_directory'); ?>/ie6.css" type="text/css" rel="stylesheet" media="screen" />
	<![endif]-->
	
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' );?>
	<?php wp_head(); ?>

</head>

<body>
<div id="wrapper">
	<div id="search">
		<span class="twitter"><!-- If you want to integrate Twitter, use http://rick.jinlabs.com/code/twitter/ and put the code snippet here.  --></span>
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>
	</div>

	<div id="main_nav">
		<h1 class="masthead"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
		<p class="description"><?php bloginfo('description'); ?></p>

		<ul>
			
			<?php wp_list_pages('title_li=&depth=1'); ?>
			<li><a href="<?php bloginfo('atom_url'); ?>">Feed</a></li>
		</ul>
		
		
		
	</div>


