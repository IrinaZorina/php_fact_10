<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<!-- 
	/*$a = mt_rand(1,10);
	$b = mt_rand(1,10);;
	$c = mt_rand(1,10);;*/
	/*$a=1;
	$b=1;
	$c=1;
	$d = $b*$b-(4*$a*$c);
	switch(true) {
		case ($d > 0):
			$x1=(-$b+sqrt($d))/(2*$a);
			$x2=(-$b-sqrt($d))/(2*$a);
			echo "d=$d","x1=$x1", "x2=$x2";
			break;
		case ($d < 0):
			echo "Нет корней";
			break;
		case ($d == 0):
			$x=(-$b+sqrt($d))/(2*$a);
			echo "Корень - $x";
			break;
}

 	for ($i=1, $k=" слоник <br>"; $i<20; $i++){
 			$str = $i . $k;
 			echo $str;
 	}*/
 -->

	
<!-- 		for ($i=1;$i<50;$i++){
			if ($i%3==0 && $i%5==0){
				echo '<b>'.$i.'</b>';
			} elseif ($i%3==0) {
				echo '<i>'.$i.'</i>';
			} elseif($i){
				echo $i;
			}
			
		}
	 -->

<!-- 	$i=0;
	$x=1;
	$y=1;
	$S=0;
	while($S<10){
		$i++;
		$k=$x/$y;
		$S=$S+$k;
		$x=$x+3;
		$y=$y+1;
		}
		$i=$i-1;
	echo $i;	
 -->
<?php
/* 	$i=1;
	$x=1;
	$y=1;
	$S=0;
	while($S<10){
		$k=$x/$y;
		$S=$S+$k;
		$y=pow(2, $i);
		$i++;
		$x=$i*$i;
		}
		$i=$i-2;
	echo "<br>'.$i.'<br>";	*/
 ?>



<?php
/*	$pi=4;
	$i=0;
	$j=1;
	$x=0;
	//$y=round(M_PI,2);
	$y=bcdiv(M_PI, 1, 2);
	echo $y;
	while ($x!=$y) {
		$i++;
		$j=$j+2;
		if ($i%2!=0){
		$pi=$pi-4/$j;
		} else {
			$pi=$pi+4/$j;
		}
		$x=bcdiv($pi, 1, 2);
		//$x=round($pi,2);
		//echo "<br>'.$pi.'<br>";
	}
	echo "$i"; */
?>
<?php
/*	$number=18596572354;
	$chislo=array();
	$x=0;
	$new_number=$number;
	while($x<floor(log10($number)+1)){
		$chislo[$x]=$new_number%10;
		//echo "<br>'.$chislo[$x].'<br>";
		$x++;
		$temp=$new_number/10;
		//echo "<br>'.$temp.'<br>";
		$new_number=floor($temp);
		//echo "<br>'.$new_number.'<br>";
	}
	$i=0;
	$Sum=0;
	while ($i < count($chislo)){
		if ($chislo[$i]%2==0){
			$Sum+=$chislo[$i];
		}
		$i++;
	}
	//echo "<br>'.$chislo.'<br>";
	echo "<br>'.$Sum.'<br>";*/
?>

<?php
/* 	$A=mt_rand(1,100);
	$X=mt_rand(1,100);
	$E=mt_rand(1,100);
	echo "'.$A.''.$X.''.$E.' ";
	$y=array();
	$y[0]=$A;
	$i=1;
	$temp=true;
	while($temp==true){
		$temp=abs(pow($y[$i], 2)-pow($y[$i-1], 2))<$E;
		$y[$i]=0.5*($y[$i-1]+$X/$y[$i-1]);
		$res=$y[$i];
		//echo "<br>'.$res.'<br>";	
		$i++;
		}
		
	echo "<br>'.$res.'<br>";	*/
?>
<?php
/*$arr7 = [
    'fruits' => ['apple' => 'яблоко', 'pineapple' => 'ананас', 'banana' => 'банан'],
    'vagetables' => ['tomato' => 'помидор', 'cucumber' => 'огурец'],
    'drinks' => ['water' => 'вода', 'coffee' => 'кофе', 'tea' => 'чай']
];
	
	foreach ($arr7 as $key => $value) {
		if ($key=='drinks'){
			foreach ($variable as $key => $value) {
				// code...
			}
		}	
	}*/
