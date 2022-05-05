<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Formulário Tabuada</title>
</head>

<body>
    <div class="container">
        <h1>Contador</h1>
        <hr>
        <h2>Parâmetors informados</h2>
        <?php

        $inicio = filter_input(INPUT_POST, "inicio", FILTER_SANITIZE_NUMBER_INT);
        $fim = filter_input(INPUT_POST, "fim", FILTER_SANITIZE_NUMBER_INT);
        $inc = filter_input(INPUT_POST, "inc", FILTER_SANITIZE_NUMBER_INT);
        ?>
        <p>Início: <?php echo $inicio ?></p>
        <p>Final: <?php echo $fim ?></p>
        <p>Incremento: <?php echo $inc ?></p>

        <?php
        if ($inicio < $fim) {
            $x = $inicio;
            echo $x . " ";
            while ($x < $fim) {
                $x += $inc;
                echo $x . " ";
            }
            
        } else {
            if ($fim < $inicio) {
                $x = $inicio;
                echo $x . " ";
                while ($x > $fim) {
                    $x -= $inc;
                    echo $x . " ";
                }
            }
        }


        ?>

    </div>