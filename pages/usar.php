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
                    <h3 class="txt-head">SAIBA COMO USAR</h3>
                    <section class="conteudo">
                        <img class="img-contexto" src="../images/learn-how-to-use.png" alt="icon-Referencia"
                            class="image-pages" />
                        <div>
                            <p class="text-element">Em seu primeiro acesso crie um Usuário e uma Senha Internet na opção
                                CADASTRAR. Os dados (nome, CPF e data de nascimento) devem ser informados conforme
                                cadastro na Receita Federal. Dessa forma você estará apto para consultar saldo, extrato
                                da conta ou extrato de compras com cartão de débito.
                            <p class="text-element"> Para realizar transações financeiras é necessário cadastrar a
                                assinatura eletrônica e o dispositivo a ser utilizado.</p>
                            <p class="text-element"> A assinatura eletrônica pode ser feita pela Internet Banking CAIXA
                                no botão CADASTRAR, preencehndo o formulário com NOME, CPF, DATA DE NASCIMENTO,
                                TELEFONE, EMAIL, NUMERO DO CARTÃO, CV DO CARTÃO</p>

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