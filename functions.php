<?php
	$title = "Functions";

	function sum($num1, $num2) {
		return $num1 + $num2;
	}

	$result = sum(5, 7);
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
	<?= $result ?>
</body>
</html>