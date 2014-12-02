<div class="sidebar fr">
	<h3 class="sidebar_h"><span>最新文章</span></h3>
	<ul class="clearfix">
		<?php query_posts('showposts=10&orderby=date'); ?>
		<?php $num = 0; ?>
		<?php while (have_posts()) : the_post(); ?>
			<li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php $the_title = get_the_title(); echo huazi_mb_substr($the_title, 16); ?></a> <span class="fr">/<?php echo ++$num; ?></span></li>
		<?php endwhile; ?>
	</ul>
	<h3 class="sidebar_h"><span>最热文章</span></h3>
	<ul class="clearfix">
	<?php
		$post_num = 10; // 设置调用条数
		$args = array(
			'post_password' => '',
			'post_status' => 'publish', // 只选公开的文章.
			'post__not_in' => array($post->ID),//排除当前文章
			'caller_get_posts' => 1, // 排除置頂文章.
			'orderby' => 'comment_count', // 依評論數排序.
			'posts_per_page' => $post_num
		);
		$query_posts = new WP_Query();
		$query_posts->query($args);
		$num = 0;
		while ( $query_posts->have_posts() ) { $query_posts->the_post(); ?>
			<li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php $the_title = get_the_title(); echo huazi_mb_substr($the_title, 16); ?></a> <span class="fr">/<?php echo ++$num; ?></span></li>
		<?php } wp_reset_query();?>
	</ul>
	<h3 class="sidebar_h"><span>新浪微博</span></h3>
	<div class="weibo-show">
		<iframe width="100%" height="550" class="share_self"  frameborder="0" scrolling="no" src="http://widget.weibo.com/weiboshow/index.php?language=&width=0&height=550&fansRow=1&ptype=1&speed=0&skin=5&isTitle=1&noborder=1&isWeibo=1&isFans=1&uid=2376003112&verifier=796ea597&dpc=1"></iframe>
	</div>
</div>