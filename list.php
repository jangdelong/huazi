<?php
    $limit = get_option('posts_per_page');
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    if (is_page('5')) {
        //行业资讯的文章
        query_posts('&showposts=' . $limit = 9 . '&paged=' . $paged . '&cat=1, 3, 18, 19, 20');
    } elseif (is_page('8')) {
        //花子现场的文章
        query_posts('&showposts=' . $limit = 9 . '&paged=' . $paged . '&cat=2, 4, 5');
    } elseif (is_page('10')) {
        //美业百强的文章
        query_posts('&showposts=' . $limit = 9 . '&paged=' . $paged . '&cat=6');
    } elseif (is_page('13')) {
        //意见领袖的文章
        query_posts('&showposts=' . $limit = 9 . '&paged=' . $paged . '&cat=7, 8, 9, 10');
    } elseif (is_page('15')) {
        //花子社区的文章
        query_posts('&showposts=' . $limit = 9 . '&paged=' . $paged . '&cat=11, 12, 13');
    } elseif (is_page('17')) {
    }
    $wp_query->is_archive = true;
    $wp_query->is_home = false;
?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="post-item">
        <div class="item-bg">
            <div class="pos-date fl" title="<?php the_time('Y'); ?>">
                <h5 class="day"><?php the_time('d'); ?></h5>
                <h5 class="month"><?php the_time('m'); ?>月</h5>
            </div>
            <h2 class="pos-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        </div>
        <!-- 文章内容 -->
        <div class="floatbox">
            <a href="<?php the_permalink(); ?>" class="img-thumbnail">
                <img src="<?php echo catch_first_image(); ?>" alt="<?php the_title(); ?>" >
            </a>
            <?php the_excerpt(); ?>
        </div>
        <!-- 文章内容 end -->
        <div class="pull-right">
            <h4 class="element-itemlink">
                <a href="<?php the_permalink(); ?>">阅读更多»</a> 
                |
                <?php comments_popup_link('抢沙发»', '1条评论»', '%条评论»'); ?>
            </h4>
            <h4 class="element-relateditems">
                <span>文章作者: <?php the_author(); ?></span>
                <span>|</span>
                <span>文章分类: <?php the_category(', '); ?></span>
            </h4>
        </div>
    </div>
<?php endwhile; endif; ?>
<div class="page_navi"><?php par_pagenavi(9); ?></div>  