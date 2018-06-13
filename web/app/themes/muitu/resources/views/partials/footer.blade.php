<footer class="content-info footer">
  <div class="container">
    @php dynamic_sidebar('sidebar-footer') @endphp
    <div class="contenedorfooter columns is-multiline">
	    	<div class="footeruno column is-4 is-center">
	    		<img class="logofooter" src="{{ home_url('/app/uploads/2018/06/Logo-01-1-768x775.png') }}" alt="">
	    		<ul>
	    			<li><a href="">Quienes somos</a></li>
	    			<li><a href="">Comunidades</a></li>
	    			<li><a href="">Condiciones de venta</a></li>
	    			<li><a href="">Informacion de privacidad</a></li>
	    		</ul>
	    	</div>
	    	<div class="footerdos column is-4">
	    		<h1 class="contactanos">Contactanos</h1>
	    		<input type="text" class="cajatexto" placeholder="Nombre"><br>
	    		<input type="text" class="cajatexto" placeholder="e-mail"><br>
	    		<textarea name="" id="" cols="30" rows="10" class="textfooter" placeholder="Su mensaje"></textarea><br>
	    		<a href="#" class="botonfooter">Enviar</a>
	    	</div>
	    	<div class="footertres column is-4">
	    		<h1 class="siguenos">Siguenos</h1>
	    		<img src="{{ home_url('/app/uploads/2018/06/instagram-logo.png') }}" class="logos" alt="">
	    		<img src="{{ home_url('/app/uploads/2018/06/69407.svg') }}" class="logos logos1" alt="">
	    		<h1 class="suscribete">Suscribete</h1>
	    		<input type="text" class="cajatexto">
	    		<a href="" class="botonfooter">Enviar</a>
	    	</div>
    	</div>
  </div>
</footer>
