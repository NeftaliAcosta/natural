$(document).ready(function() {
	

	if (((window.location.pathname)=='/natural/jugo-green/' ) || ((window.location.pathname)=='/natural/revestarandano/' ) || ((window.location.pathname)=='/natural/noni/' ) || ((window.location.pathname)=='/natural/vitaforce/') || ((window.location.pathname)=='/natural/vitaforce-kids/' ) || ((window.location.pathname)=='/natural/natural-fiber/') || ((window.location.pathname)=='/natural/calcio-de-coral/' ) || ((window.location.pathname)=='/natural/alpiste/' ) ){
		if($('#myxs').is(':hidden')){
			/*No mostrar el toogle*/
		}
		else{
			$('#ProductoTerminado').fadeIn('show');
		}
	}
	else if((window.location.pathname)=='/natural/nosotros/'  || (window.location.pathname)=='/natural/servicios/' || (window.location.pathname)=='/natural/certificaciones/' ){
		if($('#myxs').is(':hidden')){
			/*No mostrar el toogle*/
		}
		else{
			/*$('#MateriasPrimas').toggle('show');
			$('#ProductoTerminado').toggle('show');
			*/
		}			
	}
	else if($('#myxs').is(':hidden')){
		/*No mostrar el toogle*/
	}
	else{
			
		$('#MateriasPrimas').fadeIn('show');
	}
	
	
	
	
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
	  
	  
	 /*Import google fonts*/ 
	 WebFontConfig = {
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
	  
	   
	  
	  
	});


		$('#Menu1').click(function(){
			$('#MateriasPrimas').toggle();	
			return false;
		 });
		$('#Menu2').click(function(){
			$('#ProductoTerminado').toggle();	
			return false;
		 });