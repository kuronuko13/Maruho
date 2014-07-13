<?php
if (in_category('news'))  {
	//	news カテゴリはsingle-news.phpを読み込む
	get_template_part('single-news');
} else if (in_category('event'))  {
	//  eventカテゴリはsingle-event.phpを読み込む
	get_template_part('single-event');
}  else  {
	//	blog カテゴリはsingle-blog.phpを読み込む
	get_template_part('single-blog');
}
?>