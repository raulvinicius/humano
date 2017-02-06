<?php

	$nome = $_POST['nm'];
	$nick = explode( " ", $nome, 2 );
	$nick = $nick[0];
	$objetivo = $_POST['bjtv'];
	$email = $_POST['ml'];
	$mensagem = $_POST['mnsgm'];

	$url = get_bloginfo('url');
	$tUrl = get_bloginfo('template_url');

	$nomeEmpresa = "Humano Studio";
	$emailEmpresa = "oi@humanostud.io";

	$oi = ($objetivo == 'oi') ? "<h1 style='font-size: 30px; color: #f35a04; font-weight: lighter;'>Oi Humanos!</h1>" : "";

	$msgParaAdmin ="
	<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
	<div style='width: 100%; b: #fffbce; padding: 50px 0;'>
		<table style='background: white; width: 460px; border-radius: 4px; margin: 0 auto; border: 15px solid #f35a04; border-spacing: 0'>
			<tr style='background: #f35a04; margin: 0; padding: 0'>
				<td  style='font-family:Arial, sans; height: 110px; text-align: center;'>
					<img src='$tUrl/img/humano-logo-home.png' style='margin: 20px 0 30px'>
				</td>
			</tr>
			<tr>
				<td  style='font-family:Arial, sans; padding: 0 15px 35px'>
					<div style='width: 90%; padding: 1% 5%; margin-top: 20px'>
						$oi
						<p style='border-bottom: 1px dotted #ccc; padding: 10px 0 20px'><b style='color: #ccc'><span style='width: 100px; display: inline-block'>Nome:</span> </b>$nome</p>
						<p style='border-bottom: 1px dotted #ccc; padding: 10px 0 20px'><b style='color: #ccc'><span style='width: 100px; display: inline-block'>E-mail:</span> </b>$email</p>
						<p style='border-bottom: 1px; padding: 10px 0'><b style='color: #ccc'><span style='width: 100px; display: block; margin-bottom: 20px;'>Mensagem:</span> </b>$mensagem</p>
					</div>
				</td>
			</tr>
		</table>
	</div>
	";


	$msgParaUsuario  = "
	<!DOCTYPE html PUBLIC \'-//W3C//DTD XHTML 1.0 Strict//EN\' \'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\'>
	<div style='width: 100%; padding: 50px 0'>
		<table style='background: white; width: 460px; border-radius: 4px; margin: 0 auto; border: 5px solid #f35a04; border-bottom-width: 20px; border-left-width: 0; border-right-width: 0; border-spacing: 0'>
			<tr style='background: #f35a04; margin: 0; padding: 0'>
				<td  style='font-family:Arial, sans; height: 110px; text-align: center;'>
					<img src='$tUrl/img/humano-logo-home.png' style='margin: 20px 0 30px'>
				</td>
			</tr>
			<tr>
				<td  style='font-family:Arial, sans; padding: 0 15px 15px'>
					<div style='width: 90%; padding: 1% 5%; margin-top: 20px'>
						<p style='font-size:20px; margin-bottom: 10px; color: #666; line-height: 24px'><strong style='color: #f35a04; font-size: 24px;'>Oi <b>$nick</b>!</strong><br/><br/>
							Já recebemos seu e-mail e ficamos muito felizes pelo seu contato. Responderemos o mais breve poss&iacute;vel.<br>
							<br>
							Grande abra&ccedil;o!<br>
						</p>
						<p style='margin-top: 50px; font-style: italic; color:#999; font-size:11px; font-family: Arial'>Observa&ccedil;&atilde;o: N&atilde;o &eacute; necess&aacute;rio responder este e-mail.</p>
					</div>
				</td>
			</tr>
		</table>
	</div>
	";

	$oiParaUsuario  = "
	<!DOCTYPE html PUBLIC \'-//W3C//DTD XHTML 1.0 Strict//EN\' \'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\'>
	<div style='width: 100%; padding: 50px 0'>
		<table style='background: white; width: 460px; border-radius: 4px; margin: 0 auto; border: 5px solid #f35a04; border-bottom-width: 20px; border-left-width: 0; border-right-width: 0; border-spacing: 0'>
			<tr style='background: #f35a04; margin: 0; padding: 0'>
				<td  style='font-family:Arial, sans; height: 110px; text-align: center;'>
					<img src='$tUrl/img/humano-logo-home.png' style='margin: 20px 0 30px'>
				</td>
			</tr>
			<tr>
				<td  style='font-family:Arial, sans; padding: 0 15px 15px'>
					<div style='width: 90%; padding: 1% 5%; margin-top: 30px'>
						<p style='font-size:20px; margin-bottom: 10px; color: #666; line-height: 24px'><span style='color: #f35a04; font-size: 34px;'>Oi $nick!</span><br/><br/>
							Primeiramente, obrigado pelo contato, ficamos muito felizes. <br>
							<br>
							Responderemos seu e-mail logo mais e esperamos poder iniciar uma conversa criativamente produtiva.<br>
							<br>
							Paz!<br>
						</p>
						<p style='margin-top: 50px; font-style: italic; color:#999; font-size:11px; font-family: Arial'>Observa&ccedil;&atilde;o: N&atilde;o &eacute; necess&aacute;rio responder este e-mail.</p>
					</div>
				</td>
			</tr>
		</table>
	</div>
	";

	$assunto = "Confirmação de Contato";

	if($objetivo == 'oi')
	{
		$msgParaUsuario = $oiParaUsuario;
		$assunto = "Oi humano!";
	}

	$headerParaUsuario = "MIME-Version: 1.1\r\n";
	$headerParaUsuario .= "Content-type: text/html; charset=iso-8859-1\r\n";
	$headerParaUsuario .= "From: $emailEmpresa <$nomeEmpresa>\r\n"; // remetente
	$headerParaUsuario .= "Return-Path: $emailEmpresa\r\n"; // return-path
	
	$headerParaEmpresa = "MIME-Version: 1.0\r\n";
	$headerParaEmpresa .= "Content-type: text/html; charset=iso-8859-1\r\n";
	$headerParaEmpresa .="From: $email <$nome>\n";
	$headerParaEmpresa .= "Return-Path: $email\r\n"; // return-path


	// if($_SERVER['HTTP_HOST'] != "localhost")
	// {
		mail($emailEmpresa,utf8_decode("Contato pelo site"),utf8_decode($msgParaAdmin),$headerParaEmpresa, '-f'.$emailEmpresa) or die("erro");
		// {
		// 	print_r(error_get_last());
		// };
		mail($email,utf8_decode($assunto),utf8_decode($msgParaUsuario),$headerParaUsuario, '-f'.$email) or die("erro");
	// }

	echo "sucesso";