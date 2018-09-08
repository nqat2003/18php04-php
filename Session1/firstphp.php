<?php
	$a = 3;
	$b = 6; 
	function sum($a = 0,$b = 0){
		return $a + $b;
	}
	$tong = sum($a, $b);
	echo $a." + ".$b . " = ".$tong."<br>";
	if ( $tong % 2 == 0 ) 
		echo $tong." là số chẵn";
	else{
		echo $tong." là số lẻ ";
		if ( $tong % 3 == 0 )
			echo " và chia hết cho 3";
		else
			echo " và không chia hết cho 3";
	}

?>