<?php get_header(); ?>


<section id="pagina-contato" class="pagina">

	<div class="container">
		<div class="row">
			<h2 class="col-sm-8 col-sm-offset-2">A humanidade precisa se comunicar</h2>
			<p class="col-sm-6 col-sm-offset-3">Fale de você, do seu projeto, da sua marca. Ficamos sempre empolgados em poder participar de um propósito humano.</p>
		</div>
		<div class="row">


			<form class="ani-02-in-out col-sm-10 col-md-8 col-md-offset-2 col-sm-offset-1 humano-form" action="<?php bloginfo('url') ?>/envia-email" method="POST" role="form">
				<div id="wrap-form" class="container-fluid">
					<div class="alerta ani-02-in-out">
						<div id="process">
							<i></i>Enviando...
						</div>
						<div id="success">
							<i></i>Sucesso! <span id="secundario">Seu e-mail foi enviado.</span>
							<button type="button" class="humano-bt locked"><span>Maravilha!</span></button>
						</div>
						<div id="error">
							<i></i>Opa, peraí. <span id="secundario">Saiu algo errado ao enviar seu <span class="nowrap">e-mail</span>.</span>
							<button type="button" class="humano-bt locked"><span>Tentar denovo</span></button>
						</div>
					</div>
					<div class="row">
						<div id="nome" class="ani-02-in-out form-group col-sm-5">
							<label for="nm" class="ani-02-in-out">
								<span class="ani-02-in-out">Nome</span>
								<input type="text" class="required" name="nm">
							</label>
						</div>
					
						<div id="email" class="ani-04-in-out form-group col-sm-7">
							<label for="ml" class="ani-02-in-out">
								<span class="ani-02-in-out">E-mail</span>
								<input type="text" class="required" name="ml">
							</label>
						</div>
					
						<div id="msg" class="ani-06-in-out form-group col-sm-12">
							<label for="mnsgm" class="ani-02-in-out">
								<span class="ani-02-in-out">Mensagem</span>
								<textarea class="required auto-resize" name="mnsgm"></textarea>
							</label>
						</div>
					
					</div>

					<input type="hidden" name="bjtv">

					<div class="row">
						<div class="col-sm-7">
						<!-- <input type="submit" value="Pedir um orçamento"> -->
							<button id="orcamento" type="submit" class="ani-06-in-out col-sm-6 humano-bt locked ani-04-in-out">
								<span>Pedir um orçamento</span>
							</button>
						</div>
						<div class="col-sm-5">
							<button id="oi" type="submit" class="ani-06-in-out col-sm-6 humano-bt locked ani-04-in-out">
								<span>Dizer um Oi</span>									
							</button>
						</div>
					</div>

				</div>
			</form>

		</div>
	</div>

	<div class="clearfix"></div>

</section>


<?php get_footer(); ?>