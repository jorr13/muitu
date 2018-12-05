<style>


	li.product-category.product.first{
		display: none !important;
	}	
	.woocommerce ul.products li.product-category, .woocommerce-page ul.products li.product-category{
		display: none !important;
	}
	.page-id-7 .first {
     display: block !important; 
	}

	</style>
	<footer class="content-info footer an">
	  <div class="container">
		@php dynamic_sidebar('sidebar-footer') @endphp
		<div class="contenedorfooter columns is-multiline">
			<div class="footeruno column is-4 is-center">
				<img class="logofooter logo-vertical" src="{{ home_url('/app/uploads/2018/06/Logo-01-1-768x775.png') }}" alt="">
				<img class="logofooter logo-horizontal" src="{{ home_url('/app/uploads/2018/06/Muitu-logo-horizontal.png') }}" alt="">
				<ul>
					<li><a href="/quienes-somos">Quiénes somos</a></li>
					<li><a href="/nuestros-artesanos/">Nuestros artesanos</a></li>
					<li><a href="/condiciones">Condiciones de venta</a></li>
					<li><a href="/informacion">Información de privacidad</a></li>
				</ul>
				
			</div>
			
			<div class="footerdos column is-4">
				<h1 class="contactanos">Contáctanos</h1>
				<input type="text" class="cajatexto" placeholder="Nombre" id="namefooter"><br>
				<input type="text" class="cajatexto" placeholder="e-mail" id="emailfooter"><br>
				<textarea name="" id="" cols="30" rows="10" class="textfooter"  id="mensajefooter" placeholder="Su mensaje"></textarea><br>
				<a href="#" id="submitfoooter" class="botonfooter">Enviar</a>
				<span id="returnmessagefooter"></span>
			</div>
			<div class="footertres column is-4">
				<h1 class="siguenos">Síguenos</h1>
				<a href="https://www.instagram.com/muituhandmade/"><img src="{{ home_url('/app/uploads/2018/06/instagram-logo.png') }}" class="logos" alt=""></a>
				<a href="https://www.facebook.com/Muit%C3%BA-238590030225809/"><img src="{{ home_url('/app/uploads/2018/06/69407.svg') }}" class="logos logos1" alt=""></a>
				
				<form action="https://muituhandmade.us19.list-manage.com/subscribe/post?u=b4bb0d3f71cdcdf4edc0bbb42&amp;id=83d08e4dc1" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
					<h1 class="suscribete">Suscríbete</h1>
					<input type="email" value="" name="EMAIL" class="cajatexto" id="mce-EMAIL" placeholder="Escribe tu correo">
					<input type="submit" value="Suscribete" name="suscribete" id="mc-embedded-subscribe" class="botonfooter">
				</form>
				<div id="mce-responses" class="clear">
					<div class="response" id="mce-error-response" style="display:none"></div>
					<div class="response" id="mce-success-response" style="display:none"></div>
				</div>   
			</div>
		</div>
	<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
	<script type='text/javascript'>
		(function($) {
			window.fnames = new Array(); 
			window.ftypes = new Array();
			fnames[0]='EMAIL';
			ftypes[0]='email';
		}
		(jQuery));var $mcj = jQuery.noConflict(true);
	</script>
	
	
	</footer>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/4.13.0/bodymovin.min.js"></script>
	<script>  
	  var animation = bodymovin.loadAnimation({
	  container: document.getElementById('page-loader'),
	  renderer: 'svg',
	  loop: true,
	  autoplay: true,
	  path: 'https://www.muituhandmade.com/json/data.json'
	  });
	</script>