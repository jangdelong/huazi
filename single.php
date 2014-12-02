<?php
/**
 * 日志单页
 *
 * @package WordPress
 * @subpackage Huazi
 * @since Huazi 0.1
 */

get_header(); ?>

<!-- 主体部分 -->
<div class="content clearfix mtb10">
	<div class="content-main fl">
		<div class="article-navigation">
			<a href="/">首页</a>
			/ 
		 	<?php the_title(); ?>
		</div>
		<div class="article">
			<div class="hidden-xs">
				<div class="title-article">
					<h2><?php the_title(); ?></h2>
				</div>
			</div>
			 <?php if (have_posts()) : the_post(); ?>
			<div class="tag-article">    
				<span class="label"><?php the_time('m'); ?>.<?php the_time('d'); ?></span>
				<a href="#" class="label"><?php the_author(); ?></a>
				<a href="#" class="label"><?php post_views('点击 ', ' 次'); ?></a>
			</div>
			  <?php endif; ?>
			<div class="centent-article">
				<?php the_content('Reading more...'); ?>
			</div>
			<div class="share-box">
				<div class="bdsharebuttonbox">
					<a href="#" class="bds_more" data-cmd="more">分享到：</a>
					<a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间">QQ空间</a>
					<a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博">新浪微博</a>
					<a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博">腾讯微博</a>
					<a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网">人人网</a>
					<a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信">微信</a>
				</div>
				<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"share":{"bdSize":16}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
			</div>
			<?php comments_template(); ?>
		</div>
	</div>
 	<?php get_sidebar() ?>
</div>
<!-- 主体部分 end -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>