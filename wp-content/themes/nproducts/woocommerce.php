	<?php 
	
	if ( is_singular( 'product' ) ) {
     woocommerce_content();
		  }else{
		   //For ANY product archive.
		   //Product taxonomy, product search or /shop landing
			echo "<div class='container-fluid imgtienda'>";
			echo the_field('tiendahome');
			//echo "<img src='http://54.68.89.0/natural/wp-content/uploads/2016/05/tiendahome.png' class='img-responsive'><br><br>";
			echo "</div>";
			
			echo "<div class='container ptienda'><br><br><br>" ;
			echo "<img src='http://naturalproducts.com.mx/wp-content/themes/nproducts/imgs/CINTILLAn.png' class='img-responsive' ><br><br><br>";
			echo "</div";

			echo "<div class='container ptienda'>";
			echo do_shortcode("[displayProduct id='366' ]"); 
			/*echo do_shortcode("[product_category category='naturalproducts' columns='4']"); */
			echo "</div>";
			
			echo "<div class='container ptienda'><br><br><br>" ;
			echo "<img src='http://naturalproducts.com.mx/wp-content/themes/nproducts/imgs/CINTILLAd.png' class='img-responsive'><br><br><br>";
			echo "</div";
			

			echo "<div class='container ptienda'>";
			echo do_shortcode("[displayProduct id='368' ]"); 
			/*echo do_shortcode("[product_category category='treelife' columns='4']"); */
			echo "</div>";
		  }



	?>  
	
