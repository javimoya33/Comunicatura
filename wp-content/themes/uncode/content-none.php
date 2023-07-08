<?php
/**
 * Template part for displaying a message that posts cannot be found.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package uncode
 */

?>

<div class="row-container">
	<section class="no-results not-found row row-parent limit-width no-top-padding no-bottom-padding no-h-padding">
		<div class="page-header">
			<h1 class="post-title"><?php esc_html_e( 'No se ha encontrado resultados', 'uncode' ); ?></h1>
		</div><!-- .page-header -->

		<div class="page-content">
			<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

				<p><?php printf( wp_kses( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'uncode' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

			<?php elseif ( is_search() ) : ?>

				<p><?php esc_html_e( 'Lo siento, pero nada coincide con los términos de búsqueda. Vuelva a intentarlo con palabras diferentes.', 'uncode' ); ?></p>
				<?php get_search_form(); ?>

			<?php else : ?>

				<p><?php esc_html_e( 'Parece que no podemos encontrar lo que busca. Quizás la búsqueda pueda ayudar.', 'uncode' ); ?></p>
				<?php get_search_form(); ?>

			<?php endif; ?>
		</div><!-- .page-content -->
	</section><!-- .no-results -->
</div>