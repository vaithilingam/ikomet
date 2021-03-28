<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- #content -->
    <?php get_template_part( 'footer-widget' ); ?>
	<footer id="colophon" class="site-footer <?php echo wp_bootstrap_starter_bg_class(); ?>" role="contentinfo">
		<div class="container pt-3 pb-3">
            <div class="site-info">
                &copy; <?php echo date('Y'); ?> <?php echo '<a href="'.home_url().'">'.get_bloginfo('name').'</a>'; ?>
                <span class="sep"> | </span>
                <a class="credits" href="https://afterimagedesigns.com/wp-bootstrap-starter/" target="_blank" title="WordPress Technical Support" alt="Bootstrap WordPress Theme"><?php echo esc_html__('Bootstrap WordPress Theme','wp-bootstrap-starter'); ?></a>

            </div><!-- close .site-info -->
		</div>
	</footer><!-- #colophon -->
<?php endif; ?>
</div><!-- #page -->

<?php wp_footer(); ?>
<script>
	
jQuery("#search-input").on("keydown", function (e) {
	jQuery("#no-result").hide();
    if (e.keyCode === 13) { 
        fetchWord(e);
    }
});
function fetchWord(){
	var searchVal = jQuery("#search-input").val();
	var wordApiUrl = "http://localhost/ikomet-test/wp-json/wp/v2/word";
	jQuery.get(wordApiUrl, function(results) {
		var data = results.find(function (item) {
			return item.post_titles.toLowerCase() === searchVal.toLowerCase();			
		});
		console.log(data);
		if (data) {
			jQuery("#pods-section").find("h2").html(data.post_titles);
			jQuery("#post-content").html(data.post_body);
		} else {
			jQuery("#no-result").show();
		}
	});
}
jQuery("#reset-search").on("click", function (e) {
   jQuery("#search-input").val("");
});
</script>
</body>
</html>