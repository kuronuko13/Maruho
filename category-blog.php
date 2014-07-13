<?php get_header(1); ?>
<?php $postType = get_post_type();
if ( !$postType ) {
	// カスタム投稿タイプで該当記事が0件の場合、 get_post_type()で取得できないのでタクソノミーから取得
	$taxonomy = get_queried_object()->taxonomy;
	$postType = get_taxonomy( $taxonomy )->object_type[0];
} ?>
<!-- [ #container ] -->
<div id="container" class="innerBox">
	<!-- [ #content ] -->
	<img src="<?php echo get_template_directory_uri(); ?>/images/site-img/blog-img/h_blog.png" alt="ブログ"><br/>
	<?php
	if (have_posts()) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<article>
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large_thumbnail', array('alt' => the_title_attribute('echo=0'), 'title' => the_title_attribute('echo=0'))); ?></a>
				<header>
					<time pubdate="pubdate" datetime="<?php the_time('Y-m-d-'); ?>">
					<?php the_time(get_option('date_format')); ?>
					</time>
					<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				</header>
				<section>
					<?php the_title(); ?><?php the_excerpt(); ?>
				</section>
			</article>
		<?php endwhile; ?>
	<?php endif;  ?>
	<!-- [ /#content ] -->

<!-- [ #sideTower ] -->
<div id="sideTower">
	<?php
	if ($postType == 'post') {
		get_template_part('module_side_blog');
	} else if ($postType == 'info') {
		get_template_part('module_side_info');
	} ?>
	<?php get_sidebar(); ?>
</div>
<!-- [ /#sideTower ] -->
</div>
<!-- [ /#container ] -->

<?php get_footer(); ?>