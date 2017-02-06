<!-- CÓDIGO HTML VEM AQUI -->


<?php if ( strpos( $_SERVER[ "REQUEST_URI" ], "frontend" ) ) : ?>

    <!-- 
        NÃO ESQUEÇA DE ADICIONAR UMA PÁGINA FRONTEND/"SUAPAGINA" NO PAINEL ADMIN 
        E DE ALTERAR OS PERMALINKS PARA "NOME DO POST"
    -->
    <?php $frontendUrl = "/frontend"; //variável usada nos urls dentro do ambiente de desenvolvimento frontend?>

<?php endif; ?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<!--[if lt IE 7]>
      <html 
        xmlns='http://www.w3.org/1999/xhtml' 
        xmlns:og='http://ogp.me/ns#' 
        class="no-js lt-ie9 lt-ie8 lt-ie7" 
        lang="pt-br">
<![endif]-->
<!--[if IE 7]>
    <html 
        xmlns='http://www.w3.org/1999/xhtml' 
        xmlns:og='http://ogp.me/ns#' 
        class="no-js lt-ie9 lt-ie8" 
        lang="pt-br">
<![endif]-->
<!--[if IE 8]>
    <html 
        xmlns='http://www.w3.org/1999/xhtml' 
        xmlns:og='http://ogp.me/ns#' 
        class="no-js lt-ie9" 
        lang="pt-br">
<![endif]-->
<!--[if gt IE 8]><!-->
<html
    xmlns='http://www.w3.org/1999/xhtml'
    xmlns:og='http://ogp.me/ns#'
    class="no-js"
    lang="pt-br">
<!--<![endif]-->

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title><?php echo ( $post->post_name != '' ) ? get_the_title() . " | " : ""; ?>Humano Studio</title>

        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <!--[if IE]><link rel="shortcut icon" href="<?php bloginfo('template_url') ?>/favicon.ico"><![endif]-->
        <link rel="icon" href="<?php bloginfo('template_url') ?>/favicon.ico">

        <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_url') ?>/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_url') ?>/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_url') ?>/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_url') ?>/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_url') ?>/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_url') ?>/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_url') ?>/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_url') ?>/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url') ?>/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="<?php bloginfo('template_url') ?>/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url') ?>/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('template_url') ?>/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url') ?>/favicon/favicon-16x16.png">
        <link rel="manifest" href="<?php bloginfo('template_url') ?>/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#f35e04">
        <meta name="msapplication-TileImage" content="/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#f35e04">


        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/bootstrap.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/animate.css">

        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/style.css">


        <!-- PUBLICAÇÃO EM REDES SOCIAIS -->
        <meta property='og:title' content='<?php echo get_the_title() ?>' />
        <meta property='og:description' content='Vemos no design o meio perfeito de usar a criatividade para inspirar as pessoas a serem melhores.' />
        <meta property='og:url' content='<?php bloginfo('url') ?>' />
        <meta property='og:image' content='<?php bloginfo('template_url') ?>/img/humano-logo-sociais.png'/>
        <meta property='og:type' content='website' />
        <meta property='og:site_name' content='Humano Studio' />

    </head>

    <body>
        <?php wp_path_to_js(); ?>

        <!--[if lt IE 8]>   

            <div class="browserupgrade fadeIn animated">

                <div class="alert fadeInUp animated">

                    <i class="icon icon-fire"></i>
                    <p><span>Já imaginou se durante a evolução humana nós não tivessemos usado as ferramentas certas?</span> Tire um tempinho pra <a href="http://browsehappy.com/">atualizar seu navegador</a>, é tão rápido quanto fazer fogo!</p>
                    <button type="button" class="close">×</button>

                </div>

            </div>

        <![endif]-->

        <?php //$fileN =  basename ( $_SERVER["SCRIPT_NAME"] ); ?>
        <?php $fileN2 = $_SERVER[ "REQUEST_URI" ] ?>
        <?php $fileN2 = str_replace("/ignite", '', $fileN2) ?>
        <?php $fileN2 = str_replace("/frontend", '', $fileN2) ?>
        <?php $fileN2 = explode('/', $fileN2) ?>
        <?php $fileN2 = $fileN2[1]; ?>

        <?php

        if ( $fileN2 == "" ) : 
        	$fileN2 = "index";
        endif;

        ?>

        <?php if ( $frontendUrl != "" ) : ?>

            <?php $tUrl = get_bloginfo("template_url"); ?>

            <?php require( "frontend/" . $fileN2 . '.php' ) ?>
            <?php die(); ?>

        <?php endif; ?>


        <div class="wrap-site">
        <header>

            <nav id="menu" class="ani-02-in-out fechado flutua">

                <div id="icon-menu">
                    <div id="slash" class="ani-04-in-out"></div>
                </div>

                <div>
                    <hgroup>
                        <a href="<?php bloginfo('url') ?>" class="ani-02-in-out">
                            <h1>Humano Studio</h1>
                            <h2>De humanos para humanos</h2>
                        </a>
                    </hgroup>

                    <ul class="ani-04-in-out">
                        <li><a class="humano-bt" href="<?php bloginfo('url') ?>/projetos"><span>Projetos</span></a></li><li><a class="humano-bt" href="<?php bloginfo('url') ?>/servicos"><span>Serviços</span></a></li><li><a class="humano-bt" href="<?php bloginfo('url') ?>/clientes"><span>Clientes</span></a></li><li><a class="humano-bt" href="<?php bloginfo('url') ?>/contato"><span>Contato</span></a></li>
                    </ul>
                </div>

            </nav>

        </header>