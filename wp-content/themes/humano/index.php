<?php get_header(); ?>


<section id="pagina-home">

	<section id="intro" class="fadeOut">

		<div id="wrap-slogan" data-depth="0.1" class="layer">

			<div id="slogan" class="untouchable fadeIn animated">
				<img class="" src="<?php bloginfo('template_url') ?>/img/humano-logo-intro.png">
				<h2>De humanos para humanos</h2>
			</div>

			<div id="roll" data-depth="0.2" class="layer">

			</div>

			<div id="video-mask">

			</div>

		</div>

		<video data-depth="0.05" class="layer" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0" poster="<?php bloginfo('template_url') ?>/img/humano-poster-video-intro.jpg">
			<source src="<?php bloginfo('template_url') ?>/videos/intro.mp4" type="video/mp4">
			<source src="<?php bloginfo('template_url') ?>/videos/intro.webm" type="video/webm">
			<source src="<?php bloginfo('template_url') ?>/videos/intro.ogg" type="video/ogg">
			Sentimos muito, mas seu navegador não suporta vídeos em HTML5.
		</video>

	</section>

	<section id="projetos">

		<button id="seta-esq" class="layer seta esq ani-04-in-out" data-depth="0.1"></button>
		<button id="seta-dir" class="layer seta dir ani-04-in-out" data-depth="0.1"></button>

		<ul class="ani-02-in-out" style="background: #d8d8d8">
			<li class="layer ani-delay-02" data-depth="0.1" data-b="610000" data-img="humano-home-dogs" style="background: url(<?php bloginfo('template_url') ?>/img/humano-home-dogs.jpg) no-repeat center">
				<a href="<?php bloginfo('url') ?>/clientes/dog-savanna">
					<article class="layer" data-depth="0.15">
						<h2 class="ani-02-in-out" >Dog Savanna</h2>
						<p class="ani-04-in-out">Design Interativo | Branding</p>
						<span class="icon-mais ani-06-in-out">
							<span class="ani-02-in-out traco um"></span>
							<span class="ani-02-in-out traco dois"></span>
						</span>
					</article>
				</a>
			</li>
			<li class="layer ani-delay-02" data-depth="0.1" data-b="008bd0" data-img="humano-home-hi" style="background: url(<?php bloginfo('template_url') ?>/img/humano-home-hi.jpg) no-repeat center">
				<a href="<?php bloginfo('url') ?>/clientes/hi">
					<article class="layer" data-depth="0.15">
						<h2 class="ani-02-in-out">[hi]</h2>
						<p class="ani-04-in-out">Branding | Design Gráfico | Design Interativo | Ilustração</p>
						<span class="icon-mais ani-06-in-out">
							<span class="ani-02-in-out traco um"></span>
							<span class="ani-02-in-out traco dois"></span>
						</span>
					</article>
				</a>
			</li>
			<li class="layer ani-delay-02" data-depth="0.1" data-b="be1f24" data-img="humano-home-ceub" style="background: url(<?php bloginfo('template_url') ?>/img/humano-home-ceub-992.jpg) no-repeat center">
				<a href="<?php bloginfo('url') ?>/clientes/uniceub">
					<article class="layer" data-depth="0.15">
						<h2 class="ani-02-in-out">Fórum UniCEUB 45 Anos</h2>
						<p class="ani-04-in-out">Design Interativo</p>
						<span class="icon-mais ani-06-in-out">
							<span class="ani-02-in-out traco um"></span>
							<span class="ani-02-in-out traco dois"></span>
						</span>
					</article>
				</a>
			</li>
		</ul>

		<div id="contador" style="width: 48px;">
			<div id="marca" style="left: 5px; right: 37px;"></div>
		</div>

	</section>

</section>


<?php get_footer(); ?>