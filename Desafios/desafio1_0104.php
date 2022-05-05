<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Formulário</title>
</head>

<body>
    <div class="container">
        <h1>Desafio #1 </h1>
        <h2>Ordenar sequências com delimitadores desconhecidos</h2>
        <hr>


        <?php

        $numeros = filter_input(INPUT_GET, "numeros", FILTER_SANITIZE_STRING);

        if (!$numeros) {
        ?>
            <p> Atenção </p>
            <p> Você não informou nenhum número </p>
            <br>
            <p> Para informar os números use o parâmetro "numeros" com uma sequência de números separados por vírgulas.</p>
            <p>Exemplo</p>
            <a href="desafio1_0104.php?numeros=1,2,3">desafio1_0104.php?numeros=1,2,3</a>
        <?php
        } else {
            $numbers = preg_replace('/[^0-9]/', ';', $numeros);
            $array = explode(";", $numbers);
            $qtd = count($array);
         

        ?>
            <p>Os números informados foram:</p>
            <?php
            for ($x = 0; $x <= $qtd-1; $x++) {
                if ($x<$qtd-2){
                echo $array[$x] . ", ";
                }else{
                    if ($x<$qtd-1){
                        echo $array[$x] . " ";
                    }
                    if($x=$qtd-1){
                        echo " e " . $array[$x] ;
                    }
                }

            }

            ?>
            <p>Os números em ordem crescente são:</p>
            <?php
            sort($array);
            for ($x = 0; $x <= $qtd-1; $x++) {
                if ($x<$qtd-2){
                echo $array[$x] . ", ";
                }else{
                    if ($x<$qtd-1){
                        echo $array[$x] . " ";
                    }
                    if($x=$qtd-1){
                        echo " e " . $array[$x] ;
                    }
                }

            }

            ?>
            <p>Os números em ordem decrescente são:</p>
        <?php
            rsort($array);
            for ($x = 0; $x <= $qtd-1; $x++) {
                if ($x<$qtd-2){
                echo $array[$x] . ", ";
                }else{
                    if ($x<$qtd-1){
                        echo $array[$x] . " ";
                    }
                    if($x=$qtd-1){
                        echo " e " . $array[$x] ;
                    }
                }

            }
        }

        ?>
    </div>
</body>