?>

<!-- <!DOCTYPE html>
<html>
<body>
	<h1>Многомерные массивы</h1> -->
	<?php
/*		// инициализируем массив
		$country = [
			["name" => "Китай", "capital" => "Пекин", "population" => 1.40], 
			["name" => "Индия", "capital" => "Нью-Дели", "population" => 1.37],
			["name" => "США", "capital" => "Вашингтон", "population" => 0.32],
			["name" => "Индонезия", "capital" => "Джакарта", "population" => 0.24]
		];

		// простая конкатенация
		echo " 
		Страна: " . $country[0]["name"] . ", 
		Столица: " . $country[0]["capital"] . ", 
		Население: " . $country[0]["population"] . " (млрд.чел.)<p>";

		// интерполяция сложных переменных
		echo "Страна: {$country[1]['name']} , 
		Столица: {$country[1]['capital']} , 
		Население: {$country[1]['population']} (млрд.чел.)<p>";
		foreach ($country as $key => $value){
           echo "
            Страна: $value[name],
		    Столица: $value[capital],
		    Население: $value[population]  (млрд.чел.)<p>";
    }

        foreach ($country as $key => $value){
            echo " 
		        Страна: " . $value["name"] . ", 
		        Столица: " . $value["capital"] . ", 
		        Население: " . $value["population"] . " (млрд.чел.)<p>";
        }*/
?>


	<?php
/*	$array=[50,45,40,35,30];
	$x=0;
	$Sum=0;
	while($x<count($array)){
	$Sum+=$array[$x];
	$x++;
}
	$result=$Sum;
	echo $result;*/
	?>

<?php
/*	$array=[];
	$i=0;
	while($i<20) {
		$array[$i]=mt_rand(1,50);
		echo " $array[$i] ";
		$i++;
	}
	echo "<br>";
	while($i>-1) {
		echo " $array[$i] ";
		$i--;
	}*/
?>

<?php
	/*$array=['css.png','html.png','php.png','js.png'];
	$i=rand(0,3);
	echo '<img src="images/'.$array[$i].'">';*/
?>

<?php
	$array=[];
	$N=mt_rand(-100,100);
	$min=100;
	$max=-100;
	$i=0;
	$x=0;
	$y=0;
	while($i<$N) {
		$array[$i]=mt_rand(-100,100);
		if ($array[$i]<0 && $array[$i]>$max){
			$max=$array[$i];
			$x++;
		} elseif ($array[$i]>0 && $array[$i]<$min){
			$min=$array[$i];
			$y++;
		} else {

		}
		echo " $array[$i] ";
		$i++;
	}
		if($x>0){
			echo "<br>max: $max<br>";
		} else {
			echo "<br>max: null<br>";
		}
		if($y>0){
			echo "<br>min: $min<br>";
		} else {
			echo "<br>min: null<br>";
		}	
		echo "<br>";	
?>
<?php
		$marks = [
			["name" => "Tom", "math" => mt_rand(2,5), "phys" => mt_rand(2,5), "chem" => mt_rand(2,5), "inf" => mt_rand(2,5)], 
			["name" => "Bob", "math" => mt_rand(2,5), "phys" => mt_rand(2,5), "chem" => mt_rand(2,5), "inf" => mt_rand(2,5)],
			["name" => "John", "math" => mt_rand(2,5), "phys" => mt_rand(2,5), "chem" => mt_rand(2,5), "inf" => mt_rand(2,5)],
			["name" => "Bill", "math" => mt_rand(2,5), "phys" => mt_rand(2,5), "chem" => mt_rand(2,5), "inf" => mt_rand(2,5)],
		];
		$Sum=0;
		$i=0;
		foreach ($marks as $values) {
			foreach ($values as $key => $value) {
				echo " $value ";
				if($key=='math'){
					$m++;
					$sumMath+=$value;
				} elseif($key=='phys') {
					$p++;
					$sumPhys+=$value;
				} elseif($key=='chem') {
					$c++;
					$sumChem+=$value;
				} elseif($key=='inf') {
					$i++;
					$sumInf+=$value;
				}	
			}
			echo "<br>";
		}
		$mathAverage=round($sumMath/$m);
		$physAverage=round($sumPhys/$p);
		$chemAverage=round($sumChem/$c);
		$infAverage=round($sumInf/$i);
		echo "Сумма отметок по математике:$sumMath Средняя отметка: $mathAverage<br>";
		echo "<br>Сумма отметок по физике:$sumPhys Средняя отметка: $physAverage<br>";
		echo "<br>Сумма отметок по химии:$sumChem Средняя отметка: $chemAverage<br>";
		echo "<br>Сумма отметок по информатике:$sumInf Средняя отметка: $infAverage<br>";
		echo "<br>";	
