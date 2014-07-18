<?php get_header(1); ?>
<?php $postType = get_post_type();
if ( !$postType ) {
	// カスタム投稿タイプで該当記事が0件の場合、 get_post_type()で取得できないのでタクソノミーから取得
	$taxonomy = get_queried_object()->taxonomy;
	$postType = get_taxonomy( $taxonomy )->object_type[0];
} ?>

<?php 
	$a_month = get_query_var('monthnum');

	$a_year = get_query_var('year');

?>
<!-- [ #container ] -->
<div id="container" class="innerBox">
	<!-- [ #content ] -->
	<div id="content">
	
	<div class="archive-title">
	<?php
/*-------------------------------------------*/
/*	Archive title
/*-------------------------------------------*/
	if ( is_year()) {
		// $archiveTitle = get_the_date('Y');
		$archiveTitle = sprintf( __( 'Yearly Archives: %s', 'biz-vektor' ), get_the_date( _x( 'Y', 'yearly archives date format', 'biz-vektor' ) ) );
	} else if ( is_month() ) {
		$archiveTitle = sprintf( __( 'Monthly Archives: %s', 'biz-vektor' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'biz-vektor' ) ) );
	} else if ( is_category() || is_tax() ) {
		$archiveTitle = single_term_title( '',false);
	} else if ( is_tag() ) {
		$archiveTitle = __('Tags : ', 'biz-vektor').single_term_title( '',false);
	} else if ( is_author() ) {
		$userObj = get_queried_object();
		$archiveTitle = $userObj->display_name;
	}
	$archiveTitle = apply_filters( 'biz_vektor_archiveTitCustom', $archiveTitle );
	if ($archiveTitle) {
		echo '<h1 class="contentTitle">'.esc_html( $archiveTitle ).'</h1>';
	}
/*-------------------------------------------*/
/*	Archive description
/*-------------------------------------------*/
	// if ( is_category() || is_tax() || is_tag() ) {
	// 	$category_description = term_description();
	// }
	// if ( ! empty( $category_description ) ) 
	// 	echo '<div class="archive-meta">' . $category_description . '</div>';
	?>
	<?php
/*-------------------------------------------*/
/*	Archive post list
/*-------------------------------------------*/
	//?>
	</div>

	<div class="infoList">
	<!--<?php
	$options = biz_vektor_get_theme_options();
	if ($postType == 'info') : ?>
		<?php if ( $options['listInfoArchive'] == 'listType_set' ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part('module_loop_post2'); ?>
			<?php endwhile ?>
		<?php else : ?>
			<ul class="entryList">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part('module_loop_post'); ?>
			<?php endwhile; ?>
			</ul>
		<?php endif; //$options['listInfoArchive'] ?>
	<?php else : ?>
		<?php $options = biz_vektor_get_theme_options();
		if ( $options['listBlogArchive'] == 'listType_set' ) { ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part('module_loop_post2'); ?>
			<?php endwhile ?>
		<?php } else { ?>
			<ul class="entryList">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part('module_loop_post'); ?>
			<?php endwhile; ?>
			</ul>
		<?php } ?> 

	<?php endif; // $postType == 'info' ?> -->
	</div><!-- [ /.infoList ] -->
	<?php $query = 'cat=5&post_type=post&posts_per_page=-1&year='.$a_year.'&monthnum='.$a_month.'nopaging=true' ?>
	<?php query_posts($query); ?>
	<?php if (have_posts()) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<article class="blog-article">
					<time pubdate="pubdate" datetime="<?php the_time('Y-m-d-'); ?>">
					<?php the_time(get_option('date_format')); ?>
					</time>
					<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
			</article>
		<?php endwhile; ?>
	<?php endif;  ?>
	<a href="<?php echo home_url('/'); ?>/blog/"><img class="below-post" src="<?php echo get_template_directory_uri(); ?>/images/site-img/blogpost-img/btn_return.png" alt="一覧に戻る"></a>
	</div>
	<!-- [ /#content ] -->

<!-- [ #sideTower ] -->
	<div id="side-blog">
		<?php dynamic_sidebar('Other Sidebar'); ?>
	</div>
<!-- [ /#sideTower ] -->
</div>
<!-- [ /#container ] -->

<?php wp_reset_query(); ?>
<?php get_footer(); ?>