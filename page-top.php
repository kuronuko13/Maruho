<?php
/**
 * Template Name: トップ
 */
get_header(); ?>
<!-- [ #container ] -->
<div id="container" class="innerBox">
	<!-- [ #content ] -->
	<div id="content">
	<a href="<?php echo home_url('/'); ?>/list/"><img src="<?php echo get_template_directory_uri(); ?>/images/site-img/toppage-img/h_news.png" alt="お知らせ"></a>
	<a href="<?php echo home_url('/'); ?>/list/"><img src="<?php echo get_template_directory_uri(); ?>/images/site-img/toppage-img/btn_ichiran.png" alt="一覧"></a><br/>
	<?php query_posts('cat=6&post_type=post&showposts=4'); ?>
	<?php
	if (have_posts()) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<article>
				<li>
					<time pubdate="pubdate" datetime="<?php the_time('Y-n-d-'); ?>">
					<?php the_time('Y年'); ?><br/>
					<?php the_time('n月d日'); ?>
					</time>
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</li>
			</article>
		<?php endwhile; ?>
	<?php endif;  ?>
	<?php wp_reset_query(); ?>

	<a href="<?php echo home_url('/'); ?>/shopinfo/"><img src="<?php echo get_template_directory_uri(); ?>/images/site-img/toppage-img/h_shopinfo.png" alt="店舗紹介"></a><br/>
	<a href="<?php echo home_url('/'); ?>/shopinfo/"><img src="<?php echo get_template_directory_uri(); ?>/images/site-img/toppage-img/img_shopinfo.png" alt="店舗紹介画像"></a><br/>
	常時70種類以上のクラフトビールとこだわりの地酒を取り揃えております。<br/>

	<img src="<?php echo get_template_directory_uri(); ?>/images/site-img/toppage-img/h_calender.png" alt="営業日カレンダー"><br/>
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

	営業時間<br/><br/>
	月〜金：9時〜20時<br/>
	土：9時〜17時<br/>
	立飲み：月・水　17時〜20時<br/>
	※月曜が祝日の週は、営業を金<br/>
	曜日に振替ます<br/>

	<a href="<?php echo home_url('/'); ?>/list/"><img src="<?php echo get_template_directory_uri(); ?>/images/site-img/toppage-img/h_event.png" alt="イベント"></a>
	<a href="<?php echo home_url('/'); ?>/list/"><img src="<?php echo get_template_directory_uri(); ?>/images/site-img/toppage-img/btn_ichiran.png" alt="一覧"></a><br/>
	<?php query_posts('cat=7&post_type=post&showposts=4'); ?>
	<?php
	if (have_posts()) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<article>
				<li>
					<time pubdate="pubdate" datetime="<?php the_time('Y-n-d-'); ?>">
					<?php the_time('Y年'); ?><br/>
					<?php the_time('n月d日'); ?>
					</time>
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</li>
			</article>
		<?php endwhile; ?>
	<?php endif;  ?>
	<?php wp_reset_query(); ?>

	<a href="<?php echo home_url('/'); ?>/mind/"><img src="<?php echo get_template_directory_uri(); ?>/images/site-img/toppage-img/h_mind.png" alt="想い"></a><br/>
	<a href="<?php echo home_url('/'); ?>/mind/"><img src="<?php echo get_template_directory_uri(); ?>/images/site-img/toppage-img/img_mind.png" alt="想い画像"></a><br/>
	今の時代の酒屋として、変わるべき<br/>
	もの変わらずに持ち続けるべき理念<br/>
	について<br/>

	<a href="<?php echo home_url('/'); ?>/blog/"><img src="<?php echo get_template_directory_uri(); ?>/images/site-img/toppage-img/h_blog.png" alt="マルホ便り"></a><br/>
	<a href="<?php echo home_url('/'); ?>/blog/"><img src="<?php echo get_template_directory_uri(); ?>/images/site-img/toppage-img/img_blog.png" alt="マルホ便り画像"></a><br/>
	ブルワリーや蔵元訪問、日々のあれ<br/>
	これについて書いています。<br/>

	<a href="https://www.facebook.com/maruho.sake"><img src="<?php echo get_template_directory_uri(); ?>/images/site-img/toppage-img/h_blog.png" alt="Facebook"></a><br/>
	<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fmaruho.sake&amp;width=218&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:218px; height:290px;" allowTransparency="true"></iframe><br/

	<a href="<?php echo home_url('/'); ?>/project/"><img src="<?php echo get_template_directory_uri(); ?>/images/site-img/toppage-img/h_project.png" alt="プロジェクト"></a><br/>
	<a href="https://beerbox.jp/"><img src="<?php echo get_template_directory_uri(); ?>/images/site-img/toppage-img/img_beerbox.png" alt="beerbox"></a><br/>
	クラフトビール定期宅配サービス

	</div>
	<!-- [ /#content ] -->

</div>
<!-- [ /#container ] -->

<?php get_footer(); ?>