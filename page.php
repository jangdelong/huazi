
<?php 

/**
 * 文章列表页
 *
 * @package WordPress
 * @subpackage Huazi
 * @since Huazi 0.1
 */
get_header(); ?>

<?php if (is_home() || is_page('19')) { 
    //首页
    include('page-templates/pageIndex.php');
} else { ?>
    <div class="content clearfix mtb10">
        <div class="content-main fl"> 
            <!-- 面包屑导航 -->
            <div class="article-navigation">
                <a href="/">首页 </a>
                /            
                <?php 
                    if (is_page('5')) {
                        echo '行业资讯';
                    } elseif (is_page('8')) {
                        echo '花子直播';
                    } elseif (is_page('10')) {
                        echo '美业百强';
                    } elseif (is_page('13')) {
                        echo '意见领袖';
                    } elseif (is_page('15')) {
                        echo '花子社区';
                    } elseif (is_page('17')) {
                        echo '联系我们';
                    }
                ?>
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
<?php } ?>
<?php get_footer(); ?>