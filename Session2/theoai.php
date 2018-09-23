<!DOCTYPE>
<html lang="vi">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Theoai Table</title>
</head>

<body>
	<?php
		ob_start();
		session_start(); 
		include_once('connectdtb.php'); 
	?>
	<table align="center" border="1" width="600">
		<tr align="center">
			<td>Ten The Loai</td>
			<td>Thu Tu</td>
			<td>An Hien</td>
			<td colspan="2"><a href="theloai_them.php">Them</a></td>
		</tr>
		<?php 
		$sl= mysqli_query($chimchuot,"select * from theloai");
		while($row = mysqli_fetch_array($sl))
		{
			?>
			<tr align="center">
				<td>
					<?php echo $row['TenTL']; ?>
				</td>
				<td>
					<?php echo $row['ThuTu']; ?>
				</td>
				<td>
					<?php if ($row['AnHien'] == 1)
					{
						echo "Hien"; 
					}
					else
					{
						echo "An";
					}
					?>
				</td>
				<td>
					<a href="theloai_sua.php?idTL=<?php echo $row['idTL'];?>">Sua</a>
				</td>
				<td>
					<a href="theloai_xoa.php?idTL=<?php echo $row['idTL'];?>" onclick="return confirm('Ban co chac chan khong?');">xoa</a>
				</td>
			</tr>
			<?php  } mysqli_close($chimchuot); ?>
		</table>
	</body>
	</html>
