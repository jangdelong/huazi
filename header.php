<!doctype html>
<html>
<head>
<meta charset="utf-8" >
<title>
	<?php wp_title(' | ',true,'right'); ?> 
	<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?> 
</title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"  >
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.js"></script>
<!--[if lt IE 9]>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/html5shiv.js"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body>
<header class="header">
	<div class="top">
		<div class="top-center">
			<div class="top-centerl fl">
				<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/top1.png" alt="logo" ></a>
			</div>
			<div class="top-centerr fr">
			 <div class="centerr-login fr"><?php wp_loginout(); ?> | <?php wp_register('', ''); ?></div>
				 <img src="<?php bloginfo('template_directory'); ?>/images/top2.png" border="0" alt="" >
			</div>
		</div>
	</div>
	<div class="title">
		<?php 
			// wp_nav_menu(array(
			// 	'theme_location' => 'primary',
			// 	'menu_class' => 'title-content', 
			// 	'echo' => true,
			// 	'before' => '',
			// 	'after' => '',
			// 	'depth' => 0,
			// 	'walker' => ''
			// )); 
		?>

		<div class="title-content">
	 		<ul>
				<li class="<?php echo is_home() ? 'current' : ''; ?>"><a href="<?php bloginfo('url'); ?>">首页</a></li>
				<li class="<?php echo is_page(5) ? 'current' : ''; ?>"><a href="<?php bloginfo('url'); ?>/?page_id=5">行业资讯</a></li>
				<li class="<?php echo is_page(8) ? 'current' : ''; ?>"><a href="<?php bloginfo('url'); ?>/?page_id=8">花子现场</a></li>
				<li class="<?php echo is_page(10) ? 'current' : ''; ?>"><a href="<?php bloginfo('url'); ?>/?page_id=10">美业百强</a></li>
				<li class="<?php echo is_page(13) ? 'current' : ''; ?>"><a href="<?php bloginfo('url'); ?>/?page_id=13">意见领袖</a></li>
				<li class="<?php echo is_page(15) ? 'current' : ''; ?>"><a href="<?php bloginfo('url'); ?>/?page_id=15">花子社区</a></li>
				<li class="<?php echo is_page(17) ? 'current' : ''; ?>"><a href="<?php bloginfo('url'); ?>/?page_id=17">联系我们</a></li>
			</ul> 
		</div>
	</div>
</header>