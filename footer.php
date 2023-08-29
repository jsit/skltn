<?php
/**
 * The footer template
 *
 * Includes the closing body and html tags
 *
 * @package WordPress
 * @subpackage skltn
 * @since skltn 0.1
 */

?>

		<footer class="site-footer<?php echo ( is_attachment() || is_page_template( 'templates/template-full-width.php' ) ) ? ' is-layout-constrained has-global-padding' : ''; ?>">
			<?php dynamic_sidebar( 'footer' ); ?>
		</footer>

		</div> <!-- .page-wrapper -->

		<?php wp_footer(); ?>
	</body>
</html>

