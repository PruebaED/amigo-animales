<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @if (isset($animal->animal_id))
    <link rel="STYLESHEET" type="text/css" href="../css/footer.css">
  @else
    <link rel="STYLESHEET" type="text/css" href="css/footer.css">
  @endif
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body 
	@if (Auth::check()) class="{{ Auth::user()->theme }}" 
	@elseif (isset($_COOKIE['theme'])) class="{{ $_COOKIE['theme'] }}" 
	@endif
>
	<footer class="row footer mt-5">
		<div class="col-10 offset-1">
			<hr class="footer-hr mb-5">
		</div>
		<div class="footer-col mt-xl-5 col-md-6 col-xl-3 offset-xl-1">
			<h4>Tratamiento de los datos</h4>
			<ul>
				<li>
				  @if (isset($animal->animal_id))
						<a href="../downloadables/privacy-policy.pdf" target="_blank">Política de privacidad</a>
				  @else
						<a href="downloadables/privacy-policy.pdf" target="_blank">Política de privacidad</a>
				  @endif
				</li>
				<li>
				  @if (isset($animal->animal_id))
  					<a href="../downloadables/cookies.pdf" target="_blank">Uso de cookies</a>
				  @else
						<a href="downloadables/cookies.pdf" target="_blank">Uso de cookies</a>
				  @endif
				</li>
				<li>
					<a href="https://www.aepd.es/es/derechos-y-deberes/conoce-tus-derechos" target="_blank">Ejerce tus derechos | AEPD</a>
				</li>
			</ul>
		</div>
		<div class="footer-col mt-xl-5 col-md-6 col-xl-3 offset-xl-1">
			<h4>Contacto</h4>
			<ul>
				<li><a href="">Teléfono: +34 123 456 789</a></li>
				<li><a href="">Email: soporte@amigoanimales.com</a></li>
				<li><a href="">Localización: Calle Inventada Nº23</a></li>
			</ul>
		</div>
		<div class="footer-col mt-xl-5 col-md-6 col-xl-3 offset-xl-1">
			<h4>Síguenos</h4>
			<div class="social-links">
				<a href="https://www.facebook.com/" target="_blank">
		            <img
		              @if (Auth::check() && Auth::user()->theme == 'dark')
      				  	@if (isset($animal->animal_id)) 
      				  		src="../images/social/facebook-white.png" 
  				  		@else 
  				  			src="images/social/facebook-white.png"
			  			@endif
		              @elseif (isset($_COOKIE['theme']) && $_COOKIE['theme'] == 'dark') 
      				  	@if (isset($animal->animal_id)) 
      				  		src="../images/social/facebook-white.png" 
  				  		@else 
  				  			src="images/social/facebook-white.png"
			  			@endif
		              @else
      				  	@if (isset($animal->animal_id)) 
      				  		src="../images/social/facebook.png" 
  				  		@else 
  				  			src="images/social/facebook.png"
			  			@endif
		              @endif
		              alt=""
		            >
				</a>
				<a href="https://twitter.com/" target="_blank">
		            <img
		              @if (Auth::check() && Auth::user()->theme == 'dark')
      				  	@if (isset($animal->animal_id)) 
      				  		src="../images/social/twitter-white.png" 
  				  		@else 
  				  			src="images/social/twitter-white.png"
			  			@endif
		              @elseif (isset($_COOKIE['theme']) && $_COOKIE['theme'] == 'dark') 
      				  	@if (isset($animal->animal_id)) 
      				  		src="../images/social/twitter-white.png" 
  				  		@else 
  				  			src="images/social/twitter-white.png"
			  			@endif
		              @else
      				  	@if (isset($animal->animal_id)) 
      				  		src="../images/social/twitter.png" 
  				  		@else 
  				  			src="images/social/twitter.png"
			  			@endif
		              @endif
		              alt=""
		            >
				</a>
				<a href="https://www.instagram.com/" target="_blank">
		            <img
		              @if (Auth::check() && Auth::user()->theme == 'dark')
      				  	@if (isset($animal->animal_id)) 
      				  		src="../images/social/instagram-white.png" 
  				  		@else 
  				  			src="images/social/instagram-white.png"
			  			@endif
		              @elseif (isset($_COOKIE['theme']) && $_COOKIE['theme'] == 'dark') 
      				  	@if (isset($animal->animal_id)) 
      				  		src="../images/social/instagram-white.png" 
  				  		@else 
  				  			src="images/social/instagram-white.png"
			  			@endif
		              @else
      				  	@if (isset($animal->animal_id)) 
      				  		src="../images/social/instagram.png" 
  				  		@else 
  				  			src="images/social/instagram.png"
			  			@endif
		              @endif
		              alt=""
		            >
				</a>
				<a href="https://www.linkedin.com/" target="_blank">
		            <img
		              @if (Auth::check() && Auth::user()->theme == 'dark')
      				  	@if (isset($animal->animal_id)) 
      				  		src="../images/social/linkedin-white.png" 
  				  		@else 
  				  			src="images/social/linkedin-white.png"
			  			@endif
		              @elseif (isset($_COOKIE['theme']) && $_COOKIE['theme'] == 'dark') 
      				  	@if (isset($animal->animal_id)) 
      				  		src="../images/social/linkedin-white.png" 
  				  		@else 
  				  			src="images/social/linkedin-white.png"
			  			@endif
		              @else
      				  	@if (isset($animal->animal_id)) 
      				  		src="../images/social/linkedin.png" 
  				  		@else 
  				  			src="images/social/linkedin.png"
			  			@endif
		              @endif
		              alt=""
		            >
				</a>
			</div>
		</div>
		<div class="footer-col col-md-6 col-xl-3 mx-auto d-block">
			<br>
			<h4>Disclaimer: This site is for educational purposes only.</h4>
		</div>
	</footer>
</body>
</html>