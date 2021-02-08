<?php
    include("./banco/conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covidimetro</title>

    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="./css/teste.css">
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
                    <a class="nav-link nav-link-color" href="./index.php">Quem Somos</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link nav-link-color" href="./teste.php">Faça o Teste</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link nav-link-color active" aria-current="page" href="./faleconosco.php">Fale Conosco</a>
                    </li>
                </ul>
        </nav>
    </div>

    <?php
        if(empty($_POST)){
            echo '
            <form action="#" method="post" enctype= multipart/form-data>
                <div class="container" align="center">
                    <table style="height: auto; margin-top: 100px; margin-bottom: 100px; width: 800px">
                        <tr>
                            <td class="align-middle">
                                <input type="radio" name="classificacao" id="pessimo" value="pessimo" checked>
                            </td>
                            <td class="align-middle">
                                <label for="pessimo" class="tam">
                                    <img src="./imgs/star.png" width="50px" height="50px" alt="..."></img>
                                </label>
                            </td>
                        </tr>
            
                        <tr>
                            <td class="align-middle">
                                <input type="radio" name="classificacao" id="ruim" value="ruim">
                            </td>
                            <td class="align-middle">
                                <label for="ruim" class="tam">
                                    <img src="./imgs/star.png" width="50px" height="50px" alt="..."></img>
                                    <img src="./imgs/star.png" width="50px" height="50px" alt="..."></img>
                                </label>
                            </td>
                        </tr>
            
                        <tr>
                            <td class="align-middle">
                                <input type="radio" name="classificacao" id="bom" value="bom">
                            </td>
                            <td class="align-middle">
                                <label for="bom" class="tam">
                                    <img src="./imgs/star.png" width="50px" height="50px" alt="..."></img>
                                    <img src="./imgs/star.png" width="50px" height="50px" alt="..."></img>
                                    <img src="./imgs/star.png" width="50px" height="50px" alt="..."></img>
                                </label>
                            </td>
                        </tr>
            
                        <tr>
                            <td class="align-middle">
                                <input type="radio" name="classificacao" id="mbom" value="muito_bom">
                            </td>
                            <td class="align-middle">
                                <label for="mbom" class="tam">
                                    <img src="./imgs/star.png" width="50px" height="50px" alt="..."></img>
                                    <img src="./imgs/star.png" width="50px" height="50px" alt="..."></img>
                                    <img src="./imgs/star.png" width="50px" height="50px" alt="..."></img>
                                    <img src="./imgs/star.png" width="50px" height="50px" alt="..."></img>
                                </label>
                            </td>
                        </tr>
            
                        <tr>
                            <td class="align-middle">
                                <input type="radio" name="classificacao" id="excelente" value="excelente">
                            </td>
                            <td class="align-middle">
                                <label for="excelente" class="tam">
                                    <img src="./imgs/star.png" width="50px" height="50px" alt="..."></img>
                                    <img src="./imgs/star.png" width="50px" height="50px" alt="..."></img>
                                    <img src="./imgs/star.png" width="50px" height="50px" alt="..."></img>
                                    <img src="./imgs/star.png" width="50px" height="50px" alt="..."></img>
                                    <img src="./imgs/star.png" width="50px" height="50px" alt="..."></img>
                                </label>
                            </td>
                        </tr>
            
                        <tr>
                            <td colspan="2">
                                <h5><br>Deixe seu comentário: elogios, críticas, dúvidas, etc... (Limite 500 caracteres)</h5>
                                <textarea name="avaliacao" id="avaliacao" cols="60" rows="10" placeholder="Deixe seu comentário: elogios, críticas, dúvidas, etc..." maxlength="500"></textarea>
                            </td>
                        </tr>
            
                        <tr>
                            <td colspan="2">
                                <input type="submit" value="Enviar">
                            </td>
                        </tr>
                    </table>
                </div>
            </form>
            ';
        }else{
            $classificacao=$_POST["classificacao"];
            $avaliacao=$_POST["avaliacao"];

            // $avaliacao=strval($avaliacao);
            // $classificacao=strval($classificacao);


            $sql="INSERT INTO faleconosco (classificacao, avaliacao)
                  VALUE ('$classificacao', '$avaliacao')";

            $query=mysqli_query($con, $sql);

            if($query){
                echo '
                    <div class="container" align="center">
                        <h1>Avaliação enviada com sucesso</h1>
                    </div>
                ';
            }else{
                echo '
                    <div class="container" align="center">
                        <h1>Deu Ruim</h1>
                    </div>
                ';
            }
            
        }
    ?>

    <?php
        include("./inc/footer.php");
    ?>
    
</body>
</html>