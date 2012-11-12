<div id="comments">
	
	<?php if ( post_password_required() ) : ?>
		<p class="nopassword"><?php _e( 'This post is password protected. Enter the password to view any comments.', 'twentyeleven' ); ?></p>
	</div>
	<?php
			return;
		endif;
	?>

	<?php

	$args = array(
		'comment_notes_after' => false,
		'title_reply' => 'Comentários ou dúvidas',
		'logged_in_as' => false,
		'comment_field' => '<textarea id="comment" name="comment" aria-required="true" rows="8" class="span4"></textarea>',
	);

	comment_form($args); ?>

	<?php if ( have_comments() ) : ?>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
			<nav id="comment-nav-above">
				<div class="nav-previous"><?php previous_comments_link('&laquo; mais antigos'); ?></div>
				<div class="nav-next"><?php next_comments_link('mais novos &raquo;'); ?></div>
			</nav>
		<?php endif; ?>

		<div class="well">
			<ol class="commentlist">
				<?php wp_list_comments(); ?>
			</ol>
		</div>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
			<nav id="comment-nav-below">
				<div class="nav-previous"><?php previous_comments_link('&laquo; mais antigos'); ?></div>
				<div class="nav-next"><?php next_comments_link('mais novos &raquo;'); ?></div>
			</nav>
		<?php endif; ?>

	<?php elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
		<p class="nocomments"><?php _e( 'Comments are closed.', 'twentyeleven' ); ?></p>
	<?php endif; ?>

</div>