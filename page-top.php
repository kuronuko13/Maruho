<?php
/**
 * Template Name: トップ
 */
get_header(); ?>
<!-- [ #container ] -->
<div id="container" class="innerBox">
	<!-- [ #content ] -->
	<div id="top-content">

	<div class="top-news">
	<a href="<?php echo home_url('/'); ?>/list/"><img src="<?php echo get_template_directory_uri(); ?>/images/site-img/toppage-img/h_news.png" alt="お知らせ"></a>
	<a href="<?php echo home_url('/'); ?>/list/" class="all"><img src="<?php echo get_template_directory_uri(); ?>/images/site-img/toppage-img/btn_ichiran.png" alt="一覧"></a>
	<?php query_posts('cat=6&post_type=post&showposts=4'); ?>
	<?php
	if (have_posts()) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<article>
					<time pubdate="pubdate" datetime="<?php the_time('Y-n-d-'); ?>">
					<?php the_time('Y年'); ?><br/>
					<?php the_time('n月d日'); ?>
					</time>
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</article>
		<?php endwhile; ?>
	<?php endif;  ?>
	<?php wp_reset_query(); ?>
	</div>

	<div class="top-calendar">
	<img src="<?php echo get_template_directory_uri(); ?>/images/site-img/toppage-img/h_calender.png" alt="営業日カレンダー">
	<div id="calendar-content" class="wide">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<div class="calendar-content">
			<?php the_content(); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-link">' . 'Pages:', 'after' => '</div>' ) ); ?>
		</div><!-- calendar-content -->
	<?php endwhile; ?>
	</div>

	<h3>営業時間</h3>
	<table class="sales">
	<tr>
		<td>月〜金：</td><td>9時〜20時</td>
	</tr>
	<tr>
		<td>土：</td><td>9時〜17時</td>
	</tr>
	<tr>
		<td>立飲み：</td><td>月・水　17時〜20時</td>
	</tr>
	</table>
	<p>※月曜が祝日の週は、営業を金曜日に振替ます</p>
	</div>

	<div class="top-shop">
	<a href="<?php echo home_url('/'); ?>/shopinfo/"><img src="<?php echo get_template_directory_uri(); ?>/images/site-img/toppage-img/h_shopinfo.png" alt="店舗紹介"></a>
	<a href="<?php echo home_url('/'); ?>/shopinfo/"><img src="<?php echo get_template_directory_uri(); ?>/images/site-img/toppage-img/img_shopinfo.png" alt="店舗紹介画像"></a>
	<p>常時70種類以上のクラフトビールとこだわりの地酒を取り揃えております。</p>
	</div>

	

	<div class="top-event">
	<a href="<?php echo home_url('/'); ?>/list/"><img src="<?php echo get_template_directory_uri(); ?>/images/site-img/toppage-img/h_event.png" alt="イベント"></a>
	<a href="<?php echo home_url('/'); ?>/list/" class="all"><img src="<?php echo get_template_directory_uri(); ?>/images/site-img/toppage-img/btn_ichiran.png" alt="一覧"></a>
	<?php query_posts('cat=7&post_type=post&showposts=4'); ?>
	<?php
	if (have_posts()) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<article>
					<time pubdate="pubdate" datetime="<?php the_time('Y-n-d-'); ?>">
					<?php the_time('Y年'); ?><br/>
					<?php the_time('n月d日'); ?>
					</time>
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</article>
		<?php endwhile; ?>
	<?php endif;  ?>
	<?php wp_reset_query(); ?>
	</div>

	<div class="top-facebook">
	<a href="https://www.facebook.com/maruho.sake"><img src="<?php echo get_template_directory_uri(); ?>/images/site-img/toppage-img/h_facebook.png" alt="Facebook"></a>
	<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fmaruho.sake&amp;width=218&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:218px; height:290px;" allowTransparency="true"></iframe>
	</div>

	<div class="top-faith">
	<a href="<?php echo home_url('/'); ?>/mind/"><img src="<?php echo get_template_directory_uri(); ?>/images/site-img/toppage-img/h_mind.png" alt="想い"></a>
	<a href="<?php echo home_url('/'); ?>/mind/"><img src="<?php echo get_template_directory_uri(); ?>/images/site-img/toppage-img/img_mind.png" alt="想い画像"></a>
	<p>今の時代の酒屋として、変わるべき</p>
	<p>もの変わらずに持ち続けるべき理念</p>
	について<br/>
	</div>

	<div class="top-magazine">
	<a href="<?php echo home_url('/'); ?>/blog/"><img src="<?php echo get_template_directory_uri(); ?>/images/site-img/toppage-img/h_blog.png" alt="マルホ便り"></a>
	<a href="<?php echo home_url('/'); ?>/blog/"><img src="<?php echo get_template_directory_uri(); ?>/images/site-img/toppage-img/img_blog.png" alt="マルホ便り画像"></a>
	<p>ブルワリーや蔵元訪問、日々のあれ</p>
	<p>これについて書いています。</p>
	</div>

	<div class="top-beer">
	<a href="<?php echo home_url('/'); ?>/project/"><img src="<?php echo get_template_directory_uri(); ?>/images/site-img/toppage-img/h_project.png" alt="プロジェクト"></a>
	<a href="https://beerbox.jp/"><img src="<?php echo get_template_directory_uri(); ?>/images/site-img/toppage-img/img_beerbox.png" alt="beerbox"></a>
	<p>クラフトビール定期宅配サービス</p>
	</div>

	</div>
	<?php
	if ( is_user_logged_in() == TRUE ) { ?>
	<div class="adminEdit">
	<span class="linkBtn linkBtnS linkBtnAdmin"><?php edit_post_link(__('Edit', 'biz-vektor')); ?></span>
	</div>
	<?php } ?>
	<!-- [ /#content ] -->

</div>
<!-- [ /#container ] -->

</div>
<?php get_footer(); ?>