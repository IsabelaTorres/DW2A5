<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Formulário</title>
</head>

<body>
    <?php
    $titulo = filter_input(INPUT_POST, "titulo", FILTER_SANITIZE_SPECIAL_CHARS);
    $repetir = filter_input(INPUT_POST, "repetir", FILTER_SANITIZE_SPECIAL_CHARS);
    $corpo = filter_input(INPUT_POST, "corpo", FILTER_SANITIZE_SPECIAL_CHARS);
    $cor = filter_input(INPUT_POST, "cor", FILTER_SANITIZE_SPECIAL_CHARS);
    $link = filter_input(INPUT_POST, "link", FILTER_SANITIZE_URL);
    $corfundo = filter_input(INPUT_POST, "corfundo", FILTER_SANITIZE_SPECIAL_CHARS);
    ?>
    <div class="container col-sm-5">
        <style>
            body {
                background-color: <?php echo $corfundo ?>;
                color: <?php echo $cor ?>
            }
        </style>

        <h1><?PHP echo $titulo ?></h1>
        <hr>
        <?php if ($repetir != 0) {
            for ($x = 0; $x < $repetir; $x++) {
        ?>
                <p><?php echo $corpo; ?></p>
            <?php
            }
        } else {
            ?>
            <p><?php echo $corpo ?></p>
        <?php

        }
        ?>
        <a href="<?php echo $link ?>"><?php echo $link?></a>

    </div>
</body>

</html>