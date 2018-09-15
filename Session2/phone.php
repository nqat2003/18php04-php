<?php
	$phone = array(
		'iphoneX' => array(
			'price' => 30000000,
			'image' => 'iphoneX.jpg',
			'description' => 'It is iphoneX'
		),
		'J7prime' => array(
			'price' => 6000000,
			'image' => 'J7prime.jpg',
			'description' => 'It is J7Prime'
		)
	);
	function printPhone($arr)
	{
		foreach ($arr as $key => $value) {
			echo "Name: ".$key.". <br>Price:" . $value['price']."VNĐ<br>";
			showImage($value['image']);
			echo "<br>".$value['description']."<hr>";
		}
	}
	function printPhoneSale($arr)
	{
		foreach ($arr as $key => $value) {
			echo "Name: ".$key.". <br>Giá gốc:" . $value['price']."VNĐ<br>";
			showImage($value['image']);
			echo "<br>Giảm giá: ".$value['sale']."%<br>Mô tả: ".$value['description'];
			$priceSale =$value['price'] - ($value['price']*$value['sale']/100);
			echo "<br>Giá bán: ".$priceSale."VNĐ<hr>";
		}
	}
	function showImage($img)
	{
		echo "<img style='width:100px;height:100px' src='$img'>";
	}
	printPhone($phone);
	echo "<hr><hr>";
	$phone['iphoneX']['sale'] = 10;
	$phone['J7prime']['sale'] = 15;
	printPhoneSale($phone);
	echo "<hr><hr>";
	$newPhone = array(
		'Xiaomi' => array(
			'price' => 4000000,
			'image' => 'Xiaomi.jpg',
			'description' => 'It is Xiaomi',
			'sale' => 12
		)
	);
	$phone = array_merge($phone,$newPhone);
	printPhoneSale($phone);
	echo "<hr><hr>";
	unset($phone['J7prime']);
	printPhoneSale($phone);
	echo "<hr><hr>";
	$phone['iphoneX']['image'] = 'iPhone-XS.jpg';
	printPhoneSale($phone);
?>