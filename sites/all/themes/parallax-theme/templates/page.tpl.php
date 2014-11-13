<?php ?>
<!--<header data-2000="bottom[swing]: 0" data-end="bottom[swing]:0">	<div class="wrapper">	</div></header>-->
<nav data-2600="bottom[swing]: -100px" data-2800="bottom[swing]: 0px">
	<?php print render($page[ 'menu']); ?>
</nav>
<aside>
	<?php print $messages; ?>
</aside>
<main>
	<div class="scroll-down" data-start="opacity: 1" data-2800="opacity: 0" data-end="opacity: 0"><i class="fa fa-arrow-down fa-2x"></i>	
		<div>Scroll Down</div>
	</div>
	<div class="level-1" data-start="top:0%; background-color:rgb(23, 44, 60);" data-2800="top[swing]: 0%; background-color:rgb(39, 72, 98); " data-4800="top[swing]: 0%; background-color:rgb(39, 72, 98);" data-5600="background-color[swing]: rgb(39, 72, 98);" data-6600="background-color[swing]: rgb(217, 104, 49);">
		<div class="wrapper">
			<div class="pc-pic" data-0="right[swing]: -1000px; top[swing]: 100px" data-1300="right[swing]: -1000px; top[swing]: 100px" data-1800="right[swing]: 100px; top[swing]: 100px"></div>
			<div class="tablet-pic" data-0="right[swing]: -1000px; top[swing]: 220px" data-1800="right[swing]: -1000px; top[swing]: 220px" data-2300="right[swing]: 400px; top: 220px"></div>
			<div class="mobil-pic" data-0="right[swing]: -1000px; top[swing]: 256px" data-2300="right[swing]: -1000px; top[swing]: 256px" data-2800="right[swing]: 80px; top: 256px"></div>
			<div class="logo" data-0="bottom[swing]: 35%; left[swing]: 35%" data-1000="left[swing]: 0%" data-1300="bottom[swing]: 20%;">
				<!--			<i class="fa fa-plus fa-3x"></i>-->
				<div class="div">	<span class="opendiv" data-0="transform[swing]:translateX(114px); opacity: 1;" data-100="opacity: 0;"><</span>		<span data-0="color: rgb(255, 255, 255); transform[swing]:translateX(116px);" data-1000="transform[swing]:translateX(0px); color: rgb(230, 179, 61)">di</span>		<span data-200="opacity: 0" data-1300="opacity: 1">ego</span>		<span data-0="color: rgb(255, 255, 255); transform[swing]:translateX(10px)" data-1000="transform[swing]:translateX(0px); color: rgb(230, 179, 61)">v</span>		<span data-200="opacity: 0" data-1300="opacity: 1">elásquez</span><span data-0="opacity: 0" data-900="opacity: 0" data-1300="opacity: 1">.co</span>		<span class="closediv" data-0="transform[swing]:translateX(-336px); opacity: 1; " data-100="opacity: 0;">></span>	
				</div>
				<div class="slogan" data-0="opacity: 0" data-1300="opacity: 0" data-1800="opacity: 1">Front End Developer</div>
			</div>
			<div id="content" class="column hide">
				<div class="section">
					<a id="main-content"></a>
					<?php print render($title_prefix); ?>
					<?php if ($title): ?>
					<h1 class="title" id="page-title"><?php print $title; ?></h1>	
					<?php endif; ?>
					<?php print render($title_suffix); ?>
					<?php if ($tabs): ?>
					<div class="tabs">
						<?php print render($tabs); ?>
					</div>
					<?php endif; ?>
					<?php print render($page[ 'help']); ?>
					<?php if ($action_links): ?>
					<ul class="action-links">
						<?php print render($action_links); ?>
					</ul>
					<?php endif; ?>
					<?php print render($page[ 'content']); ?>
					<?php print $feed_icons; ?>
				</div>
			</div>
		</div>
	</div>
	<div class="level-2 about-us" data-0="top[swing]: 100%" data-2500="background-color[swing]: rgb(23, 44, 60)" data-5000="top[swing]: 0%; background-color[swing]: rgb(39, 72, 98);" data-5800="top[swing]: 0px" data-6800="top[swing]: -1000px">
		<div class="wrapper">
			<div class="bg-title" data-0="background-color[swing]: rgb(230, 179, 61); left: -100%" data-3000="left: -100%" data-4800="background-color[swing]: rgb(230, 179, 61; left: 0"></div>
			<h2 data-0="opacity[swing]: 0; font-size:100px" data-2800="opacity[swing]: 0;" data-5600="opacity[swing]: 1; font-size: 60px">Acerca de mí</h2>	
			<div class="about-us-txt" data-0="left[swing]: -1000px" data-4800="left[swing]: -1000px; " data-5300="left[swing]: 100px; ">
				<?php print render($page[ 'about-us-txt']); ?>
				<p>Profesional en medios con interés en nuevas tecnologías con amplia experiencia en maquetación web, diseño y desarrollo front-end. Conocimientos avanzados en HTML, HTML5, CSS3, JQuery, SEO y responsive webs.</p>
				<p>Poseo habilidades en gestores de contenidos y administradores eCommerce. Experiencia en Drupal 7, Joomla en todas sus versiones, Wordpress y gestores de comercio electrónico como Prestashop y Magento. Experiencia en edición de contenidos web y administración de sitios.</p>
			</div>
			<div class="about-us-link" data-0="left[swing]: -1000px" data-5300="left[swing]: -1000px; " data-5800="left[swing]: 100px; "><a href="">Ampliar</a>	
			</div>
			<div class="about-us-img" data-0="right[swing]: -1000px" data-5300="right[swing]: -1000px; " data-5800="right[swing]: 100px; ">
				<?php print render($page[ 'about-us-img']); ?>
				<img src="<?php print base_path() . path_to_theme() . '/' . 'assets/img/diegovelasquez.jpg'; ?>" />
			</div>
		</div>
	</div>
	<section class="level-3 skills" data-0="left: -100% " data-9700="left: -100% " data-10700="left: 0% " data-24700="left: 0%" data-30000="right: -100%">
		<div class="wrapper">
			<h2 data-10600="opacity: 0;" data-10700="right: -100%; opacity: 1;" data-11700="right: 5%;" data-12000="right: -3%;">Habilidades</h2>	
			<article data-11800="opacity: 0;" data-12300="opacity: 1;">
				<h1>HTML</h1>	
				<figure>
					<img src="<?php print base_path() . path_to_theme() . '/' . 'assets/img/icons/html5.png'; ?>" />
				</figure>
				<div class="skill-bar"><span></span>	
				</div>
				<p>Donec sollicitudin molestie malesuada. Curabitur aliquet quam id dui posuere blandit. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.</p>
				<ul>
					<li><i class="fa fa-check-circle"></i> Vivamus suscipit tortor</li>
					<li><i class="fa fa-check-circle"></i> Vivamus suscipit tortor</li>
					<li><i class="fa fa-check-circle"></i> Vivamus suscipit tortor</li>
				</ul>
			</article>
			<article data-12300="opacity: 0;" data-12800="opacity: 1;">
				<h1>CSS</h1>	
				<figure>
					<img src="<?php print base_path() . path_to_theme() . '/' . 'assets/img/icons/css3.png'; ?>" />
				</figure>
				<div class="skill-bar"><span></span>	
				</div>
				<p>Donec sollicitudin molestie malesuada. Curabitur aliquet quam id dui posuere blandit. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.</p>
				<ul>
					<li><i class="fa fa-check-circle"></i> Vivamus suscipit tortor</li>
					<li><i class="fa fa-check-circle"></i> Vivamus suscipit tortor</li>
					<li><i class="fa fa-check-circle"></i> Vivamus suscipit tortor</li>
				</ul>
			</article>
			<article data-12800="opacity: 0;" data-13300="opacity: 1;">
				<h1>CSS</h1>	
				<figure>
					<img src="<?php print base_path() . path_to_theme() . '/' . 'assets/img/icons/css3.png'; ?>" />
				</figure>
				<div class="skill-bar"><span></span>	
				</div>
				<p>Donec sollicitudin molestie malesuada. Curabitur aliquet quam id dui posuere blandit. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.</p>
				<ul>
					<li><i class="fa fa-check-circle"></i> Vivamus suscipit tortor</li>
					<li><i class="fa fa-check-circle"></i> Vivamus suscipit tortor</li>
					<li><i class="fa fa-check-circle"></i> Vivamus suscipit tortor</li>
				</ul>
			</article>
		</div>
	</section>
	<!--	<div class="level-4" data-0="display:none;" data-2500="display:block;" data-2501="background:rgba(0, 0, 0, 0);color[swing]:rgb(0,0,0);" data-4000="background:rgba(155,50,30,1);color:rgb(255,255,255);" data-7500="top:0%;" data-8500="top:0%;">		<div id="easing " data-3900="left:100% " data-4600="left:25%; ">			<?php print render($page[ 'level-4']); ?>		</div>		<div class="drop " data-4500="left:15%;bottom:100%; " data-6500="bottom:0%; ">			<?php print render($page[ 'level-5']); ?>		</div>		<div class="drop " data-4500="left:25%;bottom[quadratic]:100%; " data-6500="bottom:0%; ">			<?php print render($page[ 'level-5']); ?>		</div>		<div class="drop " data-4500="left:35%;bottom[cubic]:100%; " data-6500="bottom:0%; ">			<?php print render($page[ 'level-5']); ?>		</div>		<div class="drop " data-4500="left:45%;bottom[swing]:100%; " data-6500="bottom:0%; ">			<?php print render($page[ 'level-5']); ?>		</div>		<div class="drop " data-4500="left:55%;bottom[WTF]:100%; " data-6500="bottom:0%; ">			<?php print render($page[ 'level-5']); ?>		</div>		<div class="drop " data-4500="left:65%;bottom[inverted]:100%; " data-6500="bottom:0%; ">			<?php print render($page[ 'level-5']); ?>		</div>		<div class="drop " data-4500="left:75%;bottom[bounce]:100%; " data-6500="bottom:0%; ">			<?php print render($page[ 'level-5']); ?>		</div>	</div>	<div class="level-5 " data-6500="top[cubic]:100%; background:rgb(0,50,100); " data-7000="top[cubic]:0% " data-8500="background:rgb(190,230,255);">		<?php print render($page[ 'level-5']); ?>	</div>-->
	<div class="level-6 " data-0="top:0% " data-end="top:100%; margin-top: -60px">
		<?php print render($page[ 'level-5']); ?>
	</div>
	<!--[if lt IE 9]>	<script type="text/javascript " src="../skrollr-ie/dist/skrollr.ie.min.js "></script>	<![endif]-->
	<script type="text/javascript ">
		var s = skrollr.init({
			edgeStrategy: 'set',
			easing: {
				WTF: Math.random,
				inverted: function (p) {
					return 1 - p;
				}
			}
		});
	</script>
</main>
<footer>
	<?php print render($page[ 'footer']); ?>
</footer>