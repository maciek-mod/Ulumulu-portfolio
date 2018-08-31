<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Ulumulu
 * @since 1.0
 * @version 1.2
 */

?>
<header>
	<div class="menu_slide">
		<div class="menu_content">
			<div class="close_menu">
				<img src="<?php bloginfo('template_url'); ?>/img/icon_close_menu.svg" alt="Close menu">
			</div>
			<ul>
				<li><a href="<?php echo home_url(); ?>">Strona główna</a></li>
				<li><a href="<?php echo home_url(); ?>#project">Realizacje</a></li>
				<li><a href="<?php echo home_url(); ?>#competences">O mnie</a></li>
				<li><a href="<?php echo home_url(); ?>#form">Kontakt</a></li>
			</ul>

		</div>
	</div>
	<div class="container">
		<div class="menu">
			<h1><a href="<?php echo home_url(); ?>">
				<img src="<?php bloginfo('template_url'); ?>/img/ulumlu_logo.svg" alt="Ulumulu design" title="Ulumulu design"></a>
			</h1>
			<div class="menu_hamburger">
				<p>menu</p>
				<div id="hamburger">
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>
		</div>

	</div>

</header>
<section id="post">
	<div class="container">
		<div class="return">
			<a href="<?php echo home_url(); ?>">powrót</a>
		</div>
		<div class="text">
			<h2 class="title"><?php echo get_the_title(); ?></h2>
			<div class="box_text">
				<div class="data">
					<p class="head">Klient:</p>
					<p class="des">
						<?php the_field('client_1'); ?>
					</p>

					<p class="head">Data realizacji:</p>
					<p class="des">
						<?php the_field('date_project_1'); ?>
					</p>

					<p class="head">Zakres prac:</p>
					<p class="des">
						<?php the_field('work_desc_1'); ?>
					</p>
				</div>
				<div class="description">
					<p class="title_des">Realizacja</p>
					<p class="text_des"><?php echo get_the_content(); ?></p>

				</div>
			</div>
		</div>
	</div>
</section>

<section id="photo">
	<?php

	$image = get_field('foto_1');

	if( !empty($image) ): ?>

		<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

	<?php endif; ?>

	<?php
	$image2 = get_field('foto_2');

	if( !empty($image2) ): ?>

		<img src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>" />

	<?php endif; ?>
	<?php
	$image3 = get_field('foto_3');

	if( !empty($image3) ): ?>

		<img src="<?php echo $image3['url']; ?>" alt="<?php echo $image3['alt']; ?>" />

	<?php endif; ?>

	<?php
	$image4 = get_field('foto_4');

	if( !empty($image4) ): ?>

		<img src="<?php echo $image4['url']; ?>" alt="<?php echo $image4['alt']; ?>" />

	<?php endif; ?>

	<?php
	$image5 = get_field('foto_5');

	if( !empty($image5) ): ?>

		<img src="<?php echo $image5['url']; ?>" alt="<?php echo $image5['alt']; ?>" />

	<?php endif; ?>

	<?php
	$image6 = get_field('foto_6');

	if( !empty($image6) ): ?>

		<img src="<?php echo $image6['url']; ?>" alt="<?php echo $image6['alt']; ?>" />

	<?php endif; ?>

	<?php
	$image7 = get_field('foto_7');

	if( !empty($image7) ): ?>

		<img src="<?php echo $image7['url']; ?>" alt="<?php echo $image7['alt']; ?>" />

	<?php endif; ?>

	<?php
	$image8 = get_field('foto_8');

	if( !empty($image8) ): ?>

		<img src="<?php echo $image8['url']; ?>" alt="<?php echo $image8['alt']; ?>" />

	<?php endif; ?>

	<?php
	$image9= get_field('foto_9');

	if( !empty($image9) ): ?>

		<img src="<?php echo $image9['url']; ?>" alt="<?php echo $image9['alt']; ?>" />

	<?php endif; ?>

	<?php
	$image10 = get_field('foto_10');

	if( !empty($image10) ): ?>

		<img src="<?php echo $image10['url']; ?>" alt="<?php echo $image10['alt']; ?>" />

	<?php endif; ?>

	<?php
	$image11 = get_field('foto_11');

	if( !empty($image11) ): ?>

		<img src="<?php echo $image11['url']; ?>" alt="<?php echo $image11['alt']; ?>" />

	<?php endif; ?>

	<?php
	$image12 = get_field('foto_12');

	if( !empty($image12) ): ?>

		<img src="<?php echo $image12['url']; ?>" alt="<?php echo $image12['alt']; ?>" />

	<?php endif; ?>

	<?php
	$image13 = get_field('foto_13');

	if( !empty($image13) ): ?>

		<img src="<?php echo $image13['url']; ?>" alt="<?php echo $image13['alt']; ?>" />

	<?php endif; ?>

	<?php
	$image14 = get_field('foto_14');

	if( !empty($image14) ): ?>

		<img src="<?php echo $image14['url']; ?>" alt="<?php echo $image14['alt']; ?>" />

	<?php endif; ?>

	<?php
	$image15 = get_field('foto_15');

	if( !empty($image15) ): ?>

		<img src="<?php echo $image15['url']; ?>" alt="<?php echo $image15['alt']; ?>" />

	<?php endif; ?>

	<?php
	$image16 = get_field('foto_16');

	if( !empty($image16) ): ?>

		<img src="<?php echo $image16['url']; ?>" alt="<?php echo $image16['alt']; ?>" />

	<?php endif; ?>

	<?php
	$image17 = get_field('foto_17');

	if( !empty($image17) ): ?>

		<img src="<?php echo $image17['url']; ?>" alt="<?php echo $image17['alt']; ?>" />

	<?php endif; ?>

	<?php
	$image18 = get_field('foto_18');

	if( !empty($image18) ): ?>

		<img src="<?php echo $image18['url']; ?>" alt="<?php echo $image18['alt']; ?>" />

	<?php endif; ?>

	<?php
	$image19 = get_field('foto_19');

	if( !empty($image19) ): ?>

		<img src="<?php echo $image19['url']; ?>" alt="<?php echo $image19['alt']; ?>" />

	<?php endif; ?>

	<?php
	$image20 = get_field('foto_20');

	if( !empty($image20) ): ?>

		<img src="<?php echo $image20['url']; ?>" alt="<?php echo $image20['alt']; ?>" />

	<?php endif; ?>

</section>

<section id="isolation">
</section>

<section id="form" >
	<div class="container">
		<div class="text">
			<h2 class="title_section">Masz pytania?</h2>
			<p class="text_section">Chcesz podjąć ze mną współpracę? Napisz do mnie korzystając z poniższego formularza, lub wyślij wiadomość na adres <a href="mailto:kontakt@ulumulu.pl">kontakt@ulumulu.pl</a></p>
		</div>
		<?php echo do_shortcode( '[contact-form-7 id="57" title="Formularz 1"]' ); ?>
	</div>
</section>



<section id="also_check">
	<div class="container">
		<h2>Zobacz również</h2>
		<div class="also_flex">
			<?php
				$args = array(
					'post_type' => 'post',
					'posts_per_page' => 3,
				);
				$post_query = new WP_Query($args);
				if($post_query->have_posts() ) {
				  while($post_query->have_posts() ) {
					$post_query->the_post();
					?>
					<div class="box" data-sort="all <?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?>">
						<a href="<?php echo get_permalink( );?>">
							<?php echo get_the_post_thumbnail(); ?>
						</a>
					</div>
					<?php
				  }
				}
			?>
		</div>
	</div>
</section>
