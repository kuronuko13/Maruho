<?php
/*
 * Template Name: 事業内容
 */
get_header(1); ?>

<!-- [ #container ] -->
<div id="container" class="innerBox">

<!-- [ #sideTower ] -->
<div id="sideTower">
	<h2><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/site-img/project-img/h_project_side.png" /></h2>
	<ul>
		<li><a href="#project-retail"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mind-icon.png" /><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/site-img/project-img/nav_retail_side.png" /></a></li>
		<li><a href="#project-onlineresale"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mind-icon.png" /><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/site-img/project-img/nav_onlineresale_side.png" /></a></li>
		<li><a href="#project-wholesale"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mind-icon.png" /><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/site-img/project-img/nav_wholesale_side.png" /></a></li>
		<li><a href="#project-standingbar"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mind-icon.png" /><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/site-img/project-img/nav_standingbar_side.png" /></a></li>
		<li><a href="#project-event"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mind-icon.png" /><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/site-img/project-img/nav_event_side.png" /></a></li>
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

<?php
if ( is_user_logged_in() == TRUE ) { ?>
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