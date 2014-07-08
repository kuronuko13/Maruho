<?php
/*
 * Template Name: お問い合わせ	
 */
get_header(); ?>

<!-- [ #container ] -->
<div id="container" class="innerBox">
<!-- [ #content ] -->
<div>
<img src="http://maruho-sake.com/wp/wp-content/themes/biz-vektor/images/site-img/contact-img/h_contact.png" alt="お問い合わせ"><br/>
<img src="http://maruho-sake.com/wp/wp-content/themes/biz-vektor/images/site-img/contact-img/copy_contact_01.png" alt="お電話でのお問い合わせ"><br/>

お電話はこちらの番号で承っております。<br/ >
何かご質問などがございましたら、いつでもお気軽にお問い合わせください。<br/>

<img src="http://maruho-sake.com/wp/wp-content/themes/biz-vektor/images/site-img/contact-img/img_adress.png" alt="電話番号　06-6583-2368"><br/>

お電話対応時間　月～土(9:00～17:00)<br/ >

<img src="http://maruho-sake.com/wp/wp-content/themes/biz-vektor/images/site-img/contact-img/copy_contact_02.png" alt="お問い合わせフォーム"><br/>

必須項目
<img src="http://maruho-sake.com/wp/wp-content/themes/biz-vektor/images/site-img/contact-img/img_mandatoryfield.png" alt="必須">
はご記入をお願いいたします。<br/>

</div>

<div id="content" class="wide">
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