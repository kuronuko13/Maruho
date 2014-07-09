<?php
/*
 * Template Name: 会社概要
 */
get_header(); ?>

<!-- [ #container ] -->
<div id="container" class="innerBox">

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
	<?php get_sidebar(); ?>
</div>  
<!-- [ /#sideTower ] -->

<!-- [ #content ] -->
<div>

<img src="<?php bloginfo('template_url'); ?>/images/site-img/comabout-img/h_cominfo.png" alt="会社情報"><br/>

<table border=0>
<tr>
	<td>社名</td>
	<td>
	<ruby>
		<rb>株式会社波々伯部商店</rb>
		<rp>(</rp>
		<rt>かぶしきがいしゃほほかべしょうてん</rt>
		<rp>)</rp>
	</ruby>
	</td>
</tr>
<tr>
	<td>屋号/店名</td>
	<td>マルホ酒店</td>
</tr>
<tr>
	<td><br/></td>
	<td><a href="<?php bloginfo('template_url'); ?>/shopinfo/"><img src="<?php bloginfo('template_url'); ?>/images/site-img/comabout-img/bnr_shopabout.png" alt="店舗紹介"></a></td>
</tr>
<tr>
	<td>電話番号</td>
	<td>06-6583-2368</td>
</tr>
<tr>
	<td>Fax</td>
	<td>06-6583-4139</td>
</tr>
<tr>
	<td>代表者</td>
	<td>代表取締役波々伯部恵子</td>
</tr>
<tr>
	<td>創業</td>
	<td>明治末期</td>
</tr>
<tr>
	<td>設立</td>
	<td>1957年7月6日</td>
</tr>
</table>

アクセスマップ<br/>

<?php display_google_map(); ?>

<img src="<?php bloginfo('template_url'); ?>/images/site-img/comabout-img/h_history.png" alt="会社沿革"><br/>

<table border=2>
<tr>
	<td>明治末期</td>
	<td>波々伯部次朗助 丹波より大阪へ上京し創業</td>
</tr>
<tr>
	<td>大正6年</td>
	<td>波々伯部博　治郎助の長男として誕生</td>
</tr>
<tr>
	<td>大正6年</td>
	<td>治朗助没により積太郎2代目に就任</td>
</tr>
<tr>
	<td>昭和20年頃</td>
	<td>波々伯部博 小売マルホ酒店を焼け野原に屋根の無い店を新たに開業</td>
</tr>
<tr>
	<td>昭和29年</td>
	<td>立ち飲み専門店を出店</td>
</tr>
<tr>
	<td>昭和36年</td>
	<td>立ち飲み専門店を売却</td>
</tr>
<tr>
	<td>昭和38年</td>
	<td>現在のマルホビルを建設</td>
</tr>
<tr>
	<td>昭和63年</td>
	<td>波々伯部豊代表に就任</td>
</tr>
<tr>
	<td>平成23年</td>
	<td>豊没により波々伯部恵子代表に就任</td>
</tr>
</table>

</div>
<!-- [ /#content ] -->


</div> 
<!-- [ /#container ] -->

<?php get_footer(); ?>