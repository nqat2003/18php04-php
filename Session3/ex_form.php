<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Excise Form</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<style type="text/css">
	#wrapper{
		width: 99%;
		margin: 0 auto;
		display: flex;
	}
	#left{
		width: 50%;
		border: 1px solid lightblue;
		border-radius: 10px;
		padding: 10px;
	}
	#right{
		width: 48%;
		text-align: center;
	}
	img{
		width: 200px;
		height: 200px;
	}
	a{
		margin-top: 10px;
		height: 50px;
		line-height: 50px;
	}
</style>
</head>
<body>
	<?php 
	$errName = "";
	$errMail = "";
	$errPass = "";
	$errRePass = "";
	$errGender = "";
	$errIntro = "";
	$errFile = "";
	$checkMale = $checkFemale = $checkOther = "";
	$gender = $name = $pass = $mail = $intro = $city = "";
	if (isset($_POST['submit'])){
		$check = true;
		$target_dir = "imguploads/" . basename($_FILES["file"]["name"]);
		$imageFileType = strtolower(pathinfo($target_dir,PATHINFO_EXTENSION));
		if (empty($_POST['name'])){
			$errName = "Please input your name";
			$check = false;
		}
		if (empty($_POST['mail'])){
			$errMail = "Please input your mail";
			$check = false;
		}
		if (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
			$errMail = "Invalid email format"; 
			$check = false;
		}
		if (empty($_POST['pass'])){
			$errPass = "Please input your password";
			$check = false;
		}
		if (empty($_POST['re-pass'])){
			$errRePass = "Please re-enter password";
			$check = false;
		}
		if ($_POST['pass'] != $_POST['re-pass']){
			$errRePass = "Not match with password";
			$check = false;
		}
		if (empty($_POST['gender'])){
			$errGender = "Please choose your gender";
			$check = false;
		}
		if (empty($_POST['intro'])){
			$errIntro = "Please input your introduction";
			$check = false;
		}
		if ($_FILES["file"]["size"] > 500000) {
			$errFile = "Your file is too large.(must lower than 5MB)";
			$check = false;
		}
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) {
			$errFile = "Only JPG, JPEG, PNG & GIF files are allowed.";
			$check = false;
		}
		if($_FILES['file']['error'] != 0) {
			$errFile = "Please choose a file";
			$check = false;      
		}
		if (isset($_POST['gender'])){
			if ($_POST['gender'] == "Male"){
			$checkMale = "checked";
			}
			if ($_POST['gender'] == "Female"){
				$checkFemale = "checked";
			}
			if ($_POST['gender'] == "Other"){
				$checkOther = "checked";
			}
		}
		move_uploaded_file($_FILES["file"]["tmp_name"], $target_dir);
		$name = $_POST['name'];
		$mail = $_POST['mail'];
		$pass = "<strike>Đoán xem</strike>";
		$intro = $_POST['intro'];
		$city = $_POST['city'];
		// if($_FILES['file']['error'] == 0) {
		// 	$img = resize_img($target_dir,50,50);
		// }
	}
	// function resize_img($file, $w, $h){
	// 	list($width,$height) = getimagesize($file);
	// 	$src_image = imagecreatefromjpeg($file);
	// 	$dst_image = imagecreatetruecolor($w, $h);
	// 	imagecopyresampled($dst_image, $src_image, 0, 0, 0, 0, $w, $h, $width, $height);
	// 	return $dst_image;
	// }
