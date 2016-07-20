<?php
/**
 * Template Name: Productos
 */
?>



<div class="container">
<div class="row">
			
			<div class="col-lg-4" >
			<!--aqui va el meú lateral-->
			<?php /*wp_nav_menu( array( 'menu' => 'Menu lateral' ) );*/?>
			
				<div id="MainMenu"> <!--Inicio menú-->
				  <div class="list-group panel" >
					<a href="#MateriasPrimas" id="Menu1" class="list-group-item list-group-item-success"  data-parent="#MainMenu"><img src="<?php bloginfo( 'template_url' ); ?>/imgs/mmp.png" class="img-responsive mp" ></a>
						<div class="collapse" id="MateriasPrimas">
							<a href="../acidulantes" class="list-group-item">Acidulantes</a>
							<a href="../almidones-y-harinas" class="list-group-item">Almidones y Harinas</a>
							<a href="../almidones-modificados" class="list-group-item ">Almidones Modificados</a>
							<a href="../colores" class="list-group-item ">Colores</a>
							<a href="../conservadores" class="list-group-item">Conservadores</a>
							<a href="../dextrosas" class="list-group-item">Dextrosas</a>
							<a href="../endulcorantes" class="list-group-item">Endulcorantes</a>
							<a href="../extractos" class="list-group-item ">Extractos</a>
							<a href="../fibras" class="list-group-item">Fibras</a>
							<a href="../grasas" class="list-group-item">Grasas</a>
							<a href="../hidrocoloides" class="list-group-item ">Hidrocoloides</a>
							<a href="../lacteos" class="list-group-item ">Lacteos</a>
							<a href="../maltodrextrinas" class="list-group-item ">Maltodrextrinas</a>
							<a href="../nutraseuticos" class="list-group-item ">Nutraseuticos</a>
							<a href="../potenciadores-de-sabor" class="list-group-item">Potenciadores de sabor</a>
							<a href="../proteinas" class="list-group-item">Proteinas</a>
							<a href="../quimicos-aromaticos" class="list-group-item ">Químicos aromáticos</a>
							<a href="../sabores-artificiales" class="list-group-item">Sabores artificiales</a>
							<a href="../vitaminas" class="list-group-item ">Vitaminas</a>
							<a href="../varios" class="list-group-item ">Varios</a>
						</div>
					<a href="#ProductoTerminado" id="Menu2" class="list-group-item list-group-item-success" data-parent="#MainMenu"><img src="<?php bloginfo( 'template_url' ); ?>/imgs/ptm.png" class="img-responsive mp" ></a>
						<div class="collapse" id="ProductoTerminado">
							<a href="../jugo-green" class="list-group-item">Jugo Green</a>
							<a href="../revestarandano" class="list-group-item">Revestarandano</a>
							<a href="../noni" class="list-group-item">Noni</a>
							<a href="../vitaforce" class="list-group-item">Vitaforce</a>
							<a href="../vitaforce-kids" class="list-group-item">Vitaforce Kids</a>
							<a href="../natural-fiber" class="list-group-item">Natural Fiber</a>
							<a href="../calcio-de-coral" class="list-group-item">Calcio de Coral</a>
							<a href="../alpiste" class="list-group-item">Alpiste</a>
						</div>
				  </div>
				</div><!--fin menú-->
			</div>
			
			<div class="col-lg-8 mycontent">
			
			<?php 
			// Ruta de la imagen destacada (tamaño completo)
			global $post;
			$thumbID = get_post_thumbnail_id( $post->ID );
			$imgDestacada = wp_get_attachment_url( $thumbID );
			echo "<img src='$imgDestacada' class='img-responsive imgprincipal'>"  ;
			?>

<br><br>
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>

</div>


</div>
</div>
<br><br><br>
<div class="container">
<img src="<?php the_field('imagen_secundaria_produccto'); ?>" class="img-responsive">
</div>

	