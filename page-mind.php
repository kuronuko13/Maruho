<?php
/*
 * Template Name: 想い
 */
get_header(1); ?>

<!-- [ #container ] -->
<div id="container" class="innerBox">

<!-- [ #sideTower ] -->
<div id="sideTower">
	<h2><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/site-img/mind-img/h_mind_side.png" /></h2>
	<ul>
		<li><a href="#mind-mision"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mind-icon.png" /><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/site-img/mind-img/nav_mission_side.png" /></a></li>
		<li><a href="#mind-policy"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mind-icon.png" /><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/site-img/mind-img/nav_policy_side.png" /></a></li>
	</ul>
</div>  
<!-- [ /#sideTower ] -->

<!-- [ #content ] -->
<div id="content-page" class="wide">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<div id="post-<?php the_ID(); ?>" class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link">' . 'Pages:', 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->

<?php if ( is_user_logged_in() == TRUE ) { ?>
<div class="adminEdit">
<span class="linkBtn linkBtnS linkBtnAdmin"><?php edit_post_link(__('Edit', 'biz-vektor')); ?></span>
</div>
<?php } ?>

<?php biz_vektor_snsBtns(); ?>
<?php biz_vektor_fbComments(); ?>

<?php endwhile; ?>
</div>
<!-- [ /#content ] -->


</div> 
<!-- [ /#container ] -->

<?php get_footer(); ?>