<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php wp_title('-',true,'right'); ?><?php bloginfo('name'); ?></title>

<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=OFL+Sorts+Mill+Goudy+TT">

<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/blueprint/screen.css" type="text/css" media="screen, projection" />
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/blueprint/print.css" type="text/css" media="print" />
<!--[if lt IE 8]><link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/blueprint/ie.css" type="text/css" media="screen, projection" /><![endif]-->

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />

<link rel="alternate" type="application/rss+xml"  title="<?php bloginfo('name'); ?> RSS"  href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom" href="<?php bloginfo('atom_url'); ?>" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="container">

<!-- HEAD -->
<div id="head" class="span-16 last">
<h1><?php bloginfo('name'); ?></h1>
</div><!-- /head -->

<!-- NAV -->
<div id="navbar" class="span-16 last">
<ul id="nav">
<li class="page_item page-item-1<?php if (is_home()) { print " current_page_item"; } ?>"><a href="<?php bloginfo('home'); ?>">Home</a></li>
<?php wp_list_pages('depth=1&title_li='); ?>
</ul>
</div><!-- /navbar -->

<?php
//SUBNAV
if (is_page() && (page_has_children() || page_is_subpage())) {
print "<!-- SUBNAV -->\n" . '<div id="subnavbar" class="span-16 last">' . "\n" . '<ul id="subnav">' . "\n";
global $post;
if (page_is_subpage()) { wp_list_pages(array('link_before' => '&laquo; ', 'title_li' => '', 'include' => $post->post_parent));  }
if (page_has_children()) { wp_list_pages('depth=1&title_li=&child_of=' . $post->ID); }
print "</ul>\n</div><!-- /subnavbar -->\n";
}
?>
