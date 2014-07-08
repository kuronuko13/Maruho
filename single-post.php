<?php
if (in_category('blog'))  {
	//	blog カテゴリはsingle-blog.phpを読み込む
	get template_part('single-blog');
} else {
	//  news,eventカテゴリはsingle.phpを読み込む
	get template_part('single');
}
?>