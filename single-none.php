<?php get_header(1); ?>

<!-- [ #container ] -->
<div id="container" class="innerBox">
	<!-- [ #content ] -->
	<div id="post-content">
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<!-- [ #post- ] -->
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<time pubdate="pubdate" datetime="<?php the_time('Y-m-d-'); ?>">
		<?php the_time(get_option('date_format')); ?><br/>
	</time>
	<h1><?php the_title(); ?></h1>
	<?php edit_post_link(__('Edit', 'biz-vektor'), ' <span class="edit-link edit-item">[ ', ' ]' ); ?>
	<!-- .entry-meta -->
	<div class="entry-content post-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link">' . 'Pages:', 'after' => '</div>' ) ); ?>

		<div class="entry-utility">
			<?php
				$tags_list = get_the_tag_list( '', ', ' );
				if ( $tags_list ):
			?>
			<dl class="tag-links">
			<?php printf( __('<dt>Tags</dt><dd>%1$s</dd>', 'biz-vektor'), $tags_list ); ?>
			</dl>
			<?php endif; ?>
		</div>
		<!-- .entry-utility -->
	</div><!-- .entry-content -->

<?php
if ( is_user_logged_in() == TRUE ) { ?>
<div class="adminEdit">
	<span class="linkBtn linkBtnS linkBtnAdmin"><?php edit_post_link(__('Edit', 'biz-vektor')); ?></span>
</div>
<?php } ?>

<?php biz_vektor_snsBtns(); ?>


</div>
<!-- [ /#post- ] -->

<?php endwhile; // end of the loop. ?>

</div>
<!-- [ /#content ] -->

</div>
<!-- [ /#container ] -->

<?php get_footer(); ?>