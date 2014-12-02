<?php get_header(); ?>
<div class="content">
	<div class="content-one">
		<!-- 花子现场/图片轮番 -->
		<div class="content-onel fl">
   	    	<h3 class="content_h3"><a href="/?cat=2" class="content_hr">花子现场</a></h3>

   	  	    <div class="content-live">
				<div class="box">
					<ul class="list">

						<?php query_posts('showposts=5&cat=2'); ?>
						<?php while (have_posts()) : the_post(); ?>
							<li><a href="<?php the_permalink(); ?>"><img src="<?php echo catch_first_image(); ?>" ></a></li>
						<?php endwhile; ?>
					
					</ul>
					<ul class="title">
						<?php query_posts('showposts=5&cat=2'); ?>
						<?php $num = 0; ?>
						<?php while (have_posts()) : the_post(); ?>
							<li class="<?php if (++$num == 1) { echo 'current'; } ?>"><?php the_title(); ?></li>
						<?php endwhile; ?>
					</ul>
					<ul class="num">
						<?php query_posts('showposts=5&cat=2'); ?>
						<?php $num = 0; ?>
						<?php while (have_posts()) : the_post(); ?>
							<li class="<?php if (++$num == 1) { echo 'active'; } ?>"><?php echo $num; ?></li>
						<?php endwhile; ?>
					</ul>
				</div>
   	    	</div>
		</div>
		<!-- 花子现场 end -->

		<!-- 重磅头条 -->
		<div class="content-oner fr">
			<h3 class="content_h3"><a href="/?cat=1" class="content_hr">重磅头条</a></h3>
			
			<div class="content-oner-inner" id="headlines">
				<div class="viewport">
					<ul class="overview">

						<?php query_posts('showposts=5&cat=1'); ?>

						<?php while (have_posts()) : the_post(); ?>
							<li class="content-headlines">
								<a href="<?php the_permalink(); ?>">
									<img src="<?php echo catch_first_image(); ?>" alt="重磅头条" >
								</a>
								<div class="headlines-right fr">
									<p><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></p>
									<span class="headlines-wen fl"><a class="more" href="<?php the_permalink(); ?>">+阅读全文</a></span>
								</div>
							</li>
						<?php endwhile; ?>
					</ul>
				</div>

				<!-- 滚动条 -->
				<div class="scrollbar">
					<div class="track">
						<div class="thumb"></div>
					</div>
				</div>
				<!-- 滚动条 end -->

			</div>
		</div>
	</div>

	<div class="content-two">
		<!-- 花子播报 / 图片轮番 -->
		<div class="content-twol fl">
			<h3 class="content_h3"><a href="/?cat=3" class="content_hr">花子播报</a></h3>

			<div class="content-broadcast">
				<div class="slider">
					<ul>
						<?php query_posts('showposts=4&cat=3'); //花子播报文章 ?>
						<?php while (have_posts()) : the_post(); ?>
							<li>
								<a href="<?php the_permalink(); ?>">
									<img src="<?php echo catch_first_image(); ?>" alt="花子播报" >
								</a>
							</li>
						<?php endwhile; ?>
			
					</ul>
				</div>
			</div>
		</div>
		<!-- 花子播报 / 图片轮番 end -->

		<!-- 花子独家 -->
		<div class="content-twoc fl">
			<h3 class="content_h3"><a href="/?cat=4" class="content_hr">花子独家</a></h3>
			<div class="content-exclusiv">
				<div id="huazidujia" class="mF_liuzg">
					<div class="loading"><span>请稍候...</span></div>
					<ul class="pic">
						<?php query_posts('showposts=5&cat=4'); //花子独家文章 最多5篇 ?>
						<?php while (have_posts()) : the_post(); ?>
							<li>
								<a href="<?php the_permalink(); ?>">
									<img src="<?php echo catch_first_image(); ?>" >
								</a>
								<span class="txt-bg">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</span>
							</li>
						<?php endwhile; ?>

					</ul>
				</div>
			</div>
		</div>
		<!-- 花子独家 end -->

		<div class="content-twor fl">
		 	<h3 class="content_h3"><a href="/?cat=5" class="content_hr">花子影视</a></h3>
		 	<div class="content-television">
		 		<img src="<?php bloginfo('template_directory'); ?>/images/television.png" border="0" alt="花子影视" >	
		 	</div>
		</div>
	</div>

	<div class="content-three">
		<!-- 特别关注 / 图片轮番 -->
		<div class="content-threel fl">
			<h3 class="content_h3"><a href="/?cat=20" class="content_hr">特别关注</a></h3>
			<div class="content-attention">
		    
		   		<div id="slideBox">
					<ul id="show_pic" style="left:0px">

						<?php query_posts('showposts=5&cat=18'); ?>
						<?php while (have_posts()) : the_post(); ?>
							<li>
								<a href="<?php the_permalink(); ?>">
									<img src="<?php echo catch_first_image(); ?>" alt="特别关注" >
								</a>
							</li>
						<?php endwhile; ?>
					</ul>
					<div id="slideText"></div>
					<ul id="iconBall">
						<?php query_posts('showposts=5&cat=18'); ?>
						<?php $num = 0; ?>
						<?php while (have_posts()) : the_post(); ?>
						<li class="<?php if (++$num == 1) echo 'active'; ?>"><?php echo $num; ?></li>
						<?php endwhile; ?>
					</ul>
					<ul id="textBall">
						<?php query_posts('showposts=5&cat=18'); ?>
						<?php while (have_posts()) : the_post(); ?>
							<li>
								<a href="<?php the_permalink(); ?>">
									<?php the_title(); ?>
								</a>
							</li>
						<?php endwhile; ?>
					</ul>

				</div><!--slideBox end-->
		    </div>
		</div>
		<!-- 特别关注 end -->

		<div class="content-threer fr">
			<div class="threer-upper">
				<h3 class="content_h3"><a href="/?cat=19" class="content_hr">热点排行</a></h3>
				<ul>
				<?php 
					query_posts('showposts=6&cat=19'); 
					$num = 0;
					while (have_posts()) : the_post(); 
				?>
					<li><span class="rank">/<?php echo ++$num; ?></span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php endwhile; ?>

				</ul>
				<h5 class="fr"><a href="/?cat=19" class="more">更多»</a></h5>
			</div>
			<div class="threer-lower">
				<h3 class="content_h3"><a href="/?cat=18" class="content_hr">政策法规</a></h3>
				<ul>
					<?php query_posts('showposts=4&cat=18'); ?>
					<?php while (have_posts()) : the_post(); ?>
						<li class="bg"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
					<?php endwhile; ?>
				</ul>
				<h5 class="fr"><a href="/?cat=18" class="more">更多»</a></h5>
			</div>
			
		</div>
	</div>
