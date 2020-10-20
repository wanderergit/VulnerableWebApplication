<!DOCTYPE html>
<html>

<head>
	<link rel="shortcut icon" href="../Resources/hmbct.png" />
	<style>
		button {
			background-color: lightyellow;
			border-radius: 0px;
			font-size: large;
			margin: 5px;
			padding: 5px;
		}
	</style>
</head>

<body bgcolor="lightcoral" style="margin: 0; padding: 0; box-sizing: border-box; ">
	<div style="background-color:lightcoral;padding:15px;">
		<button type="button" name="homeButton" onclick="location.href='../homepage.html';">Home Page</button>
		<button type="button" name="mainButton" onclick="location.href='fileupl.html';">Main Page</button>
	</div>
	<div align="center" class="btn-div" style="background-color: rgb(236, 161, 161);padding:20px; min-height: 21vh;">
		<form action="" method="post" enctype="multipart/form-data">
			<br>
			<b>Select image : </b>
			<input type="file" name="file" id="file" style="border: solid;">
			<input type="submit" value="Submit" name="submit">
		</form>
	</div>
	<?php

	// Check if image file is a actual image or fake image
	if (isset($_POST["submit"])) {
		$target_dir = "uploads/";
		$target_file = $target_dir . basename($_FILES["file"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
		$type = $_FILES["file"]["type"];
		$check = getimagesize($_FILES["file"]["tmp_name"]);

		if ($check["mime"] == "image/png" || $check["mime"] == "image/gif") {
			$uploadOk = 1;
		} else {
			$uploadOk = 0;
			echo "Mime?";
			echo $check["mime"];
		}
		if ($uploadOk == 1) {
			move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
			echo "File uploaded /uploads/" . $_FILES["file"]["name"];
		}
	}
	?>

</body>

</html>