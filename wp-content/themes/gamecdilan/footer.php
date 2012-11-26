			
			</section>
			
			<footer id="site-footer">
					<section id="footer-menu">
						<ul class="nav nav-pills pull-right">
							<?php wp_nav_menu(array('theme_location' => 'footermenu', 'container' => false, 'items_wrap' => '%3$s', 'menu_id' => 'top-nav')); ?>
			                <?php if(is_user_logged_in()) : ?>
			                    <li class="logout"><a href="<?php echo wp_logout_url(); ?>" title="Logout" class=>Logout</a></li>
			                <?php endif; ?>
			            </ul>
			        </section>
		        </div>
			</footer>
		<?php wp_footer(); ?>
	</body>
</html>