<?php
	$title = "Functions";

	include("./inc/layout.php");

	function sum($num1, $num2) {
		return $num1 + $num2;
	}

	$result = sum(5, 7);
?>

<?= $result ?>

<?php require("./inc/footer.php"); ?>