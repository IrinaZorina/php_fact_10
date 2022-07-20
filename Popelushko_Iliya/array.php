<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="styles/style_loopArray.css">
</head>
<body>
<header><?php require 'inc/header.php';?>
</header>
<main>
    <?php
    $img=['<img src="images/auto1.jpg" alt="">',
          '<img src="images/auto2.jpg" alt="">',
          '<img src="images/auto3.jpg" alt="">',
          '<img src="images/auto4.jpg" alt="">'];
    $i=mt_rand(0,count($img)-1);
    echo $img[$i];
    ?>
<br>
    <?php
    $array=range(-100,100);
    foreach ($array as $value){
        if ($value>0){

        }
    }
    ?>
</main>

</body>
</html>
