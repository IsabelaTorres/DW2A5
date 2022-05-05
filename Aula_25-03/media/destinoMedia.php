<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Formulário</title>
</head>

<body>
    <div class="container col-sm-3">
        <h1>Praticando - Calculando Média</h1>
        <hr>
        <?php
        $n1 = filter_input(INPUT_POST, "n1", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
        $n2 = filter_input(INPUT_POST, "n2", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
        $n3 = filter_input(INPUT_POST, "n3", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

        $media = ($n1 + $n2 + $n3) / 3;

        if ($media < 4) {
            $status = "REPROVADO";
            $color = "red";
        } else {
            if ($media > 4 && $media < 6) {
                $status = "DE RECUPERAÇÃO";
                $color = "gold";
            } else {
                $status = "APROVADO";
                $color = "green";
            }
        }

        ?>
        <p>Um aluno com as notas <b><?php echo $n1 ?></b>, <b><?php echo $n2 ?></b> e <b><?php echo $n3 ?></b> tem uma média igual a <?php echo $media ?><br>
            <p>Com essa média o aluno está <b style='color: <?php echo $color ?>'><?php echo $status ?>
    </div>
</body>

</html>