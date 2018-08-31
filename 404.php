<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div id="page_404" >
	<div class="flex_404">
		<div class="content_404">
			<p>UPS! NIE UDAŁO SIĘ ZNALEŹĆ POŻĄDANEJ STRONY.</p>
			<a href="<?php echo home_url(); ?>">Powrót do strony głównej</a>
		</div>
	</div>
</div>
