<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Viraltop
 */

get_header(); ?>

	<section class="container contenido">
		<div class="row blogmt">
			<?php


			while(have_posts()): the_post(); ?>

				<div class="col-sm-6 col-md-4 entrada">
					<a href="<?php the_permalink(); ?>">
						<?php
						the_post_thumbnail('entradas',array('class'=>'img-responsive'));
						?>
					</a>

					<?php
					$categories_list = get_the_category_list( esc_html__( ', ', 'viraltop' ) );
					?>
					<div class="list-categories">
						<?php echo $categories_list; ?>
					</div>

					<div class="contenido-entrada">
						<a href="<?php the_permalink(); ?>"><?php the_title('<h3>','</h3>') ?></a>
						<p>
							Escrito el: <span><?php the_time(get_option('date_format')); ?></span>
						</p>
						<p>
							Por: <span><?php the_author(); ?></span>
						</p>

							<a href="<?php the_permalink(); ?>" class="btn btn-success">Leer más</a>

					</div>

				</div>


			<?php endwhile; ?>



			<!--		<div class="nav-previous alignleft">--><?php //next_posts_link( 'Anteriores Post' ); ?><!--</div>-->
			<!--		<div class="nav-next alignright">--><?php //previous_posts_link( 'Nuevos Post' ); ?><!--</div>-->


		</div>

		<div class="pagination">
			<?php echo paginate_links( $args ); ?>
		</div>
	</section>

<?php

get_footer();
