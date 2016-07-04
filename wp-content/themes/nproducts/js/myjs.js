$(document).ready(function() {
	alert("hola");
	/*Función que detecta la versión del dispositivo para el funcionamiento del menú*/
	if ($('.myxs').is(':hidden')){
		
		 $('#Menu1').click(function(){
				$('#MateriasPrimas').toggle('slow');
				 
				
		 });
		 
		  $('#Menu2').click(function(){
				$('#ProductoTerminado').toggle('slow');

				
		 });
	}
	else{
		$('#MateriasPrimas').fadeIn('show');
		 
		 $('#Menu1').click(function(){
				$('#MateriasPrimas').toggle('slow');
				 
				
		 });
		 
		 
		 $('#Menu2').click(function(){
				$('#ProductoTerminado').toggle('slow');
				$('#MateriasPrimas').toggle('hide');
				
		 });
		 
		 /*Fin función del menú*/
	}

	};

	/*Google alaitycs*/
	ebFontConfig = {
		google: { families: [ 'Asap::latin' ] }
	  };
	  (function() {
		var wf = document.createElement('script');
		wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
		  '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
		wf.type = 'text/javascript';
		wf.async = 'true';
		var s = document.getElementsByTagName('script')[0];
		s.parentNode.insertBefore(wf, s);
	  })(); 
	  
	  
	    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-70778713-1', 'auto');
  ga('send', 'pageview');
  
  
  
  
	  