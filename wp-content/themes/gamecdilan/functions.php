<?php

/***************************************************
#Carregando Custom Post Types
***************************************************/

require_once(TEMPLATEPATH . '/cms/custom.php');


/***************************************************
#Carregando Shortcodes
***************************************************/

require_once(TEMPLATEPATH . '/cms/shortcodes.php');

/***************************************************
#Carregando Javascripts
***************************************************/

add_action('template_redirect', 'js_head_load');
function js_head_load(){

	//Load jQuery
	wp_enqueue_script('jquery');

	//Load Bootstrap Scripts
	wp_register_script('bootstrap', get_bloginfo('template_directory').'/js/bootstrap.js');
	wp_enqueue_script('bootstrap');

	//Load Modernizr
	wp_register_script('modernizr', get_bloginfo('template_directory').'/js/modernizr.min.js');
	wp_enqueue_script('modernizr');

}

/***************************************************
# Configurações
***************************************************/

add_theme_support('post-thumbnails'); //habilita imagem destacada

add_filter('widget_text', 'do_shortcode'); //habilita shortcodes nos widgets


/***************************************************
# Comentários
***************************************************/

if ( ! function_exists( 'gamecdilan_atividade_comment' ) ) :

	function gamecdilan_atividade_comment( $comment, $args, $depth ) {
		$GLOBALS['comment'] = $comment;
		switch ( $comment->comment_type ) :
			case 'pingback' :
			case 'trackback' :
		?>
		<li class="post pingback">
			<p><?php _e( 'Pingback:', 'twentyeleven' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( 'Edit', 'twentyeleven' ), '<span class="edit-link">', '</span>' ); ?></p>
		<?php
				break;
			default :
		?>
		<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
			<article id="comment-<?php comment_ID(); ?>" class="comment">
				<footer class="comment-meta">
					<div class="comment-author vcard">
						<?php
							$avatar_size = 68;
							if ( '0' != $comment->comment_parent )
								$avatar_size = 39;

							echo get_avatar( $comment, $avatar_size );

							/* translators: 1: comment author, 2: date and time */
							printf( __( '%1$s on %2$s <span class="says">said:</span>', 'twentyeleven' ),
								sprintf( '<span class="fn">%s</span>', get_comment_author_link() ),
								sprintf( '<a href="%1$s"><time pubdate datetime="%2$s">%3$s</time></a>',
									esc_url( get_comment_link( $comment->comment_ID ) ),
									get_comment_time( 'c' ),
									/* translators: 1: date, 2: time */
									sprintf( __( '%1$s at %2$s', 'twentyeleven' ), get_comment_date(), get_comment_time() )
								)
							);
						?>

						<?php edit_comment_link( __( 'Edit', 'twentyeleven' ), '<span class="edit-link">', '</span>' ); ?>
					</div><!-- .comment-author .vcard -->

					<?php if ( $comment->comment_approved == '0' ) : ?>
						<em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'twentyeleven' ); ?></em>
						<br />
					<?php endif; ?>

				</footer>

				<div class="comment-content"><?php comment_text(); ?></div>

				<div class="reply">
					<?php comment_reply_link( array_merge( $args, array( 'reply_text' => __( 'Reply <span>&darr;</span>', 'twentyeleven' ), 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
				</div><!-- .reply -->
			</article><!-- #comment-## -->

		<?php
				break;
		endswitch;
	}
endif;


/*
// ====================================================
// = Atualisa usermeta do jogador via formidable  =
// ====================================================
*/

add_action('frm_after_create_entry','altera_usermeta_via_form_basico', 20,2);
add_action('frm_after_update_entry','altera_usermeta_via_form_basico', 20,2);

function altera_usermeta_via_form_basico ($entry_id, $form_id) {

	if ($form_id == 6) {
		update_user_meta ($_POST['item_meta'][84], 'first_name', $_POST['item_meta'][85]);
		update_user_meta ($_POST['item_meta'][84], 'last_name', $_POST['item_meta'][86]);
		update_user_meta ($_POST['item_meta'][84], 'nickname', $_POST['item_meta'][87]);
		update_user_meta ($_POST['item_meta'][84], 'lanhouse', $_POST['item_meta'][89]);

	}
}

?>