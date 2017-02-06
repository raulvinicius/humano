<?php 

function codex_custom_init() {
	$labelsProjetos = array(
		'name' => _x('Projetos', 'nome plural do tipo de post'),
		'singular_name' => _x('Projeto', 'nome singular do tipo de post'),
		'add_new' => _x('Adicionar Projeto', 'projetos'),
		'add_new_item' => __('Adicionar Projeto'),
		'edit_item' => __('Editar Projeto'),
		'new_item' => __('Novo Projeto'),
		'all_items' => __('Todos os Projetos'),
		'view_item' => __('Ver Projeto'),
		'search_items' => __('Procurar por Projeto'),
		'not_found' =>  __('Nenhum Projeto foi encontrado'),
		'not_found_in_trash' => __('Não há Projetos na lixeira'), 
		'parent_item_colon' => '',
		'menu_name' => 'Projetos'

	);
	$argsProjetos = array(
		'labels' => $labelsProjetos,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'show_in_menu' => true, 
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => false, 
		'hierarchical' => false,
		'menu_position' => 5,
		'supports' => array( 'title' )
	); 
	register_post_type('projetos',$argsProjetos);



	$labelsClientes = array(
		'name' => _x('Clientes', 'nome plural do tipo de post'),
		'singular_name' => _x('Cliente', 'nome singular do tipo de post'),
		'add_new' => _x('Adicionar Cliente', 'clientes'),
		'add_new_item' => __('Adicionar Cliente'),
		'edit_item' => __('Editar Cliente'),
		'new_item' => __('Novo Cliente'),
		'all_items' => __('Todos os Clientes'),
		'view_item' => __('Ver Cliente'),
		'search_items' => __('Procurar por Cliente'),
		'not_found' =>  __('Nenhum Cliente foi encontrado'),
		'not_found_in_trash' => __('Não há Clientes na lixeira'), 
		'parent_item_colon' => '',
		'menu_name' => 'Clientes'

	);
	$argsClientes = array(
		'labels' => $labelsClientes,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'show_in_menu' => true, 
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => false, 
		'hierarchical' => false,
		'menu_position' => 5,
		'supports' => array( 'title' )
	); 
	register_post_type('clientes',$argsClientes);


/*
	$labelsServicos = array(
		'name' => _x('Serviços', 'nome plural do tipo de post'),
		'singular_name' => _x('Serviço', 'nome singular do tipo de post'),
		'add_new' => _x('Adicionar Serviço', 'servicos'),
		'add_new_item' => __('Adicionar Serviço'),
		'edit_item' => __('Editar Serviço'),
		'new_item' => __('Novo Serviço'),
		'all_items' => __('Todos os Serviços'),
		'view_item' => __('Ver Serviço'),
		'search_items' => __('Procurar por Serviço'),
		'not_found' =>  __('Nenhum Serviço foi encontrado'),
		'not_found_in_trash' => __('Não há Serviços na lixeira'), 
		'parent_item_colon' => '',
		'menu_name' => 'Serviços'

	);
	$argsServicos = array(
		'labels' => $labelsServicos,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'show_in_menu' => true, 
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => false, 
		'hierarchical' => false,
		'menu_position' => 5,
		'supports' => array( 'title' )
	); 
	register_post_type('servicos',$argsServicos);

*/

}



add_action( 'init', 'codex_custom_init' );





// CUSTOM IMAGE SIZE

// if ( function_exists( 'add_image_size' ) ) 
// {
// 	add_image_size( 'mini_capa', 480, 480, array( 'center', 'center' ) );
// }









function get_post_by_type($type, $order = 'DESC', $per_page = -1, $paged = NULL, $meta_query = NULL)
{
	if ( !isset( $paged ) )
	{
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	}

	$args = array(
		'post_status' => 'publish',
		'post_type' => $type,
		'posts_per_page' => $per_page,
		'paged' => $paged,
		'order' => $order,
		'meta_query'=> array(
			$meta_query
		)
	);

	// if (isset( $meta_key ) )
	// {
	// 	$args['meta_query'] = array(
	// 		'key' => $meta_key,
	// 		'value' => $meta_value
	// 	);
	// }

	return new WP_Query( $args );
}


// ALTERA O COMPORTAMENTO DO TITLE FIELD
function change_default_title( $title ){

    $screen = get_current_screen();

	// ALTERAR O PLACEHOLDER DO TITLE FIELD
    if ( 'depoimentos' == $screen->post_type )
    {
        $title = 'Autor do depoimento';
    }

    // ESCONTE O TITLE FIELD DE POST EDITS DO TIPO PÁGINA
	/*
    if ( 'page' == $screen->post_type )
    {
    ?>
	    <style class="euquero" type="text/css">
	    <!--
	    #post-body-content
	    {
	    	margin-bottom: 0;
	    }
	    #titlediv
	    {
	        display: none;
	    }
	    -->
	    </style>
    <?php
    }
	*/

    return $title;
}

add_filter( 'enter_title_here', 'change_default_title' );


function wp_path_to_js()
{
	echo "
	    <script class='segredo' type=\"text/javascript\">

	        templateUrl = '" . get_bloginfo('template_url') . "/';
	        blogUrl = '" . get_bloginfo('url') . "/';

	    </script>
	";
}

function slugify($text)
{ 
  // replace non letter or digits by -
  $text = preg_replace('~[^\\pL\d]+~u', '-', $text);

  // trim
  $text = trim($text, '-');

  // transliterate
  $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

  // lowercase
  $text = strtolower($text);

  // remove unwanted characters
  $text = preg_replace('~[^-\w]+~', '', $text);

  if (empty($text))
  {
    return 'n-a';
  }

  return $text;
}


// ADICIONA URL ABSOLUTO NO AMBIENTE DE DESENVOLVIMENTO
function completaUrl ($urlAdicional = "")
{
	if($_SERVER['HTTP_HOST'] == "localhost")
	{
		echo get_bloginfo('url') . $urlAdicional;
	}
}

// RETORNA URL ABSOLUTO NO AMBIENTE DE DESENVOLVIMENTO
function get_completaUrl ($urlAdicional = "")
{
	if($_SERVER['HTTP_HOST'] == "localhost")
	{
		return get_bloginfo('url') . $urlAdicional;
	}
}
