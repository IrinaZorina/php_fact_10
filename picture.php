<?php
		$h=date('H');
		//$h=17;
		if ($h > 8 && $h < 20){
			echo '<img class="img-php" src="images/sun.png">';
		} else {
			echo '<img class="img-php" src="images/moon.png">';
		}	
	?>