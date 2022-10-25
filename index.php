<?php

include 'configs.php';

?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Trabalho de Conclusão de Cusrso</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/lgpd.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="index is-preload">
		<div id="page-wrapper">

			<?php

				include 'templates/menu.php';

			?>

			<!-- Banner -->
				<section id="banner">
					<div class="inner">

						<header>
							<h2>Cadastre-se</h2>
						</header>
						<p>Primeiro acesso ao Internet Banking Caixa? <br>
							 Cadastre sua conta e crie seu usuário. <br>
							  É simples, rápido e seguro.</p>
						<footer>
							<ul>
								<li class="list-button"><a href="<?= PATH ?>/pages/cadastrar.php" class="button-cadastrar">CADASTRAR</a></li>
							</ul>
						</footer>

					</div>
					<img class="veio" src="images/veio.PNG" alt="Idoso">

					<img class="mensagem-pix" src="images/Mensagem de Pix.PNG" alt="">

					<img class="balao-pix" src="images/balao-pix.PNG" alt="">
				</section>

				<?php

				include 'templates/footer.php'

				?>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="assets/js/lgpb.js"></script>

	</body>
</html>