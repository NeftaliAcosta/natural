

	<!-- Inicio de la segunda sección -->
	<div class="container-fluid mybg"> 
	<div class="container ">
	<br/><br/>
		<div class="row">
			<div class=" col-xs-12 col-sm-6 col-md-6 col-lg-6" >
				<div class="brighten pic">
					<a href="acidulantes"><img src="wp-content/uploads/2016/05/mat1.png" alt="Materias primas" class="img-responsive"></a>
				</div>
			</div>
			<br class="visible-xs"><br class="visible-xs">
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<div class="brighten pic">
					<a href="servicios"><img src="wp-content/uploads/2016/05/mat2.png" alt="Asesoría en aplicacines" class="img-responsive"></a>
					</div>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" >
				<div class="brighten pic">
					<a href="jugo-green"><img src="wp-content/uploads/2016/05/mat3.png" alt="productos terminados" class="img-responsive"></a>
				</div>
			</div>
			<br class="visible-xs">
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<div class="brighten pic">
				<a href="certificaciones"><img src="wp-content/uploads/2016/05/mat4.png" alt="certificaciones" class="img-responsive"></a> </div>
			</div>
		</div>
	<br>
	</div></div>
	<!-- Fin de la segunda sección -->
	
	
		<div class="container-flouid">
		<div class="container iconografia">
		
			<br/><br/><br/>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 imgs iconos">
				<div class="col-lg-6">
								<div class="">
								<img src="<?php bloginfo( 'template_url' ); ?>/imgs/icon1.png" alt="desarrollo personalizados" class="img-responsive icon" />
								</div>
							</div>
							<div class="col-lg-6 txt">
								<h3 class="title-box">Desarrollos personalizados</h3>
								<p>Desarrollamos Productos y Formulas Personalizadas. Le apoyamos como
								Socio Comerciales, contamos con tecnología de vanguardia.<br><br>
								</p>
							</div>
							
							<div class="col-lg-6">
								<div class="">
								<img src="<?php bloginfo( 'template_url' ); ?>/imgs/icon2.png" alt="código de ética" class="img-responsive icon" />
								</div>
							</div>
							<div class="col-lg-6 txt">
								<h3 class="title-box">Código de ética</h3>
								<p>En Natural Product's Internacional Desarrollamos y dirigimos nuestras operaciones y actividades
								con honestidad, integridad, humildad, justicia, equidad y respeto a los derechos humanos.
								</p>
							</div>
					
				</div>
				
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 imgs">
				<div class="col-lg-6">
								<div class="">
								<img src="<?php bloginfo( 'template_url' ); ?>/imgs/icon3.png" alt="download center" class="img-responsive icon" />
								</div>
							</div>
							<div class="col-lg-6 txt">
								<h3 class="title-box">Download Center</h3>
								<p>Contamos con una herramienta donde podrá descargar diferente 
								tipo de información que Natural Protducts tiene para usted referente a nuestra línea de
								suplementos alimenticios y materia prima.

 
								</p>
							</div>
							
							<div class="col-lg-6">
								<div class="">
								<img src="<?php bloginfo( 'template_url' ); ?>/imgs/icon4.png" alt="satisfaccion total" class="img-responsive icon" />
								</div>
							</div>
							<div class="col-lg-6 txt">
								<h3 class="title-box">Satisfacción total</h3>
								<p>Estamos comprometidos a trabajar en la mejora continua con procesos de calidad, realizando con los más altos
								estándares de calidad para así ofrecer un valor agregado que nos ayude a superar las expectativas de los clientes.
								</p>
							</div>
					
				</div>
	
		</div><br/><br/><br/><br/>
	</div> 
	
	
	
	
		
	<!-- inicio de la sección con fondo-->
	 <div class="container-flouid seccion3">
			<div class="container">
			<div class="txtsecc3">
				<h1>La <strong>experiencia</strong> nuestro <br/>mayor <strong>valor</strong></h1>
				<p>Natural Product's Internacional es una empresa con 23 años de experiencia en la fabricación, control de calidad y comercialización
				en el mercado alimenticio.<br/><br/>
				Ofrecemos materias primas de primera calidad para el área de ingredientes alimenticios, satisfaciendo todas y cada una  de las
				necesidades de sus clientes.<br/><br/>  
				Estableciendo una estrategia de diferenciación respecto a la competencia, utilizando tecnología de vanguardia y servicio 
				con calidad y calidez humana.
				</p>
			</div>
			</div>
	 </div>
	<!-- fin de de la sección con fondo-->
	
	
	
		
	<!-- Inicio sección blog --> 
	<div class="container-flouid seccion">
		<div class="container">
				<h1 align="center">Blog</h1>
				<br>
				<?php
			
				$args= array( 
				'posts_per_page' => 4,
				/*'cat' => 34,*/
				 );
				 
				$the_query = new WP_Query(  $args ); ?>
				<?php while ($the_query -> have_posts()) : $the_query -> the_post();
				if($i % 2 == 0) { ?> 
				  <div class="row">

				  <?php
				  }
				  ?>
				  	<div clasS="col-xs-12 col-sm-6 col-md-6 col-lg-6 mypost">
						<a href="<?php echo get_permalink( $post->ID ); ?>">
							<img src="<?php echo the_post_thumbnail_url( 'full' ); ?>" class="img-responsive mythumbnail">
						</a>
						<?php the_title( '<h4>', '</h4>' ); ?>
						<i class="fa fa-calendar" aria-hidden="true"> Publicado el <?php echo get_the_date(); ?></i>
						<?php the_excerpt(); ?>
					
					</div>
					   <?php $i++; 
						  if($i != 0 && $i % 2 == 0) { ?>
							</div><!--/.row--><br>
							<div class="clearfix"></div>

						  <?php
						   } ?>

				
					
					<?php 
					endwhile;
						wp_reset_postdata();
					?>
			</div>
	


		</div>
<br/><br><br>

<!-- fin sección blog -->













	<!--Inicio sección de contacto-->
	<a name="contacto" id="contacto"></a>

	<div class="container-flouid contacto">
			<div class="container">
				<?php echo do_shortcode('[contact-form-7 id="636" title="contacto natural home"]');?> 
			</div>
	 </div>
	<!--Finn sección de contacto -->

	
	
		<!-- Inicio Google Maps -->
	<div class="container-flouid">
		<div class="google-maps">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3735.7632397660213!2d-103.31570468486737!3d20.55686590909532!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842f4d20b1430d4d%3A0x8a8c201cbd7f661a!2sR%C3%ADo+Azul+110%2C+Minerales%2C+45693+Las+Pintitas%2C+Jal.!5e0!3m2!1ses!2smx!4v1446256932552" 
			width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>