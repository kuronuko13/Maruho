<!DOCTYPE html>
<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="edge" />
<![endif]-->
<html xmlns:fb="http://ogp.me/ns/fb#" <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php getHeadTitle(); ?></title>
<meta name="description" content="<?php getHeadDescription(); ?>" />
<meta name="keywords" content="<?php biz_vektor_getHeadKeywords(); ?>" />
<link rel="start" href="<?php echo site_url(); ?>" title="HOME" />
<?php
/* We add some JavaScript to pages with the comment form
 * to support sites with threaded comments (when in use).
 */
if ( is_singular() && get_option( 'thread_comments' ) )
	wp_enqueue_script( 'comment-reply' );
/* Always have wp_head() just before the closing </head>
 * tag of your theme, or you will break many plugins, which
 * generally use this hook to add elements to <head> such
 * as styles, scripts, and meta tags.
 */

wp_head();
?>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<?php
/* 子テーマが利用されている場合は旧IEでのCSS上書き用ファイルを出力
/* 備考:file_exists はセーフモードのサーバーで動作しないため不使用
*/
if (get_template_directory_uri() != get_stylesheet_directory_uri()){
	$stylePathOldIe = get_stylesheet_directory_uri()."/style_oldie.css";
	print '<!--[if lte IE 8]>'."\n";
	print '<link rel="stylesheet" type="text/css" media="all" href="'.$stylePathOldIe.'" />'."\n";
	print '<![endif]-->'."\n";
} ?>
<meta id="viewport" name="viewport" content="width=device-width, user-scalable=yes, maximum-scale=1.0, minimum-scale=1.0">
</head>

<body <?php body_class(); ?>>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/all.js#xfbml=1&appId=<?php biz_vektor_fbAppId(); ?>";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="wrapper">
<!-- [ #headerTop ] -->
<div id="headerTop">
<div class="innerBox">
<!-- <div id="site-description"><?php bloginfo( 'description' ); ?></div> -->
</div>
</div><!-- [ /#headerTop ] -->


<div id="wrap">

<!-- [ #header ] -->
<div id="header">
<div id="headerInner" class="innerBox">
<a href="https://www.facebook.com/maruho.sake">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/site-img/toppage-img/btn_facebook.png">
</a>

<!-- [ #headLogo ] -->
<a href="<?php echo home_url('/'); ?>">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/toplogo.png">
</a>
</div>
<!-- #headerInner -->
</div>
<!-- [ /#header ] -->


<?php
$gMenuExist = wp_nav_menu( array( 'theme_location' => 'Header' , 'fallback_cb' => '' , 'echo' => false ) ) ;
if ($gMenuExist) { ?>
<!-- [ #gMenu ] -->
<div id="gMenu" class="itemClose" onclick="showHide('gMenu');">
<div id="gMenuInner" class="innerBox">
<h3 class="assistive-text"><span>MENU</span></h3>
<div class="skip-link screen-reader-text"><a href="#content" title="<?php _e('Skip menu', 'biz-vektor'); ?>"><?php _e('Skip menu', 'biz-vektor'); ?></a></div>
<?php wp_nav_menu( array(
 'theme_location' => 'Header',
 'fallback_cb' => '',
 'walker' => new description_walker()
));
?>
</div><!-- [ /#gMenuInner ] -->
</div>
<!-- [ /#gMenu ] -->
<?php } ?>

</div>

<div id="top-motion">
<?php if ( function_exists( 'meteor_slideshow' ) ) { meteor_slideshow(); } ?>
</div>

<div id="wrap">
<!-- [ #panList ] -->
<div id="panList">
<div id="panListInner" class="innerBox">
<?php get_template_part('module_panList'); ?>
</div>
</div> 
<!-- [ /#panList ] -->

<div id="main">