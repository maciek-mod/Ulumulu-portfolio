<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>


	<header id="top_header">
		<div class="menu_slide">
			<div class="menu_content">
				<div class="close_menu">
					<img src="<?php bloginfo('template_url'); ?>/img/icon_close_menu.svg" alt="Close menu">
				</div>
				<ul>
					<li data-href="top_header">Strona główna</li>
					<li data-href="project">Realizacje</li>
					<li data-href="competences">O mnie</li>
					<li data-href="form">Kontakt</li>
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
			<div class="header_title">
				<h2><?php the_field('head_page' , 6); ?></h2>
				<p>Jeżeli chcesz podjąć ze mna współpracę, napisz na <a href="mailto:kontakt@ulumulu.pl">kontakt@ulumulu.pl</a> lub skorzystaj z formularza kontaktowego <img class="scroll" src="<?php bloginfo('template_url'); ?>/img/icon_contact.svg" alt="Kontakt"></p>
			</div>
			<div class="btn_sort_project">
				<div class="hover_sort">

				</div>
				<div class="nav_sort actived first_nav" data-sort="all">
					<p>01</p>
					<p>Wszystkie realizacje</p>
				</div>
				<div class="nav_sort" data-sort="WWW">
					<p>02</p>
					<p>Strony www</p>
				</div>
				<div class="nav_sort" data-sort="Sklepy">
					<p>03</p>
					<p>Sklepy internetowe</p>
				</div>
				<div class="nav_sort" data-sort="Grafika">
					<p>04</p>
					<p>Grafika reklamowa</p>
				</div>
				<div class="nav_sort" data-sort="Inne">
					<p>05</p>
					<p>Inne</p>
				</div>
				<div class="mobile_flex">
					<div class="mobile">
						<div class="no_touch mobile_div">
							<div class="mobile_item_catch mobile_item active_sort">

							</div>
							<div class="mobile_item mobile_item_show active_sort" data-sort="all">
								<p>01</p>
								<p>Wszystkie realizacje</p>
							</div>
							<div class="slide">
								<div class="mobile_item" data-sort="WWW">
									<p>02</p>
									<p>Strony www</p>
								</div>
								<div class="mobile_item" data-sort="Sklepy">
									<p>03</p>
									<p>Sklepy internetowe</p>
								</div>
								<div class="mobile_item" data-sort="Grafika">
									<p>04</p>
									<p>Grafika reklamowa</p>
								</div>
								<div class="mobile_item" data-sort="Inne">
									<p>05</p>
									<p>Inne</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

<section id="project">
	<div class="row">
		<div class="galery">
			<?php
			    $args = array(
			        'post_type' => 'post',
					'posts_per_page' => -1
				);
			    $post_query = new WP_Query($args);
				$i = 0;
				if($post_query->have_posts() ) {
				  while($post_query->have_posts() ) {
				    $post_query->the_post();
				    ?>
					<div class="galery_box" data-sort="all <?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?>">
						<a href="<?php echo get_permalink( );?>">

							<?php echo get_the_post_thumbnail(); ?>
						</a>
						<?php
						$i++;
					   	if ($i == 6) {
							$i = 0;
							?>
							</div><div class="row">
							<?php
						}
						?>
					</div>
				    <?php

				  }
				}
			?>
		</div>
	</div>
	<div class="btn_load_more">
		<p>Więcej realizacji</p>
	</div>
</section>

