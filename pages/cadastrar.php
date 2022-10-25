<?php

include '../configs.php';

?>

<!DOCTYPE HTML>
<html>

<head>
    <title>Trabalho de Conclusão de Cusrso</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="../assets/css/main.css" />
    <link rel="stylesheet" href="../assets/css/bootstrap.css" />
    <noscript>
        <link rel="stylesheet" href="../assets/css/noscript.css" />
    </noscript>
</head>

<body class="index is-preload">
    <div id="page-wrapper">

        <?php

				include '../templates/menu.php';

			?>




        <!-- Main -->
        <article id="main">
            <!-- One -->
            <section class="wrapper style4 container">

                <!-- Content -->
                <div class="content">
                    <h3 class="txt-head">Faça seu Cadastro Aqui</h3>
                    <section class="conteudo">
                        <img class="img-contexto-cadastrar" src="../images/computer.png" alt="icon-Referencia"
                            class="image-pages" />
                        <p class="text-element">Para Iniciar o seu Cadastro insira seu CPF </p>
                        <div>
                            <input type="text">

                        </div>

                    </section>
                </div>

            </section>
        </article>

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ATENÇÃO</h5>
                    <a type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
</a>
                </div>
                <div class="modal-body">
                    <P>VOCÊ ESTAVA PRESTES A CAIR EM UM GOLPE <br>
                    PARA SABER MAIS ACESSE: SABER MAIS </P>
                </div>
                <div class="modal-footer">
                    <a type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</a>
                    <a type="button" class="btn btn-primary" href="redirecionamento.html">Saber Mais</a>
                </div>
                </div>
            </div>
            </div>


        <?php

				include '../templates/footer.php'

				?>

    </div>

    <!-- Scripts -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/jquery.dropotron.min.js"></script>
    <script src="../assets/js/jquery.scrolly.min.js"></script>
    <script src="../assets/js/jquery.scrollex.min.js"></script>
    <script src="../assets/js/browser.min.js"></script>
    <script src="../assets/js/breakpoints.min.js"></script>
    <script src="../assets/js/util.js"></script>
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>

</body>

</html>