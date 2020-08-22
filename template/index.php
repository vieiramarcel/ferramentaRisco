


<!DOCTYPE HTML>

<!--
	Introspect by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	
<?php
    session_start();
	if(isset($_SESSION['status_feedback'])):
		if($_SESSION['status_feedback']){
			echo "<script>alert('Obrigado pelo feedback!');</script>";
		}
  ?>

  <?php
    endif;
	unset($_SESSION['status_feedback']);
  ?>
<?php
  include("cabecalho.php");
?>

	<head>
		<title>Introspect by TEMPLATED</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>


		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<h1>RM-AGILE: <span>Uma ferramenta para<br />
					Gestão ágil de riscos</span></h1>
					<ul class="actions">
						<li><a href="#" class="button alt">Tutorial</a></li>
					</ul>
				</div>
			</section>

		<!-- One -->
			<section id="one">
				<div class="inner">
					<header>
						<h2>Perfil organizacional</h2>
					</header>
					<p>Suspendisse mauris. Fusce accumsan mollis eros. Pellentesque a diam sit amet mi ullamcorper vehicula. Integer adipiscin sem. Nullam quis massa sit amet nibh viverra malesuada. Nunc sem lacus, accumsan quis, faucibus non, congue vel, arcu, erisque hendrerit tellus. Integer sagittis. Vivamus a mauris eget arcu gravida tristique. Nunc iaculis mi in ante.</p>
					<ul class="actions">
						<li><a href="#" class="button alt">Faça o seu!</a></li>
					</ul>
				</div>
			</section>

		<!-- Two -->
			<section id="two">
				<div class="inner">
					<article>
						<div class="content">
							<header>
								<h3>Gestão de projetos</h3>
							</header>
							<div class="image fit">
								<img src="images/pic01.jpg" alt="" />
							</div>
							<p>Cumsan mollis eros. Pellentesque a diam sit amet mi magna ullamcorper vehicula. Integer adipiscin sem. Nullam quis massa sit amet lorem ipsum feugiat tempus.</p>
						</div>
					</article>
					<article class="alt">
						<div class="content">
							<header>
								<h3>Riscos</h3>
							</header>
							<div class="image fit">
								<img src="images/pic02.jpg" alt="" />
							</div>
							<p>Cumsan mollis eros. Pellentesque a diam sit amet mi magna ullamcorper vehicula. Integer adipiscin sem. Nullam quis massa sit amet lorem ipsum feugiat tempus.</p>
						</div>
					</article>
				</div>
			</section>

		<!-- Three -->
			<section id="three">
				<div class="inner">
					<article>
						<div class="content">
							<span class="icon fa-users"></span>
							<header>
								<h3>teste de Perfil</h3>
							</header>
							<p>Morbi interdum mollis sapien. Sed ac risus. Phasellus lacinia, magna lorem ullamcorper laoreet, lectus arcu.</p>
							<ul class="actions">
								<li><a href="#" class="button alt">Acesse</a></li>
							</ul>
						</div>
					</article>
					<article>
						<div class="content">
							<span class="icon fa-book"></span>
							<header>
								<h3>Guia completo</h3>
							</header>
							<p>Ut convallis, sem sit amet interdum consectetuer, odio augue aliquam leo, nec dapibus tortor nibh sed.</p>
							<ul class="actions">
								<li><a href="#" class="button alt">Acesse</a></li>
							</ul>
						</div>
					</article>
					<article>
					<div class="content">
							<span class="icon fa-laptop"></span>
							<header>
								<h3>Tutorial</h3>
							</header>
							<p>Suspendisse mauris. Fusce accumsan mollis eros. Pellentesque a diam sit amet mi ullamcorper.</p>
							<ul class="actions">
								<li><a href="#" class="button alt">Acesse</a></li>
							</ul>
						</div>
					</article>
				</div>
			</section>
			

		<!-- Footer -->
			<section id="footer">
				<div class="inner">
					<header>
						<h2>Feedback</h2>
					</header>
					<form action = "processo.php" method = "POST">
						<div class="field half first">
							<label for="name">Nome</label>
							<input type="text" name="nome" id="nome" required/>
						</div>
						<div class="field half">
							<label for="email">Email</label>
							<input type="text" name="email" id="email" required />
						</div>
						<div class="field">
							<label for="message">Mensagem</label>
							<textarea name="mensagem" id="mensagem" required rows="6"></textarea>
						</div>
						<ul class="actions">
							<li><button type="submit" value="Enviar" class="alt">ENVIAR</button> </li>
						</ul>
					</form>
					<div class="copyright">
						&copy; Untitled Design: <a href="https://templated.co/">TEMPLATED</a>. Images <a href="https://unsplash.com/">Unsplash</a>
					</div>
				</div>
				
			</section>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
	</body>
</html>