<?php get_header(); ?>


<section id="pagina-clientes" class="pagina">

	<ul id="clientes">
		
    	<li id="cliente">
		<?php 

		$clientes = array();
		$clientesAntigos = array();	
		$mQuery = array(
			'key' => 'antigo',
			'value' => 'false'
		);

	    $loop = get_post_by_type('clientes', 'DESC', -1, NULL, $mQuery);

	    $iCliente = 1;

	    while ( $loop->have_posts() ) :
	    
	        $loop->the_post();

	    	$img = get_field('logo_pg_clientes');
	    	$img = wp_get_attachment_image_src($img, 'full');
	    	$cor = get_field('cor');

	    	?>

	    		<a href="<?php echo the_permalink(); ?>">
	    			<h2><?php the_title(); ?></h2>
	    			<figure><img src="<?php echo $img[0] ?>" width="<?php echo $img[1] ?>" height="<?php echo $img[2] ?>"></figure>
	    			<div id="bg" class="ani-04-in-out" style="background: #<?php echo $cor ?>"></div>
	    		</a>

		    <?php if ($iCliente == $loop->post_count) : ?>

	    	</li>
		    	
		    <?php else : ?>

	    	</li><li id="cliente">
		    	
		    <?php endif ?>
			
	    	<?php	

			++$iCliente;	    		

	    endwhile;

		?>

	</ul>

	<div id="wrap-demais">

		<div class="container">
			<div class="row">
				<h3 class="col-sm-12">Demais clientes <span>com quem também tivemos o prazer de criar</span></h3>

				<ul class="col-sm-12">

					<?php 

					$clientes = array();
					$clientesAntigos = array();	
					$mQuery = array(
						'key' => 'antigo',
						'value' => 'true'
					);

					$loop = get_post_by_type('clientes', 'DESC', -1, NULL, $mQuery);

					while ( $loop->have_posts() ) :

					    $loop->the_post();

						$img = get_field('logo_pg_clientes');
						$img = wp_get_attachment_image_src($img, 'full');
						$cor = get_field('cor');

						?>

 					<li id="cliente">
						<h2><?php the_title(); ?></h2>
						<figure>
							<img src="<?php echo $img[0] ?>">
						</figure>
					</li>


					<?php	

					endwhile;

					?>

 				</ul>

			</div>
		</div>

	</div>

</section>


<?php get_footer(); ?>