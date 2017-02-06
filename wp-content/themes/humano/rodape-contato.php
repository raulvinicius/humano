<section id="contato" class="rodape-contato">

	<form class="ani-02-in-out humano-form" action="<?php bloginfo('url') ?>/envia-email" method="POST" role="form">
		<div id="wrap-head" class="container-fluid">
			<div class="container">
				<div id="head" class="row">
					<legend class="col-md-8" <?php echo ($fszRodape != NULL) ? "style='font-size: " . $fszRodape . "px; line-height: 1.1;'" : "" ?>><?php echo ($chamadaRodape != NULL) ? $chamadaRodape : "Solicite um orçamento" ; ?></legend>
					<p class="col-md-8"><?php echo ($apoioRodape != NULL) ? $apoioRodape : "Ou diga um \"Oi\", pode ser o começo de uma grande criatimizade (é, fazemos essas piadinhas constantemente)."; ?></p>
				</div>
			</div>
		</div>
		<div id="wrap-form" class="container-fluid">
			<div class="container">
				<div class="alerta ani-02-in-out col-md-8 col-sm-12">
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
					<div id="nome" class="ani-02-in-out form-group col-md-4 col-sm-6">
						<label for="nm" class="ani-02-in-out">
							<span class="ani-02-in-out">Nome</span>
							<input type="text" class="required" id="nm" name="nm">
						</label>
					</div>
				
					<div id="email" class="ani-04-in-out form-group col-md-4 col-sm-6">
						<label for="ml" class="ani-02-in-out">
							<span class="ani-02-in-out">E-mail</span>
							<input type="text" class="required" id="ml" name="ml">
						</label>
					</div>
				
					<div id="msg" class="ani-06-in-out form-group col-md-8 col-sm-12">
						<label for="mnsgm" class="ani-02-in-out">
							<span class="ani-02-in-out">Mensagem</span>
							<textarea type="text" class="required" id="mnsgm" name="mnsgm"></textarea>
						</label>
					</div>
				
				</div>

				<input type="hidden" name="bjtv">

				<div id="wrap-buttons" class="row">
					<div class="col-sm-8 alpha omega">
						<button id="orcamento" type="submit" class="ani-06-in-out humano-bt locked ani-04-in-out">
							<span>Pedir um orçamento</span>
						</button>
						<button id="oi" type="submit" class="ani-06-in-out humano-bt locked ani-04-in-out">
							<span>Dizer um Oi</span>									
						</button>
					</div>
				</div>

			</div>
		</div>
	</form>
	
</section>
