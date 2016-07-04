
	<?php 
	
	if ( is_singular( 'product' ) ) {
     woocommerce_content();
		  }else{
		   //For ANY product archive.
		   //Product taxonomy, product search or /shop landing
			echo "<div class='container-fluid imgtienda'>";
			echo "<img src='http://54.68.89.0/natural/wp-content/uploads/2016/05/tiendahome.png' class='img-responsive'><br><br>";
			echo "</div>";
			
			echo "<div class='container ptienda'><br>" ;
			echo "<img src='http://54.68.89.0/natural/wp-content/themes/nproducts/imgs/CINTILLAn.png' class='img-responsive' >";
			echo "</div";

			echo "<div class='container ptienda'>";
			echo do_shortcode("[displayProduct id='366' ]"); 
			echo "</div>";
			
			echo "<div class='container ptienda'><br>" ;
			echo "<img src='http://54.68.89.0/natural/wp-content/themes/nproducts/imgs/CINTILLAd.png' class='img-responsive' >";
			echo "</div";
			

			echo "<div class='container ptienda'>";
			echo do_shortcode("[displayProduct id='368' ]"); 
			echo "</div>";
		  }



	?>  
	
