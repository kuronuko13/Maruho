<?php
/*
 * Template Name: 会社概要
 */
get_header(1); ?>

<!-- [ #container ] -->
<div id="container" class="innerBox">

<!-- [ #sideTower ] -->
<div id="sideTower">
	<h2>会社概要</h2>
	<ul>
		<li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mind-icon.png" />会社情報</a></li>
		<li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mind-icon.png" />会社沿革</a></li>
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