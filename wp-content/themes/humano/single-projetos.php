<?php get_header(); ?>

<?php 

$capa = get_field('capa');
$capa = wp_get_attachment_image_src($capa, 'full');
$cliente = get_field('cliente');
$cliente = $idCliente = $cliente[0]->ID;
$cliente = get_the_title($cliente);
$cor = get_field('cor', $idCliente);
$objField = get_field_object('servico_principal');
$slugServico = get_field('servico_principal');
$servico = $objField['choices'][$slugServico];
$chamada = get_field('chamada');
$texto = get_field('texto');
$url = get_field('url');
$ilustrativa = get_field('ilustrativa');
$ilustrativa = wp_get_attachment_image_src($ilustrativa, 'full');
$galeria = get_field('galeria');

?>

<section id="pagina-projeto" class="pagina <?php echo $slugServico ?>">
	<section id="projeto">
		<div id="wrap-head-projeto" style="background-image: url(<?php echo $capa[0] ?>);">
			<div id="msk-head" style="background-image: url(<?php bloginfo('template_url') ?>/img/humano-msk-head-projeto.png);">
				<div id="aligner">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<h4><?php echo $cliente ?></h4>
								<h5><?php echo $servico ?></h5>
								<h2 class="col-sm-10"><?php echo $chamada ?></h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="body-projeto">
			<div class="container">
				<div class="row">

					<?php if ($ilustrativa != NULL): ?>

					<div id="texto" class="col-sm-5">
						<p><?php the_field('texto'); ?></p>
					</div>
					<div class="col-sm-7">
						<figure id="ilustra">
							<img src="<?php echo $ilustrativa[0] ?>">
						</figure>
					</div>

					<?php else: ?>
						

						<div id="texto" class="col-sm-12" style="text-align: center">
							<p><?php the_field('texto'); ?></p>
						</div>

						<?php endif ?>

				</div>
			</div>
			<div class="wrapper" style="background: #ddd">
				<div class="container">
					<div class="row">

						<div class="col-sm-12">
							<figure>
								<ul id="galeria">
									<?php


									if ($galeria[0]['imagem']) :

										for ($i=0; $i < count($galeria); $i++) : 

											$imagem = $galeria[$i]['imagem'];
											$imagem = wp_get_attachment_image_src($imagem, 'full');

											?>
												
											<li>
												<img src="<?php echo $imagem[0] ?>">
											</li>

											<?php

										endfor;

									else :

										for ($i=0; $i < count($galeria); $i++) : 

											?>
												
											<li id="categoria" class="col-sm-12">
												<h2><?php echo $galeria[$i]['categoria'] ?></h2>
												<ul>
													<?php

													for ($j=0; $j < count($galeria[$i]['imagens']); $j++) :

														$imagem = $galeria[$i]['imagens'][$j]['sub_imagem'];
														$imagem = wp_get_attachment_image_src($imagem, 'full');

														?>
														<li>
															<img src="<?php echo $imagem[0] ?>">
														</li>
														<?php

													endfor;

													?>
													<div class="clearfix"></div>
												</ul>
											</li>

											<?php

										endfor;

									endif;

									?>
									<div class="clearfix"></div>
								</ul>
							</figure>
						</div>
					</div>
				</div>
			</div>

			<?php if ($url != ''): ?>

				<a id="url-cliente" class="humano-bt" href="<?php echo $url ?>" style="background: #<?php echo $cor ?>" target="_blank">
					<span>
						Visitar o site
					</span>
				</a>

			<?php endif ?>

			<div id="separador"></div>
	</section>

</section>

<?php include 'rodape-contato.php'; ?>


<?php get_footer(); ?>