<?php

// Values that might come from a database
$name = 'Larry Larrison';
$image = 'profile_larry.jpg';

$upload_dir = __DIR__ . '/../../uploads';
$image_filepath = "{$image_dir}/{$image}";

?>

<html>
	<head>
		<title>Profile</title>
	</head>
	<body>

		<h1>User: <?php echo $name; ?></h1>

		<p>Profile image:<br />
			<?php if($image != '' && file_exists($image_filepath)) { ?>
				<img src="<?php echo "images/{$image}"; ?>" /><br />
				<a href="upload_image.php">Edit image</a>
			<?php } else { ?>
				<a href="upload_image.php">Add an image</a>
			<?php } ?>
		</p>

	</body>
</html>