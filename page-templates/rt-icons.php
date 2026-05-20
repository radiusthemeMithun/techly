<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
/**
 * Template Name: RT Icons
 *
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/
 *
 * @package techly
 */

get_header(); ?>
	<div class="container">
		<div class="row pt-50 pb-50 d-flex gap-15">
			<?php
			// phpcs:disable WordPress.Security.EscapeOutput.OutputNotEscaped
			echo techly_get_svg( 'search' );
			echo techly_get_svg( 'facebook' );
			echo techly_get_svg( 'twitter' );
			echo techly_get_svg( 'linkedin' );
			echo techly_get_svg( 'instagram' );
			echo techly_get_svg( 'pinterest' );
			echo techly_get_svg( 'tiktok' );
			echo techly_get_svg( 'youtube' );
			echo techly_get_svg( 'snapchat' );
			echo techly_get_svg( 'whatsapp' );
			echo techly_get_svg( 'reddit' );
			// phpcs:enable WordPress.Security.EscapeOutput.OutputNotEscaped
			?>
		</div>
	</div>
<?php
get_footer();