?>
<?php
		$temp_rand=["Jan" => 0, "Feb" => 0, "Mar" => 0, "Apr" => 0, "May" => 0, "Jun" => 0, "Jul" => 0, "Aug" => 0, "Sept" => 0, "Oct" => 0, "Nov" => 0,"Dec" => 0];
		$temp = [
			'Cuba' => $temp_rand, 
			'Trinidad' => $temp_rand, 
			'Jamaica' => $temp_rand, 
			'Ayiti ' => $temp_rand, 
		];
		$max=0;
		$array=$temp_rand;
		$i=0;
		foreach ($temp as $country=> &$values) {
			foreach ($values as $key => &$value) {
				$value=mt_rand(20,35);
				echo " $value ";
				if ($temp[$country][$key]>$array[$key]) {
					$array[$key]=$temp[$country][$key];
				}
			}
			echo "<br>";
		}
		foreach ($array as $country=> &$values){
			echo " $country $values ";
		}
		echo "<br>";	
?>
<?php
echo "<br>";
	$array=[[]];
	$temp=[];
	$res=1;
	$temp=$array[1];
	$count=1;
	for ($i=0;$i<5;$i++){
		for ($j=0;$j<6;$j++){
			$array[$i][$j]=mt_rand(1,30);
			echo " ".$array[$i][$j];
			if($j%2!=0 && $array[$i][$j]>$temp[$j]){
				$temp[$j]=$array[$i][$j];
				$count++;
			}
		}
		echo "<br>";
	}
	foreach ($temp as $value) { 
		echo " $value ";
		$res*=$value;
	}
	echo "<br>";
	echo "$res <br>";
?>
<?php
	echo "<br>";
	$permitted_chars = 'abcdefghijklmnopqrstuvwxyz';
	$array=[[]];
	$r=mt_rand(1,20);
	$c=mt_rand(1,20);
	for ($i=0;$i<$r;$i++){
		for ($j=0;$j<$c;$j++){
			$array[$i][$j]=substr(str_shuffle($permitted_chars), 0, 10);
			echo " ".$array[$i][$j];
		}
		echo "<br>";
	}
	for ($i=0;$i<$r;$i++){
		for ($j=0;$j<$c;$j++){
			if (substr($array[$i][$j],0,1)=='a'){
				echo "<b> ".$array[$i][$j]." </b>";
			}
		}
	}
	echo "<br>";
?>
<?php
	echo "<br>";
	$x=mt_rand(1,10);
	$y=mt_rand(1,10);
	$count=0;
	for ($i=0;$i<$x;$i++){
		for ($j=0;$j<$y;$j++){
			$array[$i][$j]=mt_rand(1,30);
			echo " ".$array[$i][$j];
			$count++;
			}
		echo "<br>";
	}
	echo "<br>";
	echo "Элементов в массиве: $count<br>Элементов в каждой строке: $y<br>Элементов в каждом стобце: $x<br>";
?>
<?php
	echo "<br>";
	$array=[3,5,6,7,3,3,3,5,3,5,5,6,5,5,5,5,8,9,0,3,5,3,5,3,5];
	$N=count($array);
	echo $N;
	echo "<br>";
	$max=$count=1;
	$j=0;
	for ($i=0;$i<$N;$i++){
			echo " $array[$i]";
		}
	for ($i=0;$i<$N;$i++){	
			if($array[$i]==$array[$i-1]){
			$count++;
			} else { 
				$temp[$j]=$count;
				$count=1;
				$j++;
			}
	}
	foreach ($temp as $value){
		if($value>$max){
			$max=$value;
		}
	}
	echo "<br>";
	echo $max;
?>
</body>
</html>