<?php
/*
 * Template Name: お知らせイベント一覧
 */
get_header(1); ?>

<?php $postType = get_post_type();
if ( !$postType ) {
	// カスタム投稿タイプで該当記事が0件の場合、 get_post_type()で取得できないのでタクソノミーから取得
	$taxonomy = get_queried_object()->taxonomy;
	$postType = get_taxonomy( $taxonomy )->object_type[0];
} ?>
<!-- [ #container ] -->
<div id="container" class="innerBox">
	<!-- [ #content ] -->
	<div id="news-info">
		<img src="<?php echo get_template_directory_uri(); ?>/images/site-img/list-img/h_news.png" alt="お知らせ">
		<img src="<?php echo get_template_directory_uri(); ?>/images/site-img/list-img/img_news.png" alt="お知らせ画像">
		<div class="content-scroll">
			<?php query_posts('cat=6&post_type=post&posts_per_page=20&nopaging=true'); ?>
			<?php if (have_posts()) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<article>
						<time pubdate="pubdate" datetime="<?php the_time('Y-m-d-'); ?>">
						<?php the_time(get_option('date_format')); ?>
						</time>
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</article>
				<?php endwhile; ?>
			<?php endif;  ?>
		<?php wp_reset_query(); ?>
	</div>
	</div>

	<div id="event-info">
		<img src="<?php echo get_template_directory_uri(); ?>/images/site-img/list-img/h_event.png" alt="イベント">
		<img src="<?php echo get_template_directory_uri(); ?>/images/site-img/list-img/img_event.png" alt="イベント画像">
		<div class="content-scroll">
		<?php query_posts('cat=7&post_type=post&posts_per_page=20&nopaging=true'); ?>
			<?php if (have_posts()) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<article>
						<time pubdate="pubdate" datetime="<?php the_time('Y-m-d-'); ?>">
						<?php the_time(get_option('date_format')); ?>
						</time>
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</article>
				<?php endwhile; ?>
			<?php endif;  ?>
		<?php wp_reset_query(); ?>
	</div>
	</div>
<!-- [ /#content ] -->
</div>
<!-- [ /#container ] -->
<?php get_footer(); ?>