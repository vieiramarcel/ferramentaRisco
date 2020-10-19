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
  include("cabecalho.php")
?>
<!DOCTYPE HTML>
<!--
	Introspect by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Generic - Introspect by TEMPLATED</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"> </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"> </script>
	</head>
	<body>

		<!-- Main -->
			<section id="main" >
				<div class="inner">
					<header class="major special">
						<h2>Tutorial</h2>
						<p>O vídeo abaixo ensina como navegar e utilizar a ferramenta RM-AGILE</p>
					</header>
					<a href="#" class="image fit"><div style="height: 0; padding-bottom: calc(54.53% + 35px); position:relative; width: 100%;"><iframe allow="autoplay; gyroscope;" allowfullscreen height="100%" referrerpolicy="strict-origin" src="https://www.kapwing.com/e/5f8ce4079c7f4a0063c840e3" style="border:0; height:100%; left:0; overflow:hidden; position:absolute; top:0; width:100%" title="Embedded content made with Kapwing" width="100%"></iframe></div></a>
					<h2>Resumo</h2>
					<p>O processo de desenvolvimento de software está cada vez mais dinâmico e os modelos ágeis estão sendo utilizados como uma alternativa aos modelos prescritivos. Projetos de software tendem a ser pouco previsíveis e estáveis, portanto aplicar técnicas provenientes de abordagens ágeis como Scrum ou Kanban, por exemplo, para minimizar os efeitos das constantes alterações dos requisitos, é importante. Entretanto, a falta de formalização e explicitação da gestão de riscos nas abordagens ágeis pode acarretar no fracasso de um projeto, pois não identificar os riscos que podem vir a acontecer e não possuir um plano de contingência para tratá-los, pode gerar diversos problemas, como ultrapassar o cronograma e o custo preestabelecido.</p>
					<p>A gestão de riscos tem como objetivo controlar, de forma contínua, os riscos que podem surgir no desenvolvimento de software em todas as etapas, já que realizar um planejamento adequado e monitorar corretamente sua elaboração, pode evitar que ameaças se tornem problemas, e caso ocorram, tenham seu impacto mitigado. Dito isto, este trabalho tem o intuito de propor um guia para gestão ágil de riscos focado em projetos de software, através de conjuntos de práticas simples e úteis que podem ser integrados as abordagens ágeis, sem perder sua essência dinâmica.</p>
					<h2>Sobre</h2>
					<p>Esta ferramenta foi desenvolvida pelo autor Marcel Figueiredo Vieira com suporte do doutor e professor Jean Carlo Rossa Hauck, como parte do Trabalho de Conclusão de Curso (TCC) do curso de graduação de Sistemas de informação da Universidade Federal de Santa Catarina.</p>
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
				
			</section>
	
	</body>
</html>