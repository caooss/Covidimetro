<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covidimetro</title>

    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/teste.css">
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</head>
<body>
    <div class='navbar-custom'>
        <nav class="navbar navbar-dark">

            <div class="navbar-brand">
                <h1>
                <img src="./imgs/logo/covidimetro.png" class="img-fluid rounded" width="125px" height="125px" alt="...">
                </h1>
            </div>
                <ul class="nav nav-pills nav-link-color">
                    <li class="nav-item">
                    <a class="nav-link nav-link-color active" aria-current="page" href="#">Quem Somos</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link nav-link-color" href="./teste.php">Faça o Teste</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link nav-link-color" href="./faleconosco.php">Fale Conosco</a>
                    </li>
                </ul>
        </nav>
    </div>

    <div class="container" align="center">
        <table style="height: auto; margin-top: 220px; margin-bottom: auto; width: 900px">
            <tr>
                <td class="align-middle">
                    <p>
                        <img src="./imgs/covid.png" class="img-fluid" width="800px" height="800px" alt="">
                    </p>
                </td>
                <td class="align-middle">
                    <p class="text-justify">
                        <h3>
                            Somos uma equipe de estudantes em formação no colegial com técnico integrado em informática do Institudo Federal de Educação, Ciência e Tecnologia de São Paulo, câmpus Araraquara.<br> 
                            Fizemos esse site para ajudar pessoas a identificarem as probabilidades de estarem com Covid-19, lembrando que não somos profissionais de saúde.<br> 
                            Tudo aqui foi feito com base em pesquisas, então para resultados precisos consulte outra fonte mais segura.
                        </h3>
                    </p>
                    
                </td>
            </tr>
        </table>
    </div>

    <?php
        include("./inc/footer.php");
    ?>
    
</body>
</html>