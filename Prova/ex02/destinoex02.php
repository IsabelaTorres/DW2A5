<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Formulário</title>
</head>

<body>
    <?php
    $link = filter_input(INPUT_POST, "link", FILTER_SANITIZE_URL);
    $modo = filter_input(INPUT_POST, "modo", FILTER_SANITIZE_SPECIAL_CHARS);
    ?>
    <div class="container col-sm-5">
<?php
if ($modo==1){
    ?>
    <style>
            body {
                background-image:url("<?php echo $link?>");
            }
        </style>

        
        <?php
}else{
    ?>
    <a
            href="<?php echo $link?>"><img
                src="<?php echo $link?>"
                style="width:300px; height: 300px">
                <?php
}
?>


    </div>
</body>

</html>