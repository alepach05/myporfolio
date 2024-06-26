<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Astra
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

<?php if (astra_page_layout() == 'left-sidebar'): ?>

	<?php get_sidebar(); ?>

<?php endif ?>

<div id="primary" <?php astra_primary_class(); ?>>

	<?php astra_primary_content_top(); ?>

	<?php //astra_content_loop(); ?>

	<?php if (have_posts()):
		while (have_posts()):
			the_post(); ?>
			<h2 class="post-title"><?php the_title(); ?></h2>
			<div>
				<?php the_content(); ?>
				<p><?php echo get_field('nombre'); ?></p>
				<p><?php echo get_field('descripcion'); ?></p>
				<?php $foto = get_field('imagen'); ?>
				<img src="<?php echo $foto['url'] ?>" alt="<?php echo $foto['alt'] ?>">
				<?php 
                $model = get_field('sketchfab_url'); 
                if ($model): ?>
                    <div class="model-container">
                        <iframe class="model-iframe" src="<?php echo esc_url($model); ?>/embed" frameborder="0"></iframe>
                    </div>
                <?php endif; ?>
			</div>
		<?php endwhile;
	endif; ?>
	<?php astra_primary_content_bottom(); ?>

</div><!-- #primary -->

<?php if (astra_page_layout() == 'right-sidebar'): ?>

	<?php get_sidebar(); ?>

<?php endif ?>

<?php get_footer(); ?>