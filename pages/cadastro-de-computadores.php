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
                    <h3 class="txt-head">CADASTRO DE COMPUTADORES</h3>
                    <section class="conteudo">
                        <img class="img-contexto" src="../images/computer.png" alt="icon-Referencia"
                            class="image-pages" />
                        <div>
                            <p class="text-element">Caso você escolha a opção Receber via SMS código para ativação Neste
                                caso você deve possuir uma conta previamente cadastrada no serviço de Mensagens via
                                celular - SMS. Esse cadastramento pode ser realizado na opção ENTRAR</P>
                            <p class="text-element">No momento do cadastramento do dispositivo o Internet Banking exibe
                                o número cadastrado no serviço de mensagens. Após selecioná-lo e clicar em Continuar,
                                você receberá um SMS contendo um número aleatório e terá até 2 horas para digitá-lo na
                                página do cadastramento. Se o código estiver correto, é exibida a mensagem Seu
                                dispositivo foi ativado e o mesmo já estará habilitado para transações financeiras. </p>
                            <p class="text-element">Em caso negativo, o sistema exibe a mensagem Código SMS não confere.
                                Após 3 tentativas incorretas o dispositivo é excluído e será preciso reiniciar o
                                processo. Outra opção é dirigir-se a qualquer agência da CAIXA e solicitar o
                                desbloqueio.</P>

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