</div>
<div class="dividing-line"></div>
<div class="content">
	<div class="content-four">
		<a href="#">
			<img src="<?php bloginfo('template_directory'); ?>/images/leilin.png" alt="" style="margin-left:0px;">
		</a>
		<a href="#">
			<img src="<?php bloginfo('template_directory'); ?>/images/minfeng.png" alt="" >
		</a>
		<a href="#">
			<img src="<?php bloginfo('template_directory'); ?>/images/huazi.png" alt="" >
		</a>
		<a href="#">
			<img src="<?php bloginfo('template_directory'); ?>/images/huazi.png" alt="" >
		</a>
	</div>
	<div class="content-five">
		<h3 class="content_h3"><a href="/?cat=6" class="content_hr">美业百强</a></h3>
		<div class="content-five-main">
			<?php query_posts('showposts=100&cat=6'); ?>
			<?php while (have_posts()) : the_post();?>
				<a href="<?php the_permalink(); ?>" class="hundred">
					<img src="<?php echo catch_first_image(); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" >
				</a>				
			<?php endwhile; ?>

			<a href="#" class="hundred">
				<img src="<?php bloginfo('template_directory'); ?>/images/fangzi.png" alt="" >
			</a>
			<a href="#" class="hundred">
				<img src="<?php bloginfo('template_directory'); ?>/images/baolilai.png" alt="" >
			</a>
			<a href="#" class="hundred">
				<img src="<?php bloginfo('template_directory'); ?>/images/lihe.png" alt="" >
			</a>
			<a href="#" class="hundred">
				<img src="<?php bloginfo('template_directory'); ?>/images/wanmei.png" alt="" >
			</a>
			<a href="#" class="hundred">
				<img src="<?php bloginfo('template_directory'); ?>/images/yishi.jpg" alt="" >
			</a>
			<a href="#" class="hundred">
				<img src="<?php bloginfo('template_directory'); ?>/images/weisha.png" alt="" >
			</a>
			<a href="#" class="hundred">
				<img src="<?php bloginfo('template_directory'); ?>/images/fangzi.png" alt="" >
			</a>
			<a href="#" class="hundred">
				<img src="<?php bloginfo('template_directory'); ?>/images/baolilai.png" alt="" >
			</a>
			<a href="#" class="hundred">
			<img src="<?php bloginfo('template_directory'); ?>/images/lihe.png" alt="" >
			</a>
			<a href="#" class="hundred">
				<img src="<?php bloginfo('template_directory'); ?>/images/wanmei.png" alt="" >
			</a>
			<a href="#" class="hundred">
				<img src="<?php bloginfo('template_directory'); ?>/images/weisha.png" alt="" >
			</a>
			<a href="#" class="hundred">
				<img src="<?php bloginfo('template_directory'); ?>/images/fangzi.png" alt="" >
			</a>
			<a href="#" class="hundred">
				<img src="<?php bloginfo('template_directory'); ?>/images/baolilai.png" alt="" >
			</a>
			<a href="#" class="hundred">
				<img src="<?php bloginfo('template_directory'); ?>/images/lihe.png" alt="" >
			</a>
			<a href="#" class="hundred">
				<img src="<?php bloginfo('template_directory'); ?>/images/wanmei.png" alt="" >
			</a>
			<a href="#" class="hundred">
				<img src="<?php bloginfo('template_directory'); ?>/images/yishi.jpg" alt="" >
			</a>
			<a href="#" class="hundred">
				<img src="<?php bloginfo('template_directory'); ?>/images/weisha.png" alt="" >
			</a>
			<a href="#" class="hundred">
				<img src="<?php bloginfo('template_directory'); ?>/images/fangzi.png" alt="" >
			</a>
			<a href="#" class="hundred">
				<img src="<?php bloginfo('template_directory'); ?>/images/baolilai.png" alt="" >
			</a>
		</div>
	</div>
