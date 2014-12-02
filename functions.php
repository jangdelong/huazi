<?php
/**
 * 功能函数
 *
 * @package WordPress
 * @subpackage Huazi
 * @since Huazi 0.1
 */

//禁用Open Sans
class Disable_Google_Fonts {
	public function __construct() {
		add_filter( 'gettext_with_context', array( $this, 'disable_open_sans' ), 888, 4 );
	}
	public function disable_open_sans( $translations, $text, $context, $domain ) {
		if ( 'Open Sans font: on or off' == $context && 'on' == $text ) {
			$translations = 'off';
		}
		return $translations;
	}
}
$disable_google_fonts = new Disable_Google_Fonts;


//文章中第一张图片获取图片
function catch_first_image() {
	global $post, $posts;
	$first_img = '';
	ob_start();
	ob_end_clean();
	$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);//用正则过滤文章
	$first_img = $matches [1] [0];
	if (empty($first_img)) {
		$first_img = bloginfo('template_directory') . '/images/default.png';  //第一张图片为空，也可以为一个默认地址。
	}
	return $first_img;
}



//浏览统计
function record_visitors() {
	if (is_singular()) {
		global $post;
		$post_ID = $post->ID;
		if ($post_ID) {
			$post_views = (int)get_post_meta($post_ID, 'views', true);
			if (!update_post_meta($post_ID, 'views', ($post_views+1))) {
				add_post_meta($post_ID, 'views', 1, true);
			}
		}
	}
}
add_action('wp_head', 'record_visitors');
 
//函数名称：post_views
//函数作用：取得文章的阅读次数
function post_views( $before = '(点击 ', $after = ' 次)', $echo = 1 ) {
	global $post;
	$post_ID = $post->ID;
	$views = (int)get_post_meta($post_ID, 'views', true);
	if ($echo) echo $before, number_format($views), $after;
	else return $views;
}


//文章列表分页
function par_pagenavi( $range = 9 ) {  
    global $paged, $wp_query;  
    if ( !$max_page ) {
    	$max_page = $wp_query->max_num_pages;
    }  
    if ( $max_page > 1 ) {
    	if ( !$paged ) { 
    		$paged = 1;
    	}  
    	if ( $paged != 1 ) {
    		echo "<a href='" . get_pagenum_link(1) . "' class='extend' title='跳转到首页'> 返回首页 </a>";
    	}  
    	previous_posts_link(' 上一页 ');  
    	if ( $max_page > $range ) {  
        	if ( $paged < $range ) {
        		for ( $i = 1; $i <= ($range + 1); $i++ ) { 
        			echo "<a href='" . get_pagenum_link($i) ."'";  
        			if ( $i == $paged ) echo " class='current'";
        			echo ">$i</a>";
        		}
        	}  
    		elseif ( $paged >= ( $max_page - ceil( ( $range/2 ) ) ) ) {  
        		for ( $i = $max_page - $range; $i <= $max_page; $i++ ) {
        			echo "<a href='" . get_pagenum_link($i) . "'";  
        			if ( $i == $paged ) echo " class='current'";
        			echo ">$i</a>";
        		}
        	}  
    		elseif ( $paged >= $range && $paged < ($max_page - ceil( ( $range/2 ) ) ) ) {  
        		for ( $i = ($paged - ceil($range/2)); $i <= ($paged + ceil(($range/2))); $i++ ) {
        			echo "<a href='" . get_pagenum_link($i) . "'";
        			if ($i == $paged) echo " class='current'";
        			echo ">$i</a>";
        		}
        	}
        }  
    	else {
    		for ( $i = 1; $i <= $max_page; $i++ ) {
    			echo "<a href='" . get_pagenum_link($i) . "'";

    			if ( $i == $paged ) echo " class='current'";
    			echo ">$i</a>"; 
    		}
    	}  
    	next_posts_link(' 下一页 ');  
    	if ( $paged != $max_page ) {
    		echo "<a href='" . get_pagenum_link($max_page) . "' class='extend' title='跳转到最后一页'> 最后一页 </a>";
    	}
    }  
}  

?>

<?php 

//评论框

function twentytwelve_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case 'pingback' :
		case 'trackback' :
		// Display trackbacks differently than normal comments.
	?>
	<li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
		<p><?php _e( 'Pingback:', 'twentytwelve' ); ?> <?php comment_author_link(); ?> <?php edit_comment_link( __( '(编辑)', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); ?></p>
	<?php
			break;
		default :
		// Proceed with normal comments.
		global $post;
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<article id="comment-<?php comment_ID(); ?>" class="comment">
			<header class="comment-meta comment-author vcard">
				<?php
					echo get_avatar( $comment, 44 );
					printf( '<cite><b class="fn">%1$s</b> %2$s</cite>',
						get_comment_author_link(),
						// If current post author is also comment author, make it known visually.
						( $comment->user_id === $post->post_author ) ? '<span>' . __( '[本文作者]', 'twentytwelve' ) . '</span>' : ''
					);
					printf( '<a href="%1$s"><time datetime="%2$s">%3$s</time></a>',
						esc_url( get_comment_link( $comment->comment_ID ) ),
						get_comment_time( 'c' ),
						/* translators: 1: date, 2: time */
						sprintf( __( '%1$s at %2$s', 'twentytwelve' ), get_comment_date(), get_comment_time() )
					);
				?>
			</header><!-- .comment-meta -->

			<?php if ( '0' == $comment->comment_approved ) : ?>
				<p class="comment-awaiting-moderation"><?php _e( '你的评论正在等待审核...', 'twentytwelve' ); ?></p>
			<?php endif; ?>

			<section class="comment-content comment">
				<?php comment_text(); ?>
				<?php edit_comment_link( __( '编辑', 'twentytwelve' ), '<p class="edit-link">', '</p>' ); ?>
			</section><!-- .comment-content -->

			<div class="reply">
				<?php comment_reply_link( array_merge( $args, array( 'reply_text' => __( '回复', 'twentytwelve' ), 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
			</div><!-- .reply -->
		</article><!-- #comment-## -->
	<?php
		break;
	endswitch; // end comment_type check
}

//截取字符
function huazi_mb_substr($str, $maxlen = 25) {
	if (mb_strlen($str, 'utf-8') > $maxlen) {
		$str = mb_substr($str, 0, $maxlen, 'utf-8') . '...';
	}
	return $str;
}

