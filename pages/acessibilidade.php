<?php 
	include "../configs.php";
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
                    <h3 class="txt-head">ACESSIBILIDADE</h3>
                    <section class="conteudo">
                        <img class="img-contexto" src="../images/to-use.png" alt="icon-Referencia"
                            class="image-pages" />
                        <div>
                            <p class="text-element">Em seu primeiro acesso crie um Usuário e uma Senha Internet na opção
                                CADASTRE-SE Os dados (nome, CPF e data de nascimento) devem ser informados conforme
                                cadastro na Receita Federal.
                                Dessa forma você estará apto para consultar saldo, extrato da conta ou extrato de
                                compras com cartão de débito. </P>
                            <p class="text-element"> A assinatura eletrônica pode ser cadastrada no próprio Internet
                                Banking CAIXA na opção ENTRAR.
                                Caso seu cartão não possua chip você deverá solicitar o cadastramento da assinatura
                                eletrônica na sua agência. </p>

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
                    <div class="col-4 col-12-narrower">

                        <section class="card-itens">
                            <header>
                                <h3>SENHA E USUÁRIO</h3>
                            </header>
                            <p>Para movimentar sua conta pelo Internet Banking será necessário criar um usuário. Caso
                                este seja seu primeiro acessesso será necessário um novo cadastro clicando no botão
                                CADASTRAR-SE.</p>
                            <footer>
                                <ul class="buttons">
                                    <li><a href="<?= PATH ?>/pages/senhas.php" class="card-button">Ver Mais</a></li>
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