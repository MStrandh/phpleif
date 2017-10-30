<?php

class Article {
	private $dbManager;

	function __construct($db) {
		$this->dbManager = $db;
	}

	function printAll() {
		$result = $this->dbManager->runQuery("SELECT title, content FROM blog_posts");

		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				$this->printArticle($row["title"], $row["content"]);
			}
		} else {
			echo $this->printNoArticles();
		}
	}

	function printArticle($title, $content) {
		$articleOutput = "<article class=\"blogArticle\">";
		$articleOutput .= "<h1>" . $title . "</h1>";
		$articleOutput .= "<i>" . $content . "</i>";
		$articleOutput .= "</article>\n";

		echo $articleOutput;
	}

	function printNoArticles() {
		$articleOutput = "<article class=\"blogArticle\">";
		$articleOutput .= "<h1>No articles found</h1>";
		$articleOutput .= "</article>\n";

		echo $articleOutput;
	}
}

?>