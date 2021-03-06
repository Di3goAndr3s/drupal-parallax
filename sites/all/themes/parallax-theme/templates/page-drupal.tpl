<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>
<header>
  <div class="wrapper">
	  <a href="index.php" class="logo">
		  <div><i class="fa fa-plus fa-3x"></i></div>
		  <div>DV</div>
		  <div>Front-end Developer</div>
	  </a>
<!--
	<nav>
	  <ul>
		<li><a href="diegovelasquez.php"><i class="fa fa-user fa-lg"></i>Acerca de</a></li>
		<li><a href="blog.php"><i class="fa fa-file-text-o fa-lg"></i>Blog</a></li>
		<li><a href="videos.php"><i class="fa fa-video-camera fa-lg"></i>Videos</a></li>
		<li><a href="contacto.php"><i class="fa fa-envelope-o fa-lg"></i>Contacto</a></li>
	  </ul>
	</nav>
  </div>
-->
</header>
	
</header>
<div class="system-drupal">
	   <?php if ($logo): ?>
		<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
		  <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
		</a>
	  <?php endif; ?>

	  <?php if ($site_name || $site_slogan): ?>
		<div id="name-and-slogan">
		  <?php if ($site_name): ?>
			<?php if ($title): ?>
			  <div id="site-name"><strong>
				<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
			  </strong></div>
			<?php else: /* Use h1 when the content title is empty */ ?>
			  <h1 id="site-name">
				<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
			  </h1>
			<?php endif; ?>
		  <?php endif; ?>

		  <?php if ($site_slogan): ?>
			<div id="site-slogan"><?php print $site_slogan; ?></div>
		  <?php endif; ?>
		</div> <!-- /#name-and-slogan -->
	  <?php endif; ?>
	<?php if ($main_menu || $secondary_menu): ?>
	  <div id="navigation"><div class="section">
		<?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('links', 'inline', 'clearfix')), 'heading' => t('Main menu'))); ?>
		<?php print theme('links__system_secondary_menu', array('links' => $secondary_menu, 'attributes' => array('id' => 'secondary-menu', 'class' => array('links', 'inline', 'clearfix')), 'heading' => t('Secondary menu'))); ?>
	  </div></div> <!-- /.section, /#navigation -->
	<?php endif; ?>

	<?php if ($breadcrumb): ?>
	  <div id="breadcrumb"><?php print $breadcrumb; ?></div>
	<?php endif; ?>

</div>
   

	<?php print $messages; ?>

<main>
	
	
	<div id="bg1" data-0="background-position:0px 0px;" data-end="background-position:-500px -10000px;"></div>
	<div id="bg2" data-0="background-position:0px 0px;" data-end="background-position:-500px -8000px;"></div>
	<div id="bg3" data-0="background-position:0px 0px;" data-end="background-position:-500px -6000px;"></div>
	<div id="progress" data-0="width:0%;background:hsl(200, 100%, 50%);" data-end="width:100%;background:hsl(920, 100%, 50%);"></div>

	
	<div  class="level-1" data-0="opacity:1;top:3%;transform:rotate(0deg);transform-origin:0 0;" data-500="opacity:0;top:-10%;transform:rotate(-90deg);">
		<?php print render($page['level-1']); ?>
		
	</div>

	<div  class="level-2" data-500="transform:scale(0) rotate(0deg);" data-1000="transform:scale(1) rotate(1440deg);opacity:1;" data-1600="" data-1700="transform:scale(5) rotate(3240deg);opacity:0;">
		
			<div id="content" class="column"><div class="section">
	   
		<a id="main-content"></a>
		<?php print render($title_prefix); ?>
		<?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
		<?php print render($title_suffix); ?>
		<?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
		<?php print render($page['help']); ?>
		<?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
		<?php print render($page['content']); ?>
		<?php print $feed_icons; ?>
	  </div></div>
	</div>

	<div class="level-3"  data-1700="top:100%;" data-2200="top:0%;" data-3000="display:block;" data-3700="top:-100%;display:none;">
		<?php print render($page['level-3']); ?>
	</div>

	<div class="level-4" data-0="display:none;" data-3900="display:block;" data-4900="background:rgba(0, 0, 0, 0);color[swing]:rgb(0,0,0);" data-5900="background:rgba(155,50,30,1);color:rgb(255,255,255);" data-10000="top:0%;" data-12000="top:-100%;">
		<div id="easing" data-3900="left:100%" data-4600="left:25%;">
			<?php print render($page['level-4']); ?>
		</div>

		<div class="drop" data-6500="left:15%;bottom:100%;" data-9500="bottom:0%;"><?php print render($page['level-5']); ?></div>
		<div class="drop" data-6500="left:25%;bottom[quadratic]:100%;" data-9500="bottom:5%;"><?php print render($page['level-5']); ?></div>
		<div class="drop" data-6500="left:35%;bottom[cubic]:100%;" data-9500="bottom:0%;"><?php print render($page['level-5']); ?></div>
		<div class="drop" data-6500="left:45%;bottom[swing]:100%;" data-9500="bottom:5%;"><?php print render($page['level-5']); ?></div>
		<div class="drop" data-6500="left:55%;bottom[WTF]:100%;" data-9500="bottom:0%;"><?php print render($page['level-5']); ?></div>
		<div class="drop" data-6500="left:65%;bottom[inverted]:100%;" data-9500="bottom:5%;"><?php print render($page['level-5']); ?></div>
		<div class="drop" data-6500="left:75%;bottom[bounce]:100%;" data-9500="bottom:0%;"><?php print render($page['level-5']); ?></div>
	</div>

	<div class="level-5" data-10000="top[cubic]:100%;border-radius[cubic]:0em;background:rgb(0,50,100);border-width:0px;" data-12000="top:10%;border-radius:2em;background:rgb(190,230,255);border-width:10px;">
		<?php print render($page['level-1']); ?>
	
	</div>

	<div class="level-6" data-0="top:0%;margin-top:2px;" data-end="top:100%;margin-top:-52px;"><?php print render($page['level-5']); ?></div>


	<!--[if lt IE 9]>
	<script type="text/javascript" src="../skrollr-ie/dist/skrollr.ie.min.js"></script>
	<![endif]-->

	<script type="text/javascript">
	var s = skrollr.init({
		edgeStrategy: 'set',
		easing: {
			WTF: Math.random,
			inverted: function(p) {
				return 1-p;
			}
		}
	});
	</script>
	
</main>
<footer>
	<?php print render($page['footer']); ?>
</footer>

