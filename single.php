/**
 * Header file linkup
 */
<?php get_header(); ?>

<?php while(have_posts()):the_post()?>
	<?php the_title();?>
	<?php the_author();?>
	<?php the_content();?>
<?php endwhile;?>	

/**
 * Footer file linkup
 */    
<?php get_footer(); ?>