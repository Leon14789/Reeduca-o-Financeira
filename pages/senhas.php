<?php 
	require_once "../configs.php";
?>

<!DOCTYPE HTML>
<html>

<head>
    <title>Trabalho de Conclusão de Curso</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="../assets/css/main.css" />
    <noscript>
        <link rel="stylesheet" href="assets/css/noscript.css" />
    </noscript>
</head>

<body class="no-sidebar is-preload">
    <div id="page-wrapper">
        <?php
				require_once "../templates/menu.php"
			?>

        <!-- Main -->
        <article id="main">
            <!-- One -->
            <section class="wrapper style4 container">

                <!-- Content -->
                <div class="content">
                    <h3 class="txt-head">SENHA E USUÁRIO</h3>
                    <section class="conteudo">
                        <img class="img-contexto" src="../images/password.png" alt="icon-Referencia"
                            class="image-pages" />
                        <div>
                            <p class="text-element">Usuário é a chave de login escolhida por você para acesso ao
                                Internet Banking. É alfanumérica e deve conter entre 10 e 20 caracteres (letras e
                                números).</P>
                            <p class="text-element">Assinatura eletrônica é a senha que permite a efetivação das
                                transações financeiras pelo Internet Banking. É recomendável uma senha que não contenha
                                dados pessoais e que seja alterada periodicamente. Pode ser cadastrada no Internet
                                Banking CAIXA, caso você possua cartão de débito com chip. </p>
                            <p class="text-element">Assinatura eletrônica múltipla é a senha que permite a efetivação
                                das transações financeiras pelo Internet Banking, para contas de empresas que necessitam
                                de duas ou mais autorizações, assim como para contas conjuntas não solidárias. </P>

                        </div>
                    </section>
                </div>

            </section>

            <!-- Two -->
            <section class="wrapper style1 container special">
                <div class="row">
                    <div class="col-4 col-12-narrower">

                        <section class="card-itens">
                            <header>
                                <h3>SAIBA COMO USAR</h3>
                            </header>
                            <p>Para utilizar o Internet Banking da CAIXA é rápido facil e além de tudo prático! Caso
                                deseje aprender mais sobre ele Clique em veja mais para entender de forma detalhada como
                                funciona. </p>
                            <footer>
                                <ul class="buttons">
                                    <li><a href="<?= PATH ?>/pages/usar.php"" class=" card-button">Ver Mais</a></li>
                                </ul>
                            </footer>
                        </section>
                    </div>
                    <div class="col-4 col-12-narrower">

                        <section class="card-itens">
                            <header>
                                <h3>ACESSIBILIDADE</h3>
                            </header>
                            <p>A CAIXA pratica a cidadania também no Internet Banking CAIXA, onde os clientes com
                                deficiência e/ou limitações visuais encontram uma plataforma adaptada à acessibilidade.
                            </p>
                            <footer>
                                <ul class="buttons">
                                    <li><a href="<?= PATH ?>/pages/acessibilidade.php" class="card-button">Ver Mais</a>
                                    </li>
                                </ul>
                            </footer>
                        </section>
                    </div>
                    <div class="col-4 col-12-narrower">


                        <section class="card-itens">
                            <header>
                                <h3>CADASTRO DE COMPUTADORES</h3>
                            </header>
                            <p class="">Para efetuar transações financeiras a partir do internet banking você precisa
                                cadastrar o dispositivo a ser utilizado.
                                Chamamos de dispositivo todo equipamento utilizado para acesso ao Internet Banking. </p>
                            <footer>
                                <ul class="buttons">
                                    <li><a href="<?= PATH ?>/pages/cadastro-de-computadores.php" class="card-button">Ver
                                            Mais</a></li>
                                </ul>
                            </footer>
                        </section>

                    </div>
                </div>
            </section>

        </article>

        <?php

				include '../templates/footer.php'

				?>
    </div>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.dropotron.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/jquery.scrollgress.min.js"></script>
    <script src="assets/js/jquery.scrollex.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>