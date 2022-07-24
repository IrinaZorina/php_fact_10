<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="Travnikov, Timur">
	<title>AboutMe</title>
    <link rel="stylesheet" href="styles/styles.css">
</head>

<body>

<!-- 	<header class="page-header">
		<div class="img-logo"></div>
		<div class="button" align="center" valign="middle">
			<form action="table.html" target="_blank" title="Группа элементов">
   			<button>Переход к таблице</button>
 			</form>
 		</div>
	</header> -->
<section class="grid1">
	<a href="php.php"><div class="img-logo"></div></a>
	<?php
		include 'picture.php';
	?>

		<div class="button" align="center" valign="middle">
			<form action="table.html" target="_blank" title="Группа элементов">
   			<button>Переход к таблице</button>
 			</form>
 		</div>
</section>
<br>
<?php
	//$gridBack=#3b444b;
	if ($h > 8 && $h < 20){
			$gridBack="#fffdd0";
			$fontColor="black";
		} else {
			$gridBack="#3b444b";
			$fontColor="white";
		}	
	echo '<section class="grid2" style="background-color:'.$gridBack.'; color: '.$fontColor.'">';
?>
	<div class="photo"><img class="img" src="images/photo.jpg"></div>
	<div class="name"><div class="Text1"><b style="border:3px #ff00ff  dotted">Травников Тимур</b><br>
		<?php
			$date1 = date_create_from_format('Y-m-d', '1996-02-20');
			$date2 = date_create_from_format('Y-m-d', date('Y-m-d'));
			$diff = (array) date_diff($date1, $date2);
			echo $diff['days']." дней со дня рождения";
		?>
	</div></div>
	<div class="info"><div class="Text2"><i>
		
		<?php
		$strInfo="Привет! Немного обо мне:<br> Окончил магистратуру по направлению \"Инфокоммуникационные технологии и системы связи\". Первым местом работы была библиотека университета. Затем трудился в районном информационно-методическом центре. На данном этапе жизни работаю инженером в учреждении дополнительного образования детей. В свободное время путешествую, гуляю, смотрю кино, занимаюсь спортом и пытаюсь выспаться";
		$arrayInfo=explode("!", $strInfo);
		echo "<span style='color:#ff00ff'>$arrayInfo[0]!</span>$arrayInfo[1]";
		?>
	</i> &#128521.</div></div>
	<div class="feedback"><div class="Text3"><i>
		<?php
                $str = 'Отличное начало курса! Пока трудно вспоминать нужные тэги, но понимаю, что это из-за нехватки практики. Предлагаю уделить ещё раз отдельное внимание отступам. Мне кажется, эта тема требует закрепления. Общее впечатление на данный момент исключительно позитивное. Спасибо!';
                $a = explode(" ", $str);
                foreach ($a as $key => $value){
                    if (($key % 2) == 0){
                        $value = '<span style ="color: ff00ff">' . $value ." " . '</span>';
                            echo $value;
                    }
                    else{
                        $value = '<span style ="color: #808000">' . $value ." ". '</span>';
                            echo $value;
                    }
                }
                ?></i></div></div>
</section>
<div class="container1">
	<div class="container11">
		<div class="block1">
			<div class="image1">
				<img src="images/html.jpg">
			</div>
			<div class="Text4"><br>
				Стандартизированный язык гипертекстовой разметки документов для просмотра веб-страниц в браузере. Веб-браузеры получают HTML документ от сервера по протоколам HTTP/HTTPS или открывают с локального диска, далее интерпретируют код в интерфейс, который будет отображаться на экране монитора.<br>
			</div>
		</div>
		<div class="block2">
			<div class="image1">
				<img src="images/css.jpg">
			</div>
			<div class="Text4"><br>
				Формальный язык описания внешнего вида документа (веб-страницы), написанного с использованием языка разметки (чаще всего HTML или XHTML). Также может применяться к любым XML-документам, например, к SVG или XUL.
			</div>
		</div>
	</div>
	<div class="container12">	
		<div class="block3">
			<div class="image1">
				<img src="images/php.jpg">
			</div>
			<div class="Text4"><br>
				C-подобный скриптовый язык общего назначения, интенсивно применяемый для разработки веб-приложений. В настоящее время поддерживается подавляющим большинством хостинг-провайдеров и является одним из лидеров среди языков, применяющихся для создания динамических веб-сайтов.
			</div>
		</div><div class="block4">
			<div class="image1">
				<img src="images/js.jpg">
			</div>
			<div class="Text4"><br>
				Мультипарадигменный язык программирования. Поддерживает объектно-ориентированный, императивный и функциональный стили. Является реализацией спецификации ECMAScript (стандарт ECMA-262).
			</div>
		</div>
	</div>
</div>
	<div class="container2">
		<div class="block1">
			<div class="image1">
				<img src="images/html.jpg">
			</div>
			<div class="Text4"><br>
				Стандартизированный язык гипертекстовой разметки документов для просмотра веб-страниц в браузере. Веб-браузеры получают HTML документ от сервера по протоколам HTTP/HTTPS или открывают с локального диска, далее интерпретируют код в интерфейс, который будет отображаться на экране монитора.<br>
			</div>
		</div>
		<div class="block2">
			<div class="image1">
				<img src="images/css.jpg">
			</div>
			<div class="Text4"><br>
				Формальный язык описания внешнего вида документа (веб-страницы), написанного с использованием языка разметки (чаще всего HTML или XHTML). Также может применяться к любым XML-документам, например, к SVG или XUL.
			</div>
		</div>
	</div>	
	<div class="container3">
		<div class="block3">
			<div class="image1">
				<img src="images/php.jpg">
			</div>
			<div class="Text4"><br>
				C-подобный скриптовый язык общего назначения, интенсивно применяемый для разработки веб-приложений. В настоящее время поддерживается подавляющим большинством хостинг-провайдеров и является одним из лидеров среди языков, применяющихся для создания динамических веб-сайтов.
			</div>
		</div><div class="block4">
			<div class="image1">
				<img src="images/js.jpg">
			</div>
			<div class="Text4"><br>
				Мультипарадигменный язык программирования. Поддерживает объектно-ориентированный, императивный и функциональный стили. Является реализацией спецификации ECMAScript (стандарт ECMA-262).
			</div>
		</div>
	</div>	
	
<footer>  
<?php
echo "<br>";
$str = file_get_contents('index.php');
//echo str_word_count($str);
$str = preg_replace("/[a-zA-Z]/i", "", $str);
$str = str_replace(array('-'),'',$str);
$str = str_replace(array("'"),'',$str);
$tempWords=str_word_count($str, 1, "АаБбВвГгДдЕеЁёЖжЗзИиЙйКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщЪъЫыЬьЭэЮюЯя");
//print_r (str_word_count($str, 1, "АаБбВвГгДдЕеЁёЖжЗзИиЙйКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщЪъЫыЬьЭэЮюЯя"));
$countVowel = preg_match_all('/[АаЕеЁёИиОоУуЫыЭэЮюЯя]/i', $str);
echo $countVowel." гласных на сайте";
echo "<br>";
echo count($tempWords)." слов на сайте";
echo "<br>";
?>

</footer> 
</body>
</html>