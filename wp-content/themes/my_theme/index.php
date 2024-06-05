<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>
<?php if ( astra_page_layout() == 'left-sidebar' ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?>
	<div id="primary" <?php astra_primary_class(); ?>>
		<?php
		astra_primary_content_top();

		$page = get_query_var('pg');

		$args = [
			'post-type' => 'post',
			'post_per_page'=> 10,
			'paged'=> $page,
		];

		$query = new WP_Query( $args );
		?>

		<div>
			<ul>
				<?php 
					while ( $query -> have_posts() ){
						$query -> the_post();
						global $post;
						?>
						<li class="card">
							<a href="<?php echo get_the_permalink(); ?>">
								<?php echo get_the_post_thumbnail($post -> ID); ?>
								<div>
									<h2><?php echo get_the_title(); ?></h2>
								</div>
								</a>
						</li>
						<?php
					} 
					?>

					<div>
						<ul>
							<?php  
								array(
									'total' => $query->max_num_pages,
									'current' => $paged,
									'format' => '?pg=%#%',
								)
							?>
						</ul>
					</div>

					<?php
					wp_reset_postdata()
				?>
			</ul>
		</div>

<?php
		astra_primary_content_bottom();
		?>
	</div><!-- #primary -->
<?php
if ( astra_page_layout() == 'right-sidebar' ) :

	get_sidebar();

endif;

get_footer();
