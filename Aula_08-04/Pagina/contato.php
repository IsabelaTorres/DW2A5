<?php
require "cabecalho.php";
?>
<ul class="nav nav-pills">
    <li class="nav-item"><a href="praticando3.php" class="nav-link " aria-current="page">Início</a></li>
    <li class="nav-item"><a href="sobre.php" class="nav-link">Sobre</a></li>
    <li class="nav-item"><a href="faqs.php" class="nav-link">FAQs</a></li>
    <li class="nav-item"><a href="contato.php" class="nav-link active">Contato</a></li>
</ul>
</header>

<div class="inicio">
    <div class="bg-light p-4 mb-4 rounded">
        <h1 class="text-center">Contato</h1>
    </div>

    <div class="container col-sm-8">
        <form action="destinoContato.php" method="POST" class="form-inline">

            <div class="col-sm-8 mb-2">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" class="form-control" name="nome" required>
            </div>

            <div class="col-sm-8 mb-4">
                <label for="email" class="form-label">Email:</label>
                <input type="text" class="form-control" name="email" required>
            </div>

            <div class="col-sm-8 mb-4">

                <label for="mensagem" class="form-label">Mensagem:</label>
                <textarea name="mensagem" rows="5" cols="60 "></textarea>
            </div>

            <div class="col-sm-8 text-center">
                <button type="submit" class="btn btn-success">Enviar</button>
                <button type="reset" class="btn btn-warning">Limpar</button>
            </div>
        </form>
    </div>

</div>

<?php
require "rodape.php";
?>