<?php ?>
<!--
<header data-2000="bottom[swing]: 0" data-end="bottom[swing]:0">
	<div class="wrapper">
		<a href="index.php" class="logo">
			<div><i class="fa fa-plus fa-3x"></i>
			</div>
			<div>DV</div>
			<div>Front-end Developer</div>
		</a>
</header>
-->
<aside>
	<?php print $messages; ?>
</aside>
<main>

	<div class="level-1" data-start="top:0px" data-end="top: 0%;  ">




		<div class="logo" data-0="bottom: 50%; left: 50%" data-1000="left: 20%" data-1100="bottom: 45%;" data-1500="bottom: 45%;">
			<i class="fa fa-plus fa-3x"></i>
			<p>
			<span>DI</span><span data-0="display: none" data-1100="display: inline-block;">ego</span>
			<span>V</span><span data-0="display: none" data-1100="display: inline-block;">elásquez</span>
			</p>
			<div data-0="opacity: 1" data-100="opacity: 0">Scroll Down</div>

		</div>

		<div id="content" class="column">
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
	
	<div class="level-2" data-0="top[swing]: 100%" data-5000="top[swing]:0%" data-6000="top[swing]: 0%" data-6500="top[swing]: -100%">
		<div class=" wrapper ">

		</div>
	</div>

	<div class="level-3 " data-2000="left: -100% " data-3000="left: 0% " data-4000="left: 100%">

	</div>


	
	<div class="level-4" data-0="display:none;" data-2500="display:block;" data-2501="background:rgba(0, 0, 0, 0);color[swing]:rgb(0,0,0);" data-4000="background:rgba(155,50,30,1);color:rgb(255,255,255);" data-7500="top:0%;" data-8500="top:0%;">
		
		<div id="easing " data-3900="left:100% " data-4600="left:25%; ">
			<?php print render($page[ 'level-4']); ?>
		</div>

		<div class="drop " data-4500="left:15%;bottom:100%; " data-6500="bottom:0%; ">
			<?php print render($page[ 'level-5']); ?>
		</div>
		<div class="drop " data-4500="left:25%;bottom[quadratic]:100%; " data-6500="bottom:0%; ">
			<?php print render($page[ 'level-5']); ?>
		</div>
		<div class="drop " data-4500="left:35%;bottom[cubic]:100%; " data-6500="bottom:0%; ">
			<?php print render($page[ 'level-5']); ?>
		</div>
		<div class="drop " data-4500="left:45%;bottom[swing]:100%; " data-6500="bottom:0%; ">
			<?php print render($page[ 'level-5']); ?>
		</div>
		<div class="drop " data-4500="left:55%;bottom[WTF]:100%; " data-6500="bottom:0%; ">
			<?php print render($page[ 'level-5']); ?>
		</div>
		<div class="drop " data-4500="left:65%;bottom[inverted]:100%; " data-6500="bottom:0%; ">
			<?php print render($page[ 'level-5']); ?>
		</div>
		<div class="drop " data-4500="left:75%;bottom[bounce]:100%; " data-6500="bottom:0%; ">
			<?php print render($page[ 'level-5']); ?>
		</div>
	</div>
	<div class="level-5 " data-6500="top[cubic]:100%; background:rgb(0,50,100); " data-7000="top[cubic]:0% " data-8500="background:rgb(190,230,255);">
		<?php print render($page[ 'level-5']); ?>
	</div>
	<div class="level-6 " data-0="top:0% " data-end="top:100%; margin-top: -60px">
		<?php print render($page[ 'level-5']); ?>
	</div>



	<!--[if lt IE 9]>
	<script type="text/javascript " src="../skrollr-ie/dist/skrollr.ie.min.js "></script>
	<![endif]-->
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
