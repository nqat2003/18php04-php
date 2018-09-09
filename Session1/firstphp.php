<?php
	$a = 2;
	$b = 238; 
	function sum($a = 0,$b = 0){
		return $a + $b;
	}
	$tong = sum($a, $b);
	echo $a." + ".$b . " = ".$tong."<br>";
	if ( $tong % 2 == 0 ) 
		echo $tong." là số chẵn";
	else {
		echo $tong." là số lẻ ";
		if ( $tong % 3 == 0 )
			echo " và chia hết cho 3";
		else
			echo " và không chia hết cho 3";
	}
	echo "<hr>";
	$month = 3;
	switch ($month) {
		case 1:
		case 3:
		case 5:
		case 7:
		case 8:
		case 10:
		case 12:
			echo "Tháng $month có 31 ngày";
			break;
		case 2:
			echo "Tháng 2 có 28 ngày nếu không nhuận và 29 ngày nếu năm nhuận";
			break;
		case 4:
		case 6:
		case 9:
		case 11:
			echo "Tháng $month có 30 ngày";
			break;
		default:
			echo "Số vừa cho không phải là tháng";
			break;
	}
	echo "<hr>";
?>
<form method="POST" action="firstphp.php">
	Nhập vào 2 số
	<input type="text" name="number">
	<input type="text" name="number2">
	<input type="submit" name="ok" value="Submit">
</form>
<?php 
	if (isset($_POST['number']) && isset($_POST['number2'])){
		$a = $_POST['number'];
		$b = $_POST['number2'];
		$tong = sum($a,$b);
		echo "Tổng của $a và $b là $tong<br>";
		if ($tong < 1000) {
			$dv = $tong % 10;
			if ($dv % 2 == 0)
				echo "Hàng đơn vị của $tong là $dv và là số chẵn";
			elseif ($dv % 3 == 0)
				echo "Hàng đơn vị của $tong là $dv là số lẻ và chia hết cho 3";
				else
				echo "Hàng đơn vị của $tong là $dv là số lẻ và không chia hết cho 3";
		}
	}
	// echo "<hr>";
	// $so = 123;
	// echo $so . "<br>";
	// $sodaonguoc = 0;
	// while ($so != 0){
	// 	$a = $so % 10;
	// 	$sodaonguoc = $sodaonguoc * 10 + $a;
	// 		echo "$sodaonguoc<br>";
	// 	$so = floor($so / 10);
	// }
	// echo $sodaonguoc;
?>