<?php
/*
 * Template Name: 想い
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

<img src="<?php bloginfo('template_url'); ?>/images/site-img/mind-img/h_mission.png" alt="使命"><br/>
<img src="<?php bloginfo('template_url'); ?>/images/site-img/mind-img/copy_mission01.png" alt="想いのこもった美味い日本の酒を若い世代へ、そして世界へ伝える"><br/>
<img src="<?php bloginfo('template_url'); ?>/images/site-img/mind-img/img_copy_mission01.png" alt="画像"><br/>

ただ、酒という物を売るのではなく、日本の職人たちが、僅かなことも一つ一つ突き詰めて造った酒、そして<br/>
今までの先人達が築き上げてきた酒文化の魅力を伝えます。<br/><br/>
特に、若い世代や海外の方はもしかすると我々が説明する酒が初めての日本の酒かも知れない。<br/>
我々の伝え方1つで、その後が変わるという責任を持ち続けて営業致します。<br/>

<img src="<?php bloginfo('template_url'); ?>/images/site-img/mind-img/copy_mission02.png" alt="酒をより親しみやすく、新しい発見のあるものへ"><br/>
<img src="<?php bloginfo('template_url'); ?>/images/site-img/mind-img/img_copy_mission02.png" alt="画像" align="right">
<br>
現在お酒と一般消費者が関わりを持つ機会は、「スーパー・コンビニ等の小売店」「飲食店」が大半だと思います。<br/><br/>
こだわりのあるお店は別にして、基本的には商品を陳列だけ。そんな状況では、製法や味わいの定義など色々と難しいお酒を理解して買うなど出来ない。そして結果的に、酒は難しいと離れてしまう。<br/><br/>
そうではなく、お客様が別の環境からでもお酒と関わることが出来、酒をもっと簡単に理解出来る環境・さらに興味を深めて楽しんでもらう為の環境を提供します。<br/>
<br clear="right">

<img src="<?php bloginfo('template_url'); ?>/images/site-img/mind-img/copy_mission03.png" alt="お客様、取引先を含めた関係者全ての人生を豊かにする"><br/>

事業を継続する上で、誰が欠けても成立しません。<br/><br/>
長年多くの関係者の皆様の善意により支えられてきた弊社は、<br/>
誠意ある行動と誠実な姿勢で営業し購買という1つのコミュニケーションを通じて関係者の人生が少しでも豊か<br/>
になるよう努めます。<br/>

<img src="<?php bloginfo('template_url'); ?>/images/site-img/mind-img/h_policy.png" alt="方針"><br/>
<img src="<?php bloginfo('template_url'); ?>/images/site-img/mind-img/copy_policy01.png" alt="仕事へのこだわり"><br/>

小売店は、どこで買っても同じと言われたら終わりだと思います。<br/>
それは、品揃えといった簡単な問題などではなく在り方の問題です。<br/>
創業以来、どんな商品も安売りをせずにお客様との人間関係・その他の価値提供でもって営業してきた在り方<br/>
を継続し、自分たちの仕事の価値を下げる安売りではなく、仕事の価値を高める価値提供を今後も行ってまい<br/>
ります。<br/>

<img src="<?php bloginfo('template_url'); ?>/images/site-img/mind-img/img_copy_policy01_1.png" alt="画像">
<img src="<?php bloginfo('template_url'); ?>/images/site-img/mind-img/img_copy_policy01_2.png" alt="画像"><br/>

<img src="<?php bloginfo('template_url'); ?>/images/site-img/mind-img/copy_policy02.png" alt="人へのこだわり"><br/>

お酒の仕事をする上で、<br/>
「お客さんに美味しい酒を飲んで欲しい。面白いお酒を飲んで欲しい。」<br/>
こういった想いを多くの方と共有する事が重要と考えております。<br/><br/>
酒は、嗜好品ですので無くても死にません。<br/>
しかし、人生の重要なシーンや思い出深いシーンにはかなりの頻度でお酒が側にいます。<br/><br/>
だからこそ、僅かなことも突き詰める姿勢・自分たちの造った酒、選んだ酒でお客様に喜んで貰おうという姿<br/>
勢を持ち続ける事が酒屋の仕事と思います。<br/>
そういった想いを持った人の造る酒や仕事は、すぐに結果は出ずとも日々の積み重ねで必ず結果が出るもの<br/>
で、想いを共有して仕事に取組み、結果的にお客様の満足度が向上するよう積み重ねてまいります。<br/>

<img src="<?php bloginfo('template_url'); ?>/images/site-img/mind-img/copy_policy03.png" alt="商品へのこだわり"><br/>
<img src="<?php bloginfo('template_url'); ?>/images/site-img/mind-img/img_copy_policy03.png" alt="画像"><br/>

商品を取り扱うという事は、どんな状況であれその商品の魅力を信じ続けるという覚悟を持つことで、その自<br/>
信を持って提供できる上質な商品を揃えること。<br/>
そうして、お客様が安心して選べる楽しみを創造し、「有名だから・売れるから」に先行されるのでない無名<br/>
でもこだわりある美味い酒と知り合う機会を増やすべく、商品1つ1つの魅力を丁寧に伝えます。<br/>

</div>
<!-- [ /#content ] -->


</div> 
<!-- [ /#container ] -->

<?php get_footer(); ?>