</div>

<div class="dividing-line"></div>
<div class="content">
	<div class="content-six">
		<div class="content-sixl fl">
			<h3 class="content_h3 h_bb"><a href="/?cat=7" class="content_hr">意见领袖</a></h3>

			<div class="content-leaders" id="leaders">
				<div class="viewport">
					<ul class="overview">

						<?php query_posts('showposts=5&cat=7'); //意见领袖文章 ?>
						<?php while (have_posts()) : the_post(); ?>
							<li class="leaders-opinion clearfix">
								<a href="<?php the_permalink(); ?>">
									<img src="<?php echo catch_first_image(); ?>" alt="意见领袖" >
								</a>
								<ul class="opinion-c fr">

									<li class="opinion-identity">
									<?php
									//获取文章的标签
									$tags = wp_get_post_tags(get_the_ID());
									$html = '';
									foreach ($tags as $tag) {
										$html .= $tag->name . ' ';
									}
									echo $html;
									?>
									</li>
									<li class="opinion-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
								</ul>
							</li>
						<?php endwhile; ?>

					</ul>
				</div>
				<div class="scrollbar">
					<div class="track">
						<div class="thumb"></div>
					</div>
				</div>
			</div>

		</div>
		<div class="content-sixc fl">
		   	<h3 class="content_h3 h_bb"><a href="/?cat=8" class="content_hr">企业专栏</a></h3>
		   	<div class="clearfix">
		   		<?php query_posts('showposts=3&cat=8'); ?>
		   		<?php while (have_posts()) : the_post(); ?>
			   	<div class="content-author">
			   	    <img src="<?php echo catch_first_image(); ?>" alt="企业专栏" >
			   	    <ul class="author-c fr">
		 	   	    	<li><a href="<?php the_permalink(); ?>">当当模式PK自建模式的商业 逻辑丁家宜之殇</a></li>
		 	   	        <li><a href="<?php the_permalink(); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/liaojie.png" alt="" class="fr" style="width:60px;height:17px;margin-bottom:10px;"></a></li>
			   	    </ul>
			   	</div>
		   		<?php endwhile; ?>
			</div>
			<h5 class="fr"><a href="/?cat=8" class="more">更多»</a></h5>
		</div>

		<div class="content-sixr fr">
		   	<div class="sixr-upper">
		   	    <h3 class="content_h3"><a href="/?cat=9" class="content_hr">作者专栏</a></h3>
		   	    <div class="clearfix">
		   	    	<?php query_posts('showposts=2&cat=9'); ?>
		   	    	<?php while (have_posts()) : the_post(); ?>
		   	    		<div class="sixr-upperc">
				   	     	<img src="<?php echo catch_first_image(); ?>" alt="作者专栏" >
				   	     	<ul class="sixr-zuozhe fr">
			 	   	        	<li><a href="<?php the_permalink(); ?>">【数聚·独家】<?php $the_title = get_the_title(); echo huazi_mb_substr($the_title, 28); ?></a></li>
			 	   	        </ul>
		 	   	        </div>
			  
		   	    	<?php endwhile; ?>
		   	    </div>
	            <h5 class="fr"><a href="/?cat=9" class="more">阅读更多</a></h5>
		   	</div>
		   	<div class="sixr-lower">
	   	     	 <h3 class="content_h3"><a href="/?cat=10" class="content_hr">天天向上</a></h3>
	   	     	 <div class="sixr-lowerc">
	   	     	 	<dl class="lowerc-l">
	   	     	 	    <dd class="lowerc-d fl">今日晚九点</dd>                               
	   	     	 		<dt class="lowerc-t fr"><span style="color:#f23a8c;">2344</span>条</dt>
	   	     	 	</dl>
	   	     	 	<dl class="lowerc-l">
	   	     	 	    <dd class="lowerc-d fl">昨日晚九点</dd>                               
	   	     	 		<dt class="lowerc-t fr"><span style="color:#f23a8c;">22418</span>条</dt>
	   	     	 	</dl>
	   	     	 	<dl class="lowerc-l">
	   	     	 	    <dd class="lowerc-d fl">一周晚九点</dd>                               
	   	     	 		<dt class="lowerc-t fr"><span style="color:#f23a8c;">184754</span>条</dt>
	   	     	 	</dl>
	   	     	 	<dl class="lowerc-l">
	   	     	 	    <dd class="lowerc-d fl">全部晚九点</dd>                               
	   	     	 		<dt class="lowerc-t fr"><span style="color:#000000;">随便看看</span></dt>
	   	     	 	</dl>
	   	     	 </div>
		   	</div>
		</div>
	</div>

	 <div class="content-seven">
		<div class="content-sevenl fl">
			<h3 class="content_h3"><a href="/?cat=11" class="content_hr">花子社区</a></h3>
			<ul id="community">
				<?php query_posts('showposts=5&cat=11'); //花子社区 ?>
				<?php while (have_posts()) : the_post(); ?>
					<li><a href="<?php the_permalink(); ?>"><?php $the_title = get_the_title(); echo huazi_mb_substr($the_title, 24); ?></a></li>
				<?php endwhile; ?>
			</ul>
			<h5 class="fr"><a href="/?cat=11" class="more">更多»</a></h5>
		</div>
		<div class="content-sevenc fl">
			<h3 class="content_h3 h_bb"><a href="/?cat=12" class="content_hr">美容护肤</a></h3>
			<ul>
				<?php query_posts('showposts=5&cat=12'); //美容护肤 ?>
				<?php while (have_posts()) : the_post(); ?>
					<li><a href="<?php the_permalink(); ?>"><?php $the_title = get_the_title(); echo huazi_mb_substr($the_title, 20); ?></a></li>
				<?php endwhile; ?>
			</ul>
			<h5 class="fr"><a href="/?cat=12" class="more">更多»</a></h5>
		</div>
	 	<div class="content-sevenr fl">
	 	 	<h3 class="content_h3 h_bb"><a href="/?cat=13" class="content_hr">论坛热帖</a></h3>
 	 		<ul>
 	 			<?php query_posts('showposts=5&cat=13'); //论坛热帖 ?>
 	 			<?php while (have_posts()) : the_post(); ?>
 	 				<li>
 	 					<a href="<?php the_permalink(); ?>"><?php $the_title = get_the_title(); echo huazi_mb_substr($the_title, 18); ?> <img src="<?php bloginfo('template_directory'); ?>/images/bofang.jpg"></a>
 	 				</li>
 	 			<?php endwhile; ?>
 	 		</ul>
	 	 	<h5 class="fr"><a href="/?cat=13" class="more">更多»</a></h5>
	 	 	
	 	</div>
	 </div>

    <div class="content-eight">
	 	<h3 class="content_h3"><a href="#" class="content_hr">美图秀秀</a></h3>
	 	<ul class="clearfix">
	 		<li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/meitu.png" border="0" alt="" ></a></li>
	 		<li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/meitu.png" border="0" alt="" ></a></li>
	 		<li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/meitu.png" border="0" alt="" ></a></li>
	 		<li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/meitu.png" border="0" alt="" ></a></li>
	 	</ul>

	</div>
  
    <div class="content-nine">
       <div class="nine-upper">
    		<div class="nine-upperr">
    			<div class="nine-upperl">友情链接</div>
    		</div>
    	</div>
    	<ul class="nine-lower">
    		<?php wp_list_bookmarks('title_li=&categorize=0&show_images='); ?>
    	</ul>
    </div>

</div>

<script src="<?php bloginfo('template_directory'); ?>/js/myjs.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/yourjs.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/banner.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/glide.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.tinyscrollbar.js"></script>
<?php get_footer(); ?>