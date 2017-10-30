<?php
	include_once "db.php";
	include_once "article.php";

	$dbManager = new DatabaseConnectionManager();
	$dbManager->openConnection();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>PHPLeif - Konsten att Leifa ur..</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Gruppo" rel="stylesheet">
</head>
<body>
	<script type="text/javascript" src="js/main.js"></script>

	<header><h1>Leif</h1></header>
	
	<main>	
		<?php
			$article = new Article($dbManager);
			$article->printAll();
		?>
	</main>

	<footer></footer>

	
</body>
</html>
