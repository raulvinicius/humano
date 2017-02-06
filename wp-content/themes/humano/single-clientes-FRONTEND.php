<?php get_header(); ?>

<section id="pagina-cliente" class="pagina <?php echo $post->post_name; ?>">

	<div id="header-cliente">
	<!-- <div id="header-cliente" style="background-image: url(<?php bloginfo('template_url') ?>/img/humano-cliente-hi-bg-header.jpg)"> -->
		<div class="container">
			<div id="aligner">
				<div class="row">
					<h2 id="nome-cliente"><?php the_title(); ?></h2>
					<ul id="servicos" class="col-sm-7">
						<li>Branding</li>
					</ul>
					<p class="col-sm-7">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, rem, harum. Dolor culpa laborum commodi, ullam architecto perferendis, alias eveniet delectus pariatur necessitatibus, blanditiis molestiae odit, vitae earum. Quaerat, minus?</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row">
			<ul id="projetos">

				<li id="branding" class="projeto">
					<article>
						<h2>Branding</h2>
						<figure id="header">
							<img class="full-w" src="<?php bloginfo('template_url') ?>/img/humano-cliente-hi-head-branding.jpg">
						</figure>

						<div id="body" class="container">
							<figure id="ilustra" class="col-sm-5">
								<img src="<?php bloginfo('template_url') ?>/img/humano-cliente-hi-img-branding.jpg">
							</figure>
							<div class="col-sm-6 col-sm-offset-1 col-xs-12 col-xs-offset-0">
								<h3>Uma marca aconchegante para abraçar</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, sapiente. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla, ipsum. Aqui eu falo sobre a atualização de marca e qual conceito guiou a alteração visual.</p>
							</div>
							<div class="clearfix"></div>
						</div>
					</article>
					<div class="clearfix"></div>
				</li>

				<li id="design-interativo" class="projeto">
					<article class="parallax">
						<h2>Design Interativo</h2>
						<figure id="header">
							<img id="bg" class="layer" data-depth="-0.2" src="<?php bloginfo('template_url') ?>/img/humano-cliente-hi-design-interativo-bg.jpg">
							<img id="desktop" class="layer" data-depth="0.1" src="<?php bloginfo('template_url') ?>/img/humano-cliente-hi-design-interativo-desktop.png">
							<img id="tablet" class="layer" data-depth="0.16" src="<?php bloginfo('template_url') ?>/img/humano-cliente-hi-design-interativo-tablet.png">
							<img id="mobile" class="layer" data-depth="0.25" src="<?php bloginfo('template_url') ?>/img/humano-cliente-hi-design-interativo-mobile.png">
						</figure>

						<div id="wrap-txt" class="col-md-3 col-md-offset-0 col-sm-10 col-sm-offset-1">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae vel eum quisquam eos, similique aut non! Sequi provident architecto possimus, minima soluta, perferendis illum est, tenetur itaque ipsam placeat aliquid!</p>
						</div>
					</article>
					<div class="clearfix"></div>
				</li>

				<li id="design-grafico" class="projeto">
					<article>
						<h2>Design Gráfico</h2>
						<figure id="header">
							<img src="<?php bloginfo('template_url') ?>/img/humano-cliente-hi-identidade-visual-bg.jpg">
						</figure>
						<div id="wrap-txt" class="col-md-3 col-sm-12">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe quas commodi deserunt placeat facilis aliquam rem non, quasi in perspiciatis.</p>
						</div>
					</article>
					<div class="clearfix"></div>
				</li>

				<li id="ilustracao" class="projeto">
					<article>
						<h2>Ilustração</h2>
						<div id="wrap-txt" class="col-md-5 col-sm-8">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur enim suscipit modi, quibusdam voluptates labore itaque necessitatibus voluptatum debitis at. Fugit perferendis repellendus, accusantium minus hic sapiente ratione totam rerum.</p>
						</div>

						<ul id="categorias">
							<li>
								<h3>Personalidades</h3>
								<p id="info-bloco">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla, numquam. </p>
								<figure>
									<ul id="ilustracoes">
										<li><img src="<?php bloginfo('template_url') ?>/img/humano-cliente-hi-ilustracao-abraham-lincoln.png" alt="Abraham Lincoln"></li>
										<li><img src="<?php bloginfo('template_url') ?>/img/humano-cliente-hi-ilustracao-madre-teresa.png" alt="Madre Teresa de Calcutá"></li>
										<li><img src="<?php bloginfo('template_url') ?>/img/humano-cliente-hi-ilustracao-mahatma-gandhi.png" alt="Mahatma Gandhi"></li>
										<li><img src="<?php bloginfo('template_url') ?>/img/humano-cliente-hi-ilustracao-martin-luther-king-jr.png" alt="Martin Lugther King Jr."></li>
									</ul>
								</figure>
							</li>

							<li>
								<h3>Personagens</h3>
								<p id="info-bloco">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, voluptas. </p>
								<figure>
									<ul id="ilustracoes">
										<li><img src="<?php bloginfo('template_url') ?>/img/humano-cliente-hi-ilustracao-personagem-01.png"></li>
										<li><img src="<?php bloginfo('template_url') ?>/img/humano-cliente-hi-ilustracao-personagem-02.png"></li>
										<li><img src="<?php bloginfo('template_url') ?>/img/humano-cliente-hi-ilustracao-personagem-03.png"></li>
										<li><img src="<?php bloginfo('template_url') ?>/img/humano-cliente-hi-ilustracao-personagem-04.png"></li>
									</ul>
								</figure>
							</li>

							<li>
								<h3>Objetos</h3>
								<p id="info-bloco">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, obcaecati. </p>
								<figure>
									<ul id="ilustracoes">
										<li><img src="<?php bloginfo('template_url') ?>/img/humano-cliente-hi-ilustracao-aviao.png"></li>
										<li><img src="<?php bloginfo('template_url') ?>/img/humano-cliente-hi-ilustracao-bussola.png"></li>
										<li><img src="<?php bloginfo('template_url') ?>/img/humano-cliente-hi-ilustracao-lanterna.png"></li>
										<li><img src="<?php bloginfo('template_url') ?>/img/humano-cliente-hi-ilustracao-mochila.png"></li>
										<li><img src="<?php bloginfo('template_url') ?>/img/humano-cliente-hi-ilustracao-relogio.png"></li>
									</ul>
								</figure>
							</li>

							<li>
								<h3>Paisagens</h3>
								<p id="info-bloco">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, rerum. </p>
								<figure>
									<ul id="ilustracoes">
										<li><img src="<?php bloginfo('template_url') ?>/img/humano-cliente-hi-ilustracao-paisagem-01.jpg"></li>
										<li><img src="<?php bloginfo('template_url') ?>/img/humano-cliente-hi-ilustracao-paisagem-02.jpg"></li>
									</ul>
								</figure>
							</li>
						</ul>
					</article>

					<div class="clearfix"></div>
				</li>

			</ul>
		</div>

	</div>

</section>

<?php 
	
	$chamada = "Gostou né!? Podemos criar um desse juntos.";
	$fsz = 80;
	$apoio = "E se ainda não for o momento pra você, fale do seu projeto pra gente, podemos ir debatendo idéias até lá.";
	$acao = "Falar do meu projeto";
	include 'rodape-contato.php'; 

?>


<?php get_footer(); ?>