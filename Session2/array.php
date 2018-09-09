<?php 
	$color = [];
	$color = ['red','green','yellow','violet'];
	$color2 = ['red' => 'red', 'green' => 'green'];
	var_dump($color);
	var_dump($color2);
	echo "<hr>";
	foreach ($color as $key => $value) {
		echo $key." => ".$value ."<br>";
	}
	array_push($color, 'blue'); //add blue to $color;
	var_dump($color);
	echo "<hr>";
	unset($color['0']); //delete key 0 form $color
	var_dump($color);
	echo "<hr>";
	$color3 = array_merge($color,$color2); //merge $color and color 2
	var_dump($color3);
	echo "<hr>";
	$arrayNotOneWay = array(
		'y' => array(
			'name' => 'Ý',
			'age' => 20,
			'gender' => 'female'
		),
		'tai' => array(
			'name' => 'Tài',
			'age' => 21,
			'gender' => 'male'
		),
		'minh' => array(
			'name' => 'Minh',
			'age' => 21,
			'gender' => 'male'
		)
	);
	var_dump($arrayNotOneWay);
	echo "<hr>";
	$i = 1;
	foreach ($arrayNotOneWay as $key => $value) {
		echo $i.". " . $value['name'] . " - " . $value['age'] ." tuổi";
		if ($value['gender']=='male') {
			echo " - Nam" ;
		}else{ echo " - Nữ";}
		echo "<br>";
		$i++;
	}
?>