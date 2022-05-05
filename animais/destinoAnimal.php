<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Formulário</title>
</head>

<body>
    <div class="container col-sm-3">
        <h1>Praticando - Animais</h1> 
        <hr>
        <?php
        $nome = filter_input(INPUT_GET, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
        $info = filter_input(INPUT_GET, "info", FILTER_SANITIZE_SPECIAL_CHARS);
        $img = filter_input(INPUT_GET, "img", FILTER_SANITIZE_URL);

        echo "<p> Você clicou no <b> $nome </b></p>";
        echo "<p> O $nome $info</p>";
        ?>

        <img style="width:300px;height:300px" src="<?php echo $img ?>">
    </div>
</body>

</html>