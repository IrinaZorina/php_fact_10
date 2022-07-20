<?php
$time=date(G);
if ($time>8 && $time<=20){
    $style='styles/style_table.css';
} else{
    $style='styles/style_tableNight.css';
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Таблица Д.И. Менделеева</title>
    <link rel="stylesheet" href="<?php echo $style;?>">
</head>
<body>
<header><?php require 'inc/header.php';?></header>
<table border="1" cellspacing="0" align="center">
    <caption>Таблица Д.И. Менделеева</caption>
    <tr>
        <td class="pink">
            <div class="element"><b>Li</b></div>
            <div align="right" class="number"><b>3</b></div>
            <div align="right" class="mass">6.939</div>
            <div class="name"><a href="https://ru.wikipedia.org/wiki/%D0%9B%D0%B8%D1%82%D0%B8%D0%B9" target="_blank" >Литий</a></div>
        </td>
        <td class="pink">
            <div class="element"><b>Be</b></div>
            <div align="right" class="number"><b>4</b></div>
            <div align="right" class="mass">9.012</div>
            <div class="name"><a href="https://ru.wikipedia.org/wiki/%D0%91%D0%B5%D1%80%D0%B8%D0%BB%D0%BB%D0%B8%D0%B9" target="_blank">Бериллий</a></div>
        </td>
        <td class="yellow">
            <div class="element"><b>B</b></div>
            <div align="right" class="number"><b>5</b></div>
            <div align="right" class="mass">10.811</div>
            <div class="name"><a href="https://ru.wikipedia.org/wiki/%D0%91%D0%BE%D1%80_(%D1%8D%D0%BB%D0%B5%D0%BC%D0%B5%D0%BD%D1%82)" target="_blank">Бор</a></div>
        </td>
        <td class="yellow">
            <div class="element"><b>C</b></div>
            <div align="right" class="number"><b>6</b></div>
            <div align="right" class="mass">12.011</div>
            <div class="name"><a href="https://ru.wikipedia.org/wiki/%D0%A3%D0%B3%D0%BB%D0%B5%D1%80%D0%BE%D0%B4" target="_blank">Углерод</a></div>
        </td>
    </tr>
    <tr>
        <td class="pink">
            <div class="element"><b>Na</b></div>
            <div align="right" class="number"><b>11</b></div>
            <div align="right" class="mass">22.989</div>
            <div class="name"><a href="https://ru.wikipedia.org/wiki/%D0%9D%D0%B0%D1%82%D1%80%D0%B8%D0%B9" target="_blank">Натрий</a></div>
        </td>
        <td class="pink">
            <div class="element"><b>Mg</b></div>
            <div align="right" class="number"><b>12</b></div>
            <div align="right" class="mass">24.312</div>
            <div class="name"><a href="https://ru.wikipedia.org/wiki/%D0%9C%D0%B0%D0%B3%D0%BD%D0%B8%D0%B9" target="_blank">Магний</a></div>
        </td>
        <td class="yellow">
            <div class="element"><b>Al</b></div>
            <div align="right" class="number"><b>13</b></div>
            <div align="right" class="mass">26.981</div>
            <div class="name"><a href="https://ru.wikipedia.org/wiki/%D0%90%D0%BB%D1%8E%D0%BC%D0%B8%D0%BD%D0%B8%D0%B9" target="_blank">Алюминий</a></div>
        </td>
        <td class="yellow">
            <div class="element"><b>Si</b></div>
            <div align="right" class="number"><b>14</b></div>
            <div align="right" class="mass">28.086</div>
            <div class="name"><a href="https://ru.wikipedia.org/wiki/%D0%9A%D1%80%D0%B5%D0%BC%D0%BD%D0%B8%D0%B9" target="_blank">Кремний</a></div>
        </td>
    </tr>
    <tr>
        <td class="pink">
            <div class="element"><b>K</b></div>
            <div align="right" class="number"><b>19</b></div>
            <div align="right" class="mass">39.102</div>
            <div class="name"><a href="https://ru.wikipedia.org/wiki/%D0%9A%D0%B0%D0%BB%D0%B8%D0%B9" target="_blank">Калий</a></div>
        </td>
        <td class="pink">
            <div class="element"><b>Ca</b></div>
            <div align="right" class="number"><b>20</b></div>
            <div align="right" class="mass">40.08</div>
            <div class="name"><a href="https://ru.wikipedia.org/wiki/%D0%9A%D0%B0%D0%BB%D1%8C%D1%86%D0%B8%D0%B9" target="_blank">Кальций</a></div>
        </td>
        <td class="blue">
            <div class="elementMetal"><b>Sc</b></div>
            <div align="left" class="numberMetal"><b>21</b></div>
            <div align="left" class="massMetal">44.956</div>
            <div align="right" class="nameMetal"><a href="https://ru.wikipedia.org/wiki/%D0%A1%D0%BA%D0%B0%D0%BD%D0%B4%D0%B8%D0%B9" target="_blank">Скандий</a></div>
        </td>
        <td class="blue">
            <div class="elementMetal"><b>Ti</b></div>
            <div align="left" class="numberMetal"><b>22</b></div>
            <div align="left" class="massMetal">47.90</div>
            <div align="right" class="nameMetal"><a href="https://ru.wikipedia.org/wiki/%D0%A2%D0%B8%D1%82%D0%B0%D0%BD" target="_blank">Титан</a></div>
        </td>
    </tr>
    <tr>
        <td class="blue">
            <div class="elementMetal"><b>Cu</b></div>
            <div align="left" class="numberMetal"><b>29</b></div>
            <div align="left" class="massMetal">63.546</div>
            <div align="right" class="nameMetal"><a href="https://ru.wikipedia.org/wiki/%D0%9C%D0%B5%D0%B4%D1%8C" target="_blank">Медь</a></div>
        </td>
        <td class="blue">
            <div class="elementMetal"><b>Zn</b></div>
            <div align="left" class="numberMetal"><b>30</b></div>
            <div align="left" class="massMetal">65.37</div>
            <div align="right" class="nameMetal"><a href="https://ru.wikipedia.org/wiki/%D0%A6%D0%B8%D0%BD%D0%BA" target="_blank">Цинк</a></div>
        </td>
        <td class="yellow">
            <div class="element"><b>Ga</b></div>
            <div align="right" class="number"><b>31</b></div>
            <div align="right" class="mass">69.72</div>
            <div class="name"><a href="https://ru.wikipedia.org/wiki/%D0%93%D0%B0%D0%BB%D0%BB%D0%B8%D0%B9" target="_blank">Галлий</a></div>
        </td>
        <td class="yellow">
            <div class="element"><b>Ge</b></div>
            <div align="right" class="number"><b>32</b></div>
            <div align="right" class="mass">72.59</div>
            <div class="name"><a href="https://ru.wikipedia.org/wiki/%D0%93%D0%B5%D1%80%D0%BC%D0%B0%D0%BD%D0%B8%D0%B9" target="_blank">Германий</a></div>
        </td>
    </tr>
</table>
</body>
</html>