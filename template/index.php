


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
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script> 
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"> </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"> </script>
	</head>
	<body>


		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<h1>RM-AGILE: <span>Uma ferramenta para<br />
					Gestão ágil de riscos</span></h1>
					<ul class="actions">
						<li><a href="tutorial.php" class="button alt">Tutorial</a></li>
					</ul>
				</div>
			</section>

		<!-- One -->
			<section id="one">
				<div class="inner">
					<header>
						<h2>Guia completo</h2>
					</header>
					<p>O Guia de gestão ágil de riscos completo possui todas as cerimônias, papéis, atividades, técnicas, ferramentas e produtos de trabalho deste processo, podendo ser aplicado a organizações da área de tecnologia da informação que utilizam metodologias ágeis para apoiar o desenvolvimento de software. </p>
					<ul class="actions">
						<li><a href="fundamentacao.php" class="button alt">Acesse!</a></li>
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
								<img src="images/projectManagement.jpg" alt="" />
							</div>
							<p>Querendo conhecer mais sobre os conceitos chaves de gestão de projetos? Basta clicar <a href="https://rm-agile.herokuapp.com/fundamentacao.php">aqui</a> para consultar o capítulo do guia sobre este tema.</p>
						</div>
					</article>
					<article class="alt">
						<div class="content">
							<header>
								<h3>Riscos</h3>
							</header>
							<div class="image fit">
								<img src="images/risk.jpg" alt="" />
							</div>
							<p>Querendo conhecer mais sobre riscos em projetos de software? clique <a href="https://rm-agile.herokuapp.com/fundamentacao.php">aqui</a> para consultar o capítulo do guia sobre este tema.</p>
						</div>
					</article>
				</div>
			</section>

		<!-- Three -->
			<section id="three">
				<div class="inner">
					
					<article>
						<div class="content">
							<span class="icon fa-book"></span>
							<header>
								<h3>Guia completo</h3>
							</header>
							<p>Querendo consultar o guia completo de gestão ágil de riscos com foco em desenvolvimento de software?</p>
							<ul class="actions">
								<li><a href="fundamentacao.php" class="button alt">Acesse!</a></li>
							</ul>
						</div>
					</article>
					<article>
					<div class="content">
							<span class="icon fa-laptop"></span>
							<header>
								<h3>Tutorial</h3>
							</header>
							<p>Querendo aprender sobre como navegar e utilizar a ferramenta RM-AGILE?</p>
							<ul class="actions">
								<li><a href="tutorial.php" class="button alt">Acesse!</a></li>
							</ul>
						</div>
					</article>
					<article>
						<div class="content">
							<span class="icon fa-users"></span>
							<header>
								<h3>O autor</h3>
							</header>
							<p>Querendo conhecer um pouco mais do trabalho do autor ou contactá-lo diretamente?</p>
							<ul class="actions">
								<li><a href="https://www.linkedin.com/in/marcel-figueiredo-vieira/" class="button alt">Acesse!</a></li>
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
						&copy;  2020 Creative Commons, template elaborado por: <a href="https://templated.co/license">Templated. </a> Imagens: <a href="http://www.freepik.com">Designed by snowing, rawpixel.com, Mindandi / Freepik</a></a></br>
					</div>
				</div>
				
			</section>
	</body>
</html>