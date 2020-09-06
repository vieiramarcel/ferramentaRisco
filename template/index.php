


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
						<h2>Perfil organizacional</h2>
					</header>
					<p>Para receber um guia de gestão ágil de riscos personalizado ao perfil da sua organização, basta preencher algumas informações, como: Tamanho da organização, metodologia ágil utilizada e consequência em caso de falha do software desenvolvido. Você poderá consultar este guia online ou baixar o PDF para acessar quando quiseres!</p>
					<ul class="actions">
						<li><a href="mainPage.php" class="button alt">Faça o seu!</a></li>
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
							<p>Querendo conhecer mais sobre os conceitos chaves de gestão de projetos? Basta clicar <a href="http://localhost/ferramentaRisco/ferramentaRisco/template/fundamentacao.php#h5pbookid=1&chapter=h5p-interactive-book-chapter-13a54650-6eab-4ee7-bf74-75954977b30a&section=h5p-interactive-book-section-7425cbc7-b0fb-4939-9eee-328527ce393e&headerNumber=0">aqui</a> para consultar o capítulo do guia sobre este tema.</p>
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
							<p>Querendo conhecer mais sobre riscos em projetos de software? Basta clicar <a href="http://localhost/ferramentaRisco/ferramentaRisco/template/fundamentacao.php#h5pbookid=1&chapter=h5p-interactive-book-chapter-13a54650-6eab-4ee7-bf74-75954977b30a&section=h5p-interactive-book-section-7425cbc7-b0fb-4939-9eee-328527ce393e&headerNumber=0">aqui</a> para consultar o capítulo do guia sobre este tema.</p>
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
								<h3>Perfil</h3>
							</header>
							<p>Querendo um guia de gestão ágil de riscos para sua organização com foco em desenvolvimento de software?</p>
							<ul class="actions">
								<li><a href="mainPage.php" class="button alt">Acesse!</a></li>
							</ul>
						</div>
					</article>
					<article>
						<div class="content">
							<span class="icon fa-book"></span>
							<header>
								<h3>Guia completo</h3>
							</header>
							<p>Querendo consultar o guia completo de gestão ágil de riscos com foco em desenvolvimento de software?</p>
							<ul class="actions">
								<li><a href="guias.php" class="button alt">Acesse!</a></li>
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