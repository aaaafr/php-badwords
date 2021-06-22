<?php
 $string = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, maiores.';

// var_dump($_GET);
$badword = $_GET['bad'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
<p> <?php echo $string; ?> <?php echo strlen($string);?></p>

    <p> <?php echo str_replace($_GET['bad'],'***' , $badword); ?> </p>
</body>
</html>
