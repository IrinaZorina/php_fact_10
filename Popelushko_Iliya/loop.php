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
    for ($i=1;$i<=30;$i++){
        if (($i%2)==0){
            echo $i.'<br>';
        }
    }

    for ($a=1;$a<=50;$a++){
        if (($a%3)==0 &&($a%5)==0){
            echo "<i><b>$a</b></i>"." ";
        }
        elseif(($a%3)==0){
            echo "<i>$a</i>"." ";
        }
        else echo $a." ";
    }
    ?>
<br>
    <?php
    $a=1;
    $b=1;
    $sum=0;
    $d=0;
    $i=0;
    while ($sum<10){
        $d=(double)$a/$b;
        $sum+=$d;
        $a+=3;
        $b+=1;
        $i++;
    }
    echo "минимальное кол-во элементов-".$i;
    ?>
<br>
    <?php
    $a=1;
    $b=2;
    $sum=0;
    $d=0;
    $i=0;
    while ($sum<10){
        $d=(double)$a/$b;
        $sum+=$d;
        $a+=2;
        $b+=2;
        $i++;
    }
    echo "минимальное кол-во элементов-".$i;
    ?>
</main>
</body>
</html>
