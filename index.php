<?php
    include_once 'include/modelos.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Encuesta</title>
</head>
<body>

    <form action="#" method="POST">
        <?php
            $survey = new Encuesta();
            $showResults = false;

            if(isset($_POST['equipos'])){
                $showResults = true;
                $survey->setOptionSelected($_POST['equipos']);
                $survey->vote();
            }

        ?>
        <h2>¿Cuál es tu Equipos favorito?</h2>
        <?php

            if($showResults){
                $lenguajes = $survey->showResults();

                echo '<h2>' . $survey->getTotalVotes() . ' votos totales</h2>';

                foreach($lenguajes as $lenguaje){
                    $porcentaje = $survey->getPercentageVotes($lenguaje['votos']);

                    include 'vistas/resultados.php';
                }

            }else{
                include 'vistas/votacion.php';
                
            }
        ?>

    </form>

</body>
</html>