<?php 
	get_header();
?>
<div class="content clearfix mtb10">
    <div class="content-main fl"> 
        <!-- 面包屑导航 -->
        <div class="article-navigation">
            <a href="/">首页 </a>
            /            
            <?php the_category(', ') ?>
        </div>
        <!-- 面包屑导航 END -->  

        <!-- 文章列表 -->
        <div class="post-list" id="post_content">
            <?php include_once TEMPLATEPATH.'/list.php'; ?>
        </div>
        <!-- 文章列表 end -->
        
    </div>
    <?php get_sidebar(); ?>  
</div>
<?php get_footer(); ?>