<?php  
	while ($row = mysqli_fetch_array($listUser)) {
		echo $row['username'] ."|".$row['password'];
	}
?>