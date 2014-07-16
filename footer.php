<?php
/**
 * The template for displaying the footer.
 */
?>
</div><!-- #main -->


<!-- [ #footerSection ] -->
<div id="footerSection">

	<div id="pagetop">
	
	<a href="#wrap"><img src="<?php bloginfo('template_url'); ?>/images/site-img/toppage-img/btn_return.png" alt="PAGETOP"></a>
	
	</div>

	
</div>
<!-- [ /#footerSection ] -->
</div>
<!-- [ /#wrap ] -->

<!-- [ #footer ] -->
	<div id="footer">
	<!-- [ #footerInner ] -->
	<div id="footerInner" class="innerBox">
		<!-- [ #footerSiteMap ] -->
		<div id="footerSiteMap">
		<?php wp_nav_menu(
		array(
			'theme_location' => 'FooterSiteMap',
			'fallback_cb' => ''
		) ); ?>
		</div>
		<!-- [ /#footerSiteMap ] -->
	</div>
	<!-- [ /#footerInner ] -->
	</div>
	<!-- [ /#footer ] -->

	<!-- [ #siteBottom ] -->
	<div id="siteBottom">
	<div id="siteBottomInner" class="innerBox">
		<p><b><?php biz_vektor_footerSiteName(); ?></b></p>
		<p>〒555-0025<br>大阪市西区九条南2-16-11</p>
		<p>TEL: 06-6583-2368<br>Email: h.hohokabe@maruho-sake.com</p>
		<h5>@copyright 株式会社波々伯部商店</h5>
	</div>
	</div>
	<!-- [ /#siteBottom ] -->

<?php wp_footer();?>

<!-- GooglePlusOne -->
<script type="text/javascript" src="https://apis.google.com/js/plusone.js">
  {lang: 'ja'}
</script>
<!-- /GooglePlusOne -->
</body>
</html>