<?php
	$title = "GET";

	require("./inc/header.php");

	$category = "";
	$limit = "";

	function setValues() {
		global $category, $limit;

		$category = filter_input(INPUT_GET, "category", FILTER_VALIDATE_INT);
		$limit = filter_input(INPUT_GET, "limit", FILTER_VALIDATE_INT);

		if (!$category) {
			$category = 1;
		}

		if (!$limit) {
			$limit = 10;
		}
	}

	setValues();
?>

	Showing category: <?= $category ?>, Limit: <?= $limit ?>

<?php require("./inc/footer.php"); ?>