<?php get_header(); ?>


<section id="pagina-projetos" class="pagina">


	<section id="projetos">

		<div class="container-fluid">
			<div class="row">
				<ul id="lista-projetos">

					<?php 

					$loop = get_post_by_type('projetos', 'DESC');
					while ( $loop->have_posts() ) :
					
					    $loop->the_post();

						$objServico = get_field_object('servico_principal');
						$servico = get_field('servico_principal');
						$servico = $objServico['choices'][$servico];
						$miniCapa = get_field('mini_capa');
						$miniCapa = wp_get_attachment_image_src($miniCapa, 'full');

						?>

						<li class="col-md-3 col-sm-6">
							<a href="<?php the_permalink(); ?>">
								<article>
									<figure>
										<img src="<?php echo $miniCapa[0] ?>">
									</figure>
									<div id="txt" class="ani-02-in-out">
										<div id="aligner">
											<h2 class="ani-02-in-out"><?php the_title() ?></h2>
											<h3 class="ani-04-in-out"><?php echo $servico ?></h3>
										</div>
									</div>
								</article>
							</a>
						</li>

						<?php
					
					endwhile;

					?>
					
					<div class="clearfix"></div>

				</ul>
			</div>
		</div>
		
	</section>

	<?php include 'rodape-contato.php'; ?>

</section>


<?php get_footer(); ?>