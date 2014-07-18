<?php get_header(1); ?>
<?php $postType = get_post_type();
if ( !$postType ) {
	// カスタム投稿タイプで該当記事が0件の場合、 get_post_type()で取得できないのでタクソノミーから取得
	$taxonomy = get_queried_object()->taxonomy;
	$postType = get_taxonomy( $taxonomy )->object_type[0];
} ?>

<?php
	$cat = get_the_category();
	$cat = $cat[1];

	$cat_id = $cat->cat_ID;

?>
<!-- [ #container ] -->
<div id="container" class="innerBox">
	<!-- [ #content ] -->
	<img src="<?php echo get_template_directory_uri(); ?>/images/site-img/blog-img/h_blog.png" alt="ブログ"><br/>

	<!-- [ #sideTower ] -->
	<div id="side-blog">
		<?php dynamic_sidebar('Other Sidebar'); ?>
	</div>
	<!-- [ /#sideTower ] -->
	<?php get_query_var('paged'); ?>
	<?php $query = 'cat='.$cat->cat_ID.'&post_type=post&posts_per_page=10&paged='.$paged ?>
	<?php query_posts($query); ?>
	<div class="blog-post">
	<?php if (have_posts()) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<article class="blog-article">
			<a href="<?php the_permalink(); ?>" class="blog-archive">
				<?php the_post_thumbnail('large_thumbnail', array('alt' => the_title_attribute('echo=0'), 'title' => the_title_attribute('echo=0'))); ?>
			</a>
				<header>
					<time pubdate="pubdate" datetime="<?php the_time('Y-m-d-'); ?>">
					<?php the_time(get_option('date_format')); ?>
					</time>
					<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				</header>
				<section>
					<?php the_excerpt(); ?>
				</section>
			</article>
		<?php endwhile; ?>
	<?php endif;  ?>
	<?php pagination($additional_loop->max_num_pages); ?>
	</div>
	<!-- [ /#content ] -->
</div>
<!-- [ /#container ] -->
<?php wp_reset_query(); ?>
<?php get_footer(); ?>