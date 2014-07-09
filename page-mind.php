<?php
/*
 * Template Name: 想い
 */
get_header(); ?>

<!-- [ #container ] -->
<div id="container" class="innerBox">
<!-- [ #content ] -->
<div>

<img src="<?php bloginfo('template_url'); ?>/images/site-img/contact-img/h_contact.png" alt="お問い合わせ"><br/>

</div>
<!-- [ /#content ] -->

<!-- [ #sideTower ] -->
<div id="sideTower">
<?php
	if($post->ancestors){
		foreach($post->ancestors as $post_anc_id){
			$post_id = $post_anc_id;
		}
	} else {
		$post_id = $post->ID;
	}
	if ($post_id) {
		$children = wp_list_pages("title_li=&child_of=".$post_id."&echo=0");
		if ($children) { ?>
		<div class="localSection sideWidget pageListSection">
		<h3 class="localHead"><a href="<?php echo get_permalink($post_id); ?>"><?php echo get_the_title($post_id); ?></a></h3>
		<ul class="localNavi">
		<?php echo $children; ?>
		</ul>
		</div>
		<?php } ?>
<?php } ?>  
	<!-- <?php get_sidebar(); ?> -->
</div>  
<!-- [ /#sideTower ] -->
</div> 
<!-- [ /#container ] -->

<?php get_footer(); ?>