<?php
/*
 * Template Name: 店舗情報
 */
get_header(2); ?>

<!-- [ #container ] -->
<div id="container" class="innerBox">
<!-- [ #content ] -->

<div id="shopinfo-content" class="wide">
	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/site-img/shopinfo-img/h_shopinfo.png">
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