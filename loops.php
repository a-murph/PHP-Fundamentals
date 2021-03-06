<?php
	$title = "Loops";
	$guitars = [
		"Vela",
		"Explorer",
		"Stratocaster"
	];

	$kvpGuitars = [
		"PRS" => "Vela",
		"Gibson" => "Explorer",
		"Fender" => "Stratocaster"
	]
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?= $title ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="main.css" />
	<script src="main.js"></script>
</head>
<body>
	<h3>Favorite Guitars</h3>
	<ul>
		<?php
			foreach($guitars as $guitar) {
				echo "<li>foreach: $guitar</li>";
			}
		?>
	</ul>
	<ul>
		<?php
			foreach($kvpGuitars as $brand => $guitar) {
				echo "<li>foreach: $brand: $guitar</li>";
			}
		?>
	</ul>
	<ul>
		<?php
			for ($i = 0; $i < count($guitars); $i++) {
				echo "<li>for: $guitars[$i]</li>";
			}
		?>
	</ul>
	<ul>
		<?php
			$i = 0;
			while ($i < count($guitars)) {
				echo "<li>while: $guitars[$i]</li>";
				$i++;
			}
		?>
	</ul>
</body>
</html>