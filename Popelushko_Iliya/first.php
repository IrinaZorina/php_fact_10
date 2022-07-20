<?php
$time=date('G');
if ($time>8 && $time<=20){
    $style='styles/style.css';
} else{
    $style='styles/style_night.css';
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Обо мне</title>
    <link rel="stylesheet" href="<?php echo $style;?>">
</head>
<body>
<header>
    <?php
    require 'inc/header.php';
    ?>
</header>
<main>
    <section class="container1">
    <div class="foto">
        <img src="images/img2.jpg" alt=""></div>
    <div class="name">Попелушко Илья</div>
    <div class="info">Родился и живу в г. Магнитогорске. Со школьных лет интересовался всем что связанно с компьютерами, программировал на Visual Basic.
Но волей судьбы оказался на энергетическом факультете МГТУ им. Носова, который в итоге и окончил. Временами музицирую на электрогитаре. Женат, есть ребенок и собака))
    </div>
    <div class="feedback">Ожидал что первое занятие зайдет также легко как и вводные, но обтекание и float заставило поднапрячь мозги)) А так всё супер!</div>
    </section>
    <div class="container2">
        <div class="auto1"><img src="images/auto1.jpg"alt="">
            <p >Porsche</p></div>
        <div class="auto2"><img src="images/auto2.jpg" alt="">
            <p >Hummer</p></div>
        <div class="auto3"><img src="images/auto3.jpg" alt="">
            <p >Ford Mustang</p></div>
        <div class="auto4"><img src="images/auto4.jpg" alt="">
            <p >Lamborghini</p></div>
    </div>
    <section class="container3">
        <div class="auto1Grid"><img src="images/auto1.jpg" alt="">
            <p >Porsche</p></div>
        <div class="auto2Grid"><img src="images/auto2.jpg" alt="">
            <p >Hummer</p></div>
        <div class="auto3Grid"><img src="images/auto3.jpg" alt="">
            <p >Ford Mustang</p></div>
        <div class="auto4Grid"><img src="images/auto4.jpg" alt="">
            <p >Lamborghini</p></div>
        </div>
    </section>
</main>
<footer></footer>
</body>
</html>