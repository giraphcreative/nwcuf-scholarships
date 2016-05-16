<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8]><html class="ie ie8" <?php language_attributes(); ?>><![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!--><html <?php language_attributes(); ?>><!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width,initial-scale=1" />

<title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>
<link href="<?php bloginfo( "template_url" ) ?>/css/main.css?v=1" rel="stylesheet" type="text/css">
<link href="<?php bloginfo( "template_url" ) ?>/css/print.css" rel="stylesheet" type="text/css" media="print">

</head>
<body <?php body_class(); ?>>

<header>

	<div class="wrap">
		<div class="logo">
			<a href="/" title="NWCUF" rel="home">
				<img src="http://nwcuf.giraph.io/wp-content/themes/nwcuf/img/logo.png" alt="NWCUF">
			</a>
		</div>
		
		<div class="nwcua-logo">
			<a href="http://www.nwcua.org/"><img src="http://nwcuf.giraph.io/wp-content/themes/nwcuf/img/logo-nwcua.png"></a>
		</div>

		<div class="search">
			<form role="search" method="get" id="searchform" class="searchform" action="/" _lpchecked="1">
				<input type="hidden" name="post_type" value="area" />
				<input type="text" value="" name="s" id="s" placeholder="Search">
				<input type="submit" id="searchsubmit" value="Search">
			</form>		
		</div>
	</div>

	<nav role="navigation">
		<button class="menu-toggle"><i class="fa fa-bars"></i></button>
		<div class="menu-main-container">
			<ul id="menu-main" class="nav-menu"><li id="menu-item-66" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-66"><a href="http://nwcuf.giraph.io/scholarships-and-grants/">Scholarships and Grants</a></li>
			<li id="menu-item-357" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-357"><a href="http://nwcuf.giraph.io/disaster-recovery/">Disaster Relief</a></li>
			<li id="menu-item-67" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-67"><a href="http://nwcuf.giraph.io/programs/">Programs</a>
				<ul class="sub-menu">
					<li id="menu-item-107" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-107"><a href="http://nwcuf.giraph.io/mesa/">MESA</a></li>
					<li id="menu-item-110" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-110"><a href="http://nwcuf.giraph.io/financial-reality-fairs/">Financial Reality Fairs</a></li>
					<li id="menu-item-114" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-114"><a href="http://nwcuf.giraph.io/microlending/">Microlending</a></li>
					<li id="menu-item-367" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-367"><a href="http://www.nwcua.org/cu4k">Credit Union for Kids</a></li>
				</ul>
			</li>
			<li id="menu-item-68" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-68"><a href="http://nwcuf.giraph.io/give-to-nwcuf/">Give to NWCUF</a>
				<ul class="sub-menu">
					<li id="menu-item-71" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-71"><a href="http://nwcuf.giraph.io/friends-of-the-foundation/">Friends of the Foundation</a></li>
				</ul>
			</li>
			<li id="menu-item-70" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-70"><a href="http://nwcuf.giraph.io/partnerships-and-resources/">Partnerships and Resources</a></li>
			<li id="menu-item-271" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-271"><a href="http://nwcuf.giraph.io/about-2/">About</a>
				<ul class="sub-menu">
					<li id="menu-item-277" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-277"><a href="http://nwcuf.giraph.io/our-mission/">Our Mission</a></li>
					<li id="menu-item-93" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-93"><a href="http://nwcuf.giraph.io/staff/">Staff</a></li>
					<li id="menu-item-94" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-94"><a href="http://nwcuf.giraph.io/board/">Board</a></li>
				</ul>
			</li>
			</ul>
		</div>	
	</nav>
	
</header>

<section class="content">
