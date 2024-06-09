<?php

// Values that might come from a database
$name = 'Admin';
$image = '1709629956268.jpeg';

$upload_dir =  '../../uploads';
$image_filepath = "{$upload_dir}/{$image}";

?>

<html>
	<head>
		<title>Profile</title>
	</head>
	<body>

		<h1>User: <?php echo $name; ?></h1>

		<p>Profile image:<br />
			<?php if($image != '' && file_exists($image_filepath)) { ?>
				<img src="<?php echo "$image_filepath"; ?>" /><br />
				<a href="upload_image.php">Edit image</a>
			<?php } else { ?>
				<a href="upload_image.php">Add an image</a>
			<?php } ?>
		</p>

	</body>
</html>