?>
<div id="wrapper">
	<div id="left">
		<h1 class="d-flex justify-content-center">REGISTER FORM</h1>
		<?php 
			if (isset($check)){
				if ($check)
					echo "<h2 class='d-flex justify-content-center text-success'>Register Success</h2>";
				else
					echo "";
			}
		?>
		<form method="POST" action="#submit" enctype="multipart/form-data">
			<div class="form-group">
				<label>Name</label>
				<input type="text" class="form-control" placeholder="Your name..." name="name" value="<?php if (isset($_POST['name'])) echo $_POST['name']; ?>">
				<small class="text-danger"><?php echo $errName; ?></small>
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="mail" class="form-control" placeholder="Your email..." name="mail" value="<?php if (isset($_POST['mail'])) echo $_POST['mail']; ?>">
				<small class="text-danger"><?php echo $errMail; ?></small>
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" class="form-control" placeholder="Password" name="pass" value="<?php if (isset($_POST['pass'])) echo $_POST['pass']; ?>">
				<small class="text-danger"><?php echo $errPass; ?></small>
			</div>
			<div class="form-group">
				<label>Re-Password</label>
				<input type="password" class="form-control" placeholder="Password" name="re-pass" value="<?php if (isset($_POST['re-pass'])) echo $_POST['re-pass']; ?>">
				<small class="text-danger"><?php echo $errRePass; ?></small>
			</div>
			<div class="form-group">
				<label>Gender</label><br>
				<div class="form-check-inline">
					<label class="form-check-label">
						<input type="radio" class="form-check-input" name="gender" <?php echo $checkMale; ?> value="Male">Male
					</label>
				</div>
				<div class="form-check-inline">
					<label class="form-check-label">
						<input type="radio" class="form-check-input" name="gender" <?php echo $checkFemale; ?> value="Female">Female
					</label>
				</div>
				<div class="form-check-inline">
					<label class="form-check-label">
						<input type="radio" class="form-check-input" name="gender" <?php echo $checkOther; ?>  value="Other">Other
					</label>
				</div><br>
				<small class="text-danger"><?php echo $errGender; ?></small>
			</div>
			<div class="form-group">
				<label>Your City</label>
				<select class="custom-select" name="city">
					<option  <?php if (isset($_POST['city'])) {
					if ($_POST['city'] == "Hà Nội") { ?> selected="true" <?php }}; ?> value="Hà Nội">Hà Nội</option>
					<option  <?php if (isset($_POST['city'])) {
					if ($_POST['city'] == "Huế") { ?> selected="true" <?php }}; ?> value="Huế">Huế</option>
					<option  <?php if (isset($_POST['city'])) {
					if ($_POST['city'] == "Đà Nẵng") { ?> selected="true" <?php }}; ?> value="Đà Nẵng">Đà Nẵng</option>
					<option  <?php if (isset($_POST['city'])) {
					if ($_POST['city'] == "Tp Hồ Chí Minh") { ?> selected="true" <?php }}; ?> value="Tp Hồ Chí Minh">Tp Hồ Chí Minh</option>
				</select>
			</div>
			<div class="form-group">
				<label>Introduction</label>
				<textarea class="form-control" rows="3" name="intro"><?php if (isset($_POST['intro'])) echo $_POST['intro']; ?></textarea>
				<small class="text-danger"><?php echo $errIntro; ?></small>
			</div>
			<div class="form-group">
				<label>Avatar</label>
				<input type="file" class="form-control-file" aria-describedby="fileHelp" multiple="multiple" name="file">
				<small class="text-danger"><?php echo $errFile; ?></small>
			</div>
			<button type="submit" id="submit" class="btn btn-primary" name="submit">Submit</button>
		</form>
	</div>
	<?php 
	if (isset($check))
		if ($check){
			?>
			<div id="right">
				<h2 class="d-flex justify-content-center text-success">Thông tin đã đăng kí</h2>
				<p>Name : <?php echo $name; ?></p>
				<p>Mail: <?php echo $mail; ?></p>
				<p>Password: <?php echo $pass; ?></p>
				<p>Gender: <?php echo $_POST['gender']; ?></p>
				<p>Thành phố: <?php echo $city; ?></p>
				<p>Introduction: <?php echo $intro; ?></p>
				<?php echo "<img src=$target_dir>";?>
				<p><a href="ex_form.php">Back</a></p>
			<?php } ?>
		</div>
	</div>
	<script src="boostrap.min.js"></script>
</body>
</html>