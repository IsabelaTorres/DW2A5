<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Gerador de pirâmide</title>
</head>

<body>
    <?php
    $camadas = filter_input(INPUT_POST, "camadas", FILTER_SANITIZE_URL);
    $alinhamento = filter_input(INPUT_POST, "alinhamento", FILTER_SANITIZE_SPECIAL_CHARS);
    ?>
    <div class="container col-sm-5">
        <h1>Gerador de pirâmide</h1>
        <hr>
        <div class="piramide">
        <?php
        for ($x = 0; $x < $camadas; $x++) {
            for ($y = 0; $y <= $x; $y++) {

                echo "*"
        ?>

            <?php
            }
            ?>
            <br>
        <?php
        }


        ?>
        </div>

    <?php
 
        ?>
        <style>
            .piramide{
                text-align: <?php echo $alinhamento?>;
            }
        </style>
        <?php
   
    ?>



    </div>
</body>

</html>