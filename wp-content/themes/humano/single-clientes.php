<?php get_header(); ?>

<?php 

$servicos = get_field('servicos', $post->ID);
$case = get_field('case', $post->ID);

?>

<section id="pagina-cliente" class="pagina <?php echo $post->post_name; ?>">
	<div id="header-cliente">
		<div class="container">
			<div id="aligner">
				<div class="row">
					<h2 id="nome-cliente"><?php the_title(); ?></h2>
					<ul id="servicos" class="col-sm-7">
						<?php 
						for ($i=0; $i < count($servicos); $i++) :
							echo '<li>' . $servicos[$i] . (($i < count($servicos) - 1) ? ' | ' : '' ) . '</li>';
						endfor;
						?>

					</ul>
					<p class="col-sm-7"><?php echo $case ?></p>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row">
			<ul id="projetos">

<?php 

	$mQuery = array(
		'key' => 'cliente',
		'value' => '"' . get_the_ID() . '"',
		'compare' => 'LIKE'
	);

    $loop = get_post_by_type('projetos', 'DESC', -1, NULL, $mQuery);


	while ( $loop->have_posts() ) :
	
	    $loop->the_post();

		$servico = get_field('servico_principal');

		if ($servico == 'branding') :

			$capa = get_field('capa');
			$capa = wp_get_attachment_image_src($capa, 'full');
			$ilustrativa = get_field('ilustrativa');
			$ilustrativa = wp_get_attachment_image_src($ilustrativa, 'full');
			$chamada = get_field('chamada');
			$resumo = get_field('resumo');


			?>

			<li id="branding" class="projeto">
				<article>
					<h2>Branding</h2>
					<figure id="header">
						<img class="full-w" src="<?php echo $capa[0] ?>">
					</figure>

					<div id="body" class="container">
						<figure id="ilustra" class="col-sm-5">
							<img src="<?php echo $ilustrativa[0] ?>">
						</figure>
						<div class="col-sm-6 col-sm-offset-1 col-xs-12 col-xs-offset-0">
							<h3><?php echo $chamada ?></h3>
							<p><?php echo $resumo ?></p>
						</div>
						<div class="clearfix"></div>
					</div>
				</article>
				<div class="clearfix"></div>
			</li>

			<?php 

		elseif ($servico == 'identidade-visual') :

			$capa = get_field('capa');
			$capa = wp_get_attachment_image_src($capa, 'full');
			$resumo = get_field('resumo');

			?>

			<li id="design-grafico" class="projeto">
				<article>
					<h2>Identidade Visual</h2>
					<figure id="header">
						<img src="<?php echo $capa[0] ?>">
					</figure>
					<div id="wrap-txt" class="col-md-3 col-sm-12">
						<p><?php echo $resumo ?></p>
					</div>
				</article>
				<div class="clearfix"></div>
			</li>


			<?php

		elseif ($servico == 'design-grafico') :

			$capa = get_field('capa');
			$capa = wp_get_attachment_image_src($capa, 'full');
			$resumo = get_field('resumo');

			?>

			<li id="design-grafico" class="projeto">
				<article>
					<h2>Design Gráfico</h2>
					<figure id="header">
						<img src="<?php echo $capa[0] ?>">
					</figure>
					<div id="wrap-txt" class="col-md-3 col-sm-12">
						<p><?php echo $resumo ?></p>
					</div>
				</article>
				<div class="clearfix"></div>
			</li>


			<?php

		elseif ($servico == 'design-interativo') :

			$dispositivos = get_field('dispositivos');
			$fundo = $dispositivos[0]['fundo'];
			$fundo = wp_get_attachment_image_src($fundo, 'full');
			$desktop = $dispositivos[0]['desktop'];
			$desktop = wp_get_attachment_image_src($desktop, 'full');
			$tablet = $dispositivos[0]['tablet'];
			$tablet = wp_get_attachment_image_src($tablet, 'full');
			$mobile = $dispositivos[0]['mobile'];
			$mobile = wp_get_attachment_image_src($mobile, 'full');

			$resumo = get_field('resumo');

			?>

			<li id="design-interativo" class="projeto">
				<article class="parallax">
					<h2>Design Interativo</h2>
					<figure id="header">
						<img id="bg" class="layer" data-depth="-0.2" src="<?php echo $fundo[0] ?>">
						<img id="desktop" class="layer" data-depth="0.1" src="<?php echo $desktop[0] ?>">
						<img id="tablet" class="layer" data-depth="0.16" src="<?php echo $tablet[0] ?>">
						<img id="mobile" class="layer" data-depth="0.25" src="<?php echo $mobile[0] ?>">
					</figure>

					<div id="wrap-txt" class="col-md-3 col-md-offset-0 col-sm-10 col-sm-offset-1">
						<p><?php echo $resumo ?></p>
					</div>
				</article>
				<div class="clearfix"></div>
			</li>

			<?php 

		elseif ($servico == 'ilustracao') :

			$galeria = get_field('galeria');
			$resumo = get_field('resumo');

			?>


			<li id="ilustracao" class="projeto">
				<article>
					<h2>Ilustração</h2>
					<div id="wrap-txt" class="col-md-5 col-sm-8">
						<p><?php echo $resumo ?></p>
					</div>

					<ul id="categorias">

						<?php 
						for ($i=0; $i < count($galeria); $i++) :
							?>							

							<li>
								<h3><?php echo $galeria[$i]['categoria'] ?></h3>
								<p id="info-bloco"><?php echo $galeria[$i]['comentario'] ?></p>
								<figure>
									<ul id="ilustracoes">

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

									</ul>
								</figure>
							</li>

							<?php
						endfor;
						?>

					</ul>
				</article>

				<div class="clearfix"></div>
			</li> 

			<?php 

		endif;

	endwhile;

	wp_reset_postdata();

?>

			</ul>
		</div>

	</div>

</section>

<?php 
	
	$chamadaRodape = "Gostou né!? Podemos criar um desse juntos.";
	$fszRodape = 80;
	$apoioRodape = "E se ainda não for o momento pra você, fale do seu projeto pra gente, podemos ir debatendo idéias até lá.";
	$acaoRodape = "Falar do meu projeto";
	include 'rodape-contato.php'; 

?>


<?php get_footer(); ?>