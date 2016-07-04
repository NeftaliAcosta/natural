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
			
			<div id="MainMenu"> 
			  <div class="list-group panel" >
				<a href="#MateriasPrimas" id="Menu1" class="list-group-item list-group-item-success "  data-parent="#MainMenu"><img src="<?php bloginfo( 'template_url' ); ?>/imgs/mmp.png" class="img-responsive mp" ></a>
					<div class="collapse" id="MateriasPrimas">
						<a href="materias-primas.html" class="list-group-item myactive">Acidulantes</a>
						<a href="materias-primas-almidonesarinas.html" class="list-group-item">Almidones y Harinas</a>
						<a href="materias-primas-almidonesmod.html" class="list-group-item ">Almidones Modificados</a>
						<a href="materias-primas-colores.html" class="list-group-item ">Colores</a>
						<a href="materias-primas-conservadores.html" class="list-group-item">Conservadores</a>
						<a href="materias-primas-dextrosas.html" class="list-group-item">Dextrosas</a>
						<a href="materias-primas-endulcorantes.html" class="list-group-item">Endulcorantes</a>
						<a href="materias-primas-extractos.html" class="list-group-item ">Extractos</a>
						<a href="materias-primas-fibras.html" class="list-group-item">Fibras</a>
						<a href="materias-primas-grasas.html" class="list-group-item">Grasas</a>
						<a href="materias-primas-hidrocoloides.html" class="list-group-item ">Hidrocoloides</a>
						<a href="materias-primas-lacteos.html" class="list-group-item ">Lacteos</a>
						<a href="materias-primas-maltodrextrinas.html" class="list-group-item ">Maltodrextrinas</a>
						<a href="materias-primas-nutraseuticos.html" class="list-group-item ">Nutraseuticos</a>
						<a href="materias-primas-potenciadores.html" class="list-group-item">Potenciadores de sabor</a>
						<a href="materias-primas-proteinas.html" class="list-group-item">Proteinas</a>
						<a href="materias-primas-quimaromaticos.html" class="list-group-item ">Químicos aromáticos</a>
						<a href="materias-primas-saboresartificiales.html" class="list-group-item">Sabores artificiales</a>
						<a href="materias-primas-vitaminas.html" class="list-group-item ">Vitaminas</a>
						<a href="materias-primas-varios.html" class="list-group-item ">Varios</a>
					</div>
				<a href="#ProductoTerminado" id="Menu2" class="list-group-item list-group-item-success" data-parent="#MainMenu"><img src="<?php bloginfo( 'template_url' ); ?>/imgs/ptm.png" class="img-responsive mp" ></a>
					<div class="collapse" id="ProductoTerminado">
						<a href="producto-terminado.html" class="list-group-item">Jugo Green</a>
						<a href="producto-terminado.html" class="list-group-item">Jugo Green</a>
						<a href="revestarandano.html" class="list-group-item">Revestarandano</a>
						<a href="noni.html" class="list-group-item">Noni</a>
						<a href="vitaforce.html" class="list-group-item">Vitaforce</a>
						<a href="vitaforcekids.html" class="list-group-item">Vitaforce Kids</a>
						<a href="natural-fiber.html" class="list-group-item">Natural Fiber</a>
						<a href="calcio-coral.html" class="list-group-item">Calcio de Coral</a>
						<a href="alpiste.html" class="list-group-item">Alpiste</a>
					</div>
			  </div>
			</div>
			</div>
			
			<div class="col-lg-8 mycontent">
			
			<?php 
			// Ruta de la imagen destacada (tamaño completo)
			global $post;
			$thumbID = get_post_thumbnail_id( $post->ID );
			$imgDestacada = wp_get_attachment_url( $thumbID );
			echo "<img src='$imgDestacada' class='img-responsive'>"  ;
			?>


<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>

</div>


</div>
</div>

<div class="container">
<img src="<?php the_field('imagen_secundaria_produccto'); ?>" class="img-responsive">
</div>

	