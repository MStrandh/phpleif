<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>PHPLeif - Konsten att Leifa ur..</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<script type="text/javascript" src="js/main.js"></script>

	<?php
	include_once "db.php";
	include_once "article.php";

	$dbManager = new DatabaseConnectionManager();
	$dbManager->openConnection();

	$result = $dbManager->runQuery("SELECT title, content FROM Leif");

	if ($result->num_rows > 0) {
		$article = new Article();

		while($row = $result->fetch_assoc()) {
			$article->printArticle($row["title"], $row["content"]);
		}
	} else {
		echo "0 results";
	}
	?>
</body>
</html>