<section id="competences" >
	<div class="container">
		<div class="title">
			<h2><?php the_field('head_competence' , 6); ?></h2>
			<?php the_field('competences_text' , 6); ?>
		</div>
		<div class="project_implementation">
			<p><?php the_field('head_competence_2' , 6); ?></p>
			<div class="types_of_projects">
				<div class="project_flex">
					<?php
					$image = get_field('competences_icon_1' , 6);
					if( !empty($image) ): ?>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					<?php endif; ?>
					<div class="types">
						<p><?php the_field('competences_1' , 6); ?></p>
						<?php the_field('competences_list_1' , 6); ?>
					</div>
				</div>
				<div class="project_flex">
					<?php
					$image = get_field('competences_icon_2' , 6);
					if( !empty($image) ): ?>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					<?php endif; ?>
					<div class="types">
						<p><?php the_field('competences_2' , 6); ?></p>
						<?php the_field('competences_list_2' , 6); ?>
					</div>
				</div>
				<?php if( get_field('competences_true_false_3' , 6) ): ?>
					<div class="project_flex">
						<?php
						$image = get_field('competences_icon_3' , 6);
						if( !empty($image) ): ?>
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						<?php endif; ?>
						<div class="types">
							<p><?php the_field('competences_3' , 6); ?></p>
							<?php the_field('competences_list_3' , 6); ?>
						</div>
					</div>
				<?php endif; ?>
				<?php if( get_field('competences_true_false_4' , 6) ): ?>
					<div class="project_flex">
						<?php
						$image = get_field('competences_icon_4' , 6);
						if( !empty($image) ): ?>
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						<?php endif; ?>
						<div class="types">
							<p><?php the_field('competences_4' , 6); ?></p>
							<?php the_field('competences_list_4' , 6); ?>
						</div>
					</div>
				<?php endif; ?>
				<?php if( get_field('competences_true_false_5' , 6) ): ?>
					<div class="project_flex">
						<?php
						$image = get_field('competences_icon_5' , 6);
						if( !empty($image) ): ?>
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						<?php endif; ?>
						<div class="types">
							<p><?php the_field('competences_5' , 6); ?></p>
							<?php the_field('competences_list_5' , 6); ?>
						</div>
					</div>
				<?php endif; ?>
				<?php if( get_field('competences_true_false_6' , 6) ): ?>
					<div class="project_flex">
						<?php
						$image = get_field('competences_icon_6' , 6);
						if( !empty($image) ): ?>
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						<?php endif; ?>
						<div class="types">
							<p><?php the_field('competences_6' , 6); ?></p>
							<?php the_field('competences_list_6' , 6); ?>
						</div>
					</div>
				<?php endif; ?>
				<?php if( get_field('competences_true_false_7' , 6) ): ?>
					<div class="project_flex">
						<?php
						$image = get_field('competences_icon_7' , 6);
						if( !empty($image) ): ?>
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						<?php endif; ?>
						<div class="types">
							<p><?php the_field('competences_7' , 6); ?></p>
							<?php the_field('competences_list_7' , 6); ?>
						</div>
					</div>
				<?php endif; ?>
				<?php if( get_field('competences_true_false_8' , 6) ): ?>
					<div class="project_flex">
						<?php
						$image = get_field('competences_icon_8' , 6);
						if( !empty($image) ): ?>
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						<?php endif; ?>
						<div class="types">
							<p><?php the_field('competences_8' , 6); ?></p>
							<?php the_field('competences_list_8' , 6); ?>
						</div>
					</div>
				<?php endif; ?>
				<?php if( get_field('competences_true_false_9' , 6) ): ?>
					<div class="project_flex">
						<?php
						$image = get_field('competences_icon_9' , 6);
						if( !empty($image) ): ?>
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						<?php endif; ?>
						<div class="types">
							<p><?php the_field('competences_9' , 6); ?></p>
							<?php the_field('competences_list_9' , 6); ?>
						</div>
					</div>
				<?php endif; ?>
				<?php if( get_field('competences_true_false_10' , 6) ): ?>
					<div class="project_flex">
						<?php
						$image = get_field('competences_icon_10' , 6);
						if( !empty($image) ): ?>
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						<?php endif; ?>
						<div class="types">
							<p><?php the_field('competences_10' , 6); ?></p>
							<?php the_field('competences_list_10' , 6); ?>
						</div>
					</div>
				<?php endif; ?>
			</div>
		</div>
		<p class="message">Chciałbys zrealizować inny projekt? <span class="scroll">Napisz do mnie</span>, chętnie podejmuje się nowych wyzwań.</p>
	</div>

</section>

<section id="reviews_section" >
	<div class="container">
		<div class="reviews_box">
			<div class="title">
				<h2>Co sądzą o mnie moi klienci?</h2>
			</div>
			<div class="reviews">

				<div class="prev_slide">
					<img src="<?php bloginfo('template_url'); ?>/img/arrow_slide.svg" alt="poprzednia opinia">
				</div>
				<div class="next_slide">
					<img src="<?php bloginfo('template_url'); ?>/img/arrow_slide.svg" alt="następna opinia">
				</div>

				<div class="reviews-carousel owl-carousel owl-theme">

					<?php
						$args = array(
							'post_type' => 'reviews',
						);
						$post_query = new WP_Query($args);
						if($post_query->have_posts() ) {
						  while($post_query->have_posts() ) {
							$post_query->the_post();
							?>
							<div class="box item">
								<p class="name">
									<?php the_title(); ?>
								</p>
								<div class="img">
									<div class="cut">
										<?php echo get_the_post_thumbnail(); ?>
									</div>
								</div>
								<div class="contents">
									<p class="text">

										<?php echo get_the_content(); ?>

									</p>
								</div>
							</div>
							<?php
						  }
						}
					?>

				</div>
			</div>
		</div>
	</div>
</section>

<section id="form" >
	<div class="container">
		<div class="text">
			<h2 class="title_section"><?php the_field('head_form' , 6); ?></h2>
			<p class="text_section"><?php the_field('txt_form' , 6); ?></p>

		</div>
		<?php echo do_shortcode( '[contact-form-7 id="57" title="Formularz 1"]' ); ?>
	</div>
</section>

<?php get_footer();
