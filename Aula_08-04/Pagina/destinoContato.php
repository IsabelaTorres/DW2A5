
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
    <?php
    $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
    $mensagem = filter_input(INPUT_POST, "mensagem");
    $data = date('d/m/Y -  h:i');
    
?>

<p>Nome informado: <?php echo $nome ?></p>
<p>Email: <?php echo $email ?></p>
<p>Mensagem: <?php echo $mensagem ?></p>
<p>Data: <?php echo $data ?>
<?php



$file_name = "Contato_".date('d_m_Y_h_i')."txt";
 $file = fopen("C:\\xampp\\htdocs\\Contatos\\".$file_name,'w+');   
 fwrite($file, "Contato via site: ".PHP_EOL.PHP_EOL. "Data: ".$data.PHP_EOL. "Nome: " . $nome.PHP_EOL. "Email: " . $email.PHP_EOL. "Mensagem: " . $mensagem);
 fclose($file);
 
require "rodape.php";
?>