<?php
use Claudsonm\CepPromise\CepPromise;
require 'vendor\autoload.php';

$cep = filter_input(INPUT_POST, "cep", FILTER_SANITIZE_NUMBER_INT);
if($cep){
$address = CepPromise::fetch($cep);
}   

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Exemplo CEP com Composer</title>
</head>

<body>
    <div class="container">
        <form action="cep.php" method="POST">
        <h1>Exemplo CEP com Composer</h1>
            <div class="col-sm-3 mb-2">
                <label for="cep" class="form-label">CEP:</label>
                <input type="number" class="form-control" name="cep" required>
            </div>

            <div class="col-sm-3 text-center">
                <button type="submit" class="btn btn-success">Enviar</button>
                <button type="reset" class="btn btn-warning">Limpar</button>
            </div>
        </form>

        <?php
        if ($cep){
           
           echo "<h2>CEP: $address->zipCode </h2>";
            echo "<p>Rua: $address->street<p>";
            echo "<p>Bairro: $address->district<p>";
            echo "<p>Cidade: $address->city<p>";
            echo "<p>Estado: $address->state<p>";
           
        }
        ?>
    </div>

</body>