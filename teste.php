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
    <script src="js/js.js"></script>

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
                    <a class="nav-link nav-link-color active" aria-current="page" href="./teste.php">Faça o Teste</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link nav-link-color" href="./faleconosco.php">Fale Conosco</a>
                    </li>
                </ul>
        </nav>
    </div>
        <div class="container">
            <?php
                if(empty($_POST)){
                    echo '
                    <form action="#" method="post" enctype= multipart/form-data>

                        <p><h3>Você pertence a um ou mais dos grupos abaixo?</h3></p><br>

                        <input type="checkbox" id="grupo_risco" name="grupo_risco[]" value="idoso">
                        <label for="grupo_risco"> Idosos (idade igual ou superior a 60 anos)</label><br>
            
                        <input type="checkbox" id="grupo_risco" name="grupo_risco[]" value="cardiovascular">
                        <label for="grupo_risco"> Problemas cardiovasculares</label><br>
            
                        <input type="checkbox" id="grupo_risco" name="grupo_risco[]" value="pulmonar">
                        <label for="grupo_risco"> Doenças pulmonares</label><br>
            
                        <input type="checkbox" id="grupo_risco" name="grupo_risco[]" value="b_imunidade">
                        <label for="grupo_risco"> Problemas de baixa imunidade</label><br>
            
                        <input type="checkbox" id="grupo_risco" name="grupo_risco[]" value="renais_dialise">
                        <label for="grupo_risco"> Doenças renais ou em diálise</label><br>
            
                        <input type="checkbox" id="grupo_risco" name="grupo_risco[]" value="diabetico">
                        <label for="grupo_risco"> Diabéticos</label><br>
            
                        <input type="checkbox" id="grupo_risco" name="grupo_risco[]" value="gestante">
                        <label for="grupo_risco"> Gestantes de alto risco</label><br>
            
                        <input type="checkbox" id="grupo_risco" name="grupo_risco[]" value="figado">
                        <label for="grupo_risco"> Doenças do fígado</label><br>


                        <p><h3>Quais destes sintomas você apresenta?</h3></p><br>

                        <input type="checkbox" class="sintomas" name="sintomas[]" value="comum">
                        <label for="sintomas"> Febre</label><br>
            
                        <input type="checkbox" class="sintomas" name="sintomas[]" value="comum">
                        <label for="sintomas"> Tosse seca</label><br>
            
                        <input type="checkbox" class="sintomas" name="sintomas[]" value="comum">
                        <label for="sintomas"> Cansaço</label><br>
            
                        <input type="checkbox" class="sintomas" name="sintomas[]" value="menos_comum">
                        <label for="sintomas"> Dor de garganta</label><br>
            
                        <input type="checkbox" class="sintomas" name="sintomas[]" value="menos_comum">
                        <label for="sintomas"> Diarreia</label><br>
            
                        <input type="checkbox" class="sintomas" name="sintomas[]" value="menos_comum">
                        <label for="sintomas"> Dor de cabeça</label><br>
            
                        <input type="checkbox" class="sintomas" name="sintomas[]" value="grave">
                        <label for="sintomas"> Perda de palador ou olfato</label><br>
            
                        <input type="checkbox" class="sintomas" name="sintomas[]" value="grave">
                        <label for="sintomas"> Falta de Ar</label><br>

                        <input type="checkbox" class="sintomas" name="sintomas[]" value="grave">
                        <label for="sintomas"> Dor ou pressão no peito</label><br>

                        <input type="checkbox" class="sintomas" name="sintomas[]" value="grave">
                        <label for="sintomas"> Perda de fala ou movimento</label><br>

                        <input type="hidden" name="comum" id="comum">
                        <input type="hidden" name="m_comum" id="m_comum">
                        <input type="hidden" name="grave" id="grave">

                        <input type="submit" value="Enviar" id="btnverificar"/>
                    </form>
                    ';
                }else{
                    $grupo_risco=$_POST["grupo_risco"];
                    $sintomas=$_POST['sintomas'];
                    $comum=$_POST['comum'];
                    $m_comum=$_POST['m_comum'];
                    $grave=$_POST['grave'];

                    // echo $comum;
                    // echo $m_comum;
                    // echo $grave;

                    if(((($comum<=3 && $comum!=0) || ($m_comum<=2 && $m_comum!=0)) && $grave==0)){
                        echo '
                              <div class="container">
                                <h3 align="center">Baixa chance</h3><br>
                                <p class="text-justify">
                                    As orientações médicas para suspeita de COVID-19 são que fiquemos em casa por 14 dias e prestar atenção no quadro de seus sintomas. 
                                    Nesse caso, as medidas a serem tomadas são: fique de repouso, hidrate-se bem, mantenha uma alimentação saudável e, se precisar, recorra a 
                                    medicamentos como antitérmicos e analgésicos para aliviar os incômodos. 
                                    Se precisar tirar qualquer dúvida, ligue para o Disque Saúde, pelo número 136 – profissionais fazem o atendimento, dando orientações sem 
                                    que o paciente precise se deslocar. 
                                </p>
                                <p>Use máscara, lave as mãos e mantenha uma distância segura.</p>
                              </div>
                        ';
                    }else if(((($comum<=3 && $comum!=0) || ($m_comum!=0 && $m_comum==3)) && $grave==1)){
                        echo '
                              <div class="container">
                                <h3 align="center">Média chance</h3><br>
                                <p class="text-justify">
                                    Caso sintomas como febre alta persistente e tosses acompanhadas de desconforto respiratório apareçam, é necessário que se procure o 
                                    centro de atendimento médico contra COVID-19 mais próximo urgentemente.
                                    Em caso de confirmação da doença em casa, o isolamento de demais moradores da residência com afastamento de no mínimo um metro deve ocorrer. 
                                    O portador deve ficar em um cômodo da casa, com as janelas abertas para que circule ar no ambiente. A limpeza de objetos com álcool 70% como 
                                    móveis, vaso sanitário e maçanetas é necessária, seu lixo deve ser separado dos demais e objetos de uso pessoal como talheres e escova não 
                                    devem ser utilizados por mais ninguém.
                                </p>
                                <p>Use máscara, lave as mãos e mantenha uma distância segura.</p>
                              </div>
                        ';
                    }else if(((($comum<=3 && $comum!=0) || ($m_comum!=0 || $m_comum==3)) || ($grave!=0 && $grave<=4))){
                        echo '
                              <div class="container">
                                <h3 align="center">Alta chance</h3><br>
                                <p class="text-justify">
                                    Procure o centro de atendimento contra COVID-19 mais próximo urgentemente.
                                </p>
                                <p>Use máscara, lave as mãos e mantenha uma distância segura.</p>
                              </div>
                        ';
                    }else{
                        echo '
                              <div class="container">
                                <h3 align="center">Quase Nenhuma chance</h3><br>
                                <p class="text-justify">
                                    Fique em casa, se possível, e respeite tanto as normas de distanciamento quanto de prevenção para que não contraia e não 
                                    dissemine o vírus.
                                </p>
                                <p>Use máscara, lave as mãos e mantenha uma distância segura.</p>
                              </div>
                        ';
                    }

                    // foreach($grupo_risco as $grupo){
                    //     if($grupo==""){
                    //         ;
                    //     }
                    // }

                    // foreach($sintomas as $tipo){

                    //     if($tipo=="febre" || $tipo=="tosse_seca" || $tipo=="cansaco"){
                    //         echo "Nenhum";
                    //     }
                    //     elseif((($tipo=="febre" || $tipo=="tosse_seca" || $tipo=="cansaco") && ($tipo=="diarreia" || $tipo=="dor_garganta")) || 
                    //            (($tipo=="febre" || $tipo=="tosse_seca" || $tipo=="cansaco") && ($tipo=="dor_cabeca" || $tipo=="dor_garganta")) || 
                    //            (($tipo=="febre" || $tipo=="tosse_seca" || $tipo=="cansaco") && ($tipo=="perda_paladar_olfato" || $tipo=="dor_garganta")) || 
                    //            (($tipo=="febre" || $tipo=="tosse_seca" || $tipo=="cansaco") && ($tipo=="diarreia" || $tipo=="dor_cabeca")) || 
                    //            (($tipo=="febre" || $tipo=="tosse_seca" || $tipo=="cansaco") && ($tipo=="diarreia" || $tipo=="perda_paladar_olfato")) || 
                    //            (($tipo=="febre" || $tipo=="tosse_seca" || $tipo=="cansaco") && ($tipo=="dor_cabeca" || $tipo=="perda_paladar_olfato"))){
                    //         echo "Baixa";
                    //     }
                    //     elseif((($tipo=="dor_garganta" && $tipo=="diarreia" && $tipo=="dor_cabeca") || ($tipo=="perda_paladar_olfato" && $tipo=="falta_ar")) || 
                    //            (($tipo=="dor_garganta" && $tipo=="diarreia" && $tipo=="dor_cabeca") || ($tipo=="perda_paladar_olfato" && $tipo=="dor_peito")) || 
                    //            (($tipo=="dor_garganta" && $tipo=="diarreia" && $tipo=="dor_cabeca") || ($tipo=="perda_paladar_olfato" && $tipo=="perda_fala_movimento"))){
                    //         echo "Média";
                    //     }
                    //     elseif(($tipo=="falta_ar" && $tipo=="dor_peito") || 
                    //            ($tipo=="falta_ar" && $tipo=="perda_fala_movimento") || 
                    //            ($tipo=="dor_peito" && $tipo=="perda_fala_movimento") ||
                    //            ($tipo=="falta_ar" && $tipo=="dor_peito" && $tipo=="perda_fala_movimento")){
                    //         echo "Alta";
                    //     }
                    // }

                }
            ?>
            
        </div>
    <?php
        include("./inc/footer.php");
    ?>
    
</body>
</html>