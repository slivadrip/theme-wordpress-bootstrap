<?php 
/*
Template Name: Páginas Gerais
*/
 ?>

 <?php get_header(); ?>


<main id="main">


			<div class="conteudo">
				<div class="container">
					<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<?php 
							// Se houver algum post
							if(have_posts()) :
								// Enquanto houver algum post, chame o post de determinada maneira
								while (have_posts()) : the_post();
						?>
							<h1><?php the_title(); ?></h1>
							<p><?php the_content(); ?></p>
						<?php 
						endwhile;
						else:
						 ?>
							<p>Nao tem nada ainda pra mostrar</p>
						<?php 
						endif;
						?>	
					</div>				

				</div>
			</div>

	</main>	

<?php get_footer(); ?>
