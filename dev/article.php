<?php

class Article {
	private $dbManager;

	function __construct($db) {
		$this->dbManager = $db;
	}

	function printAll() {
		$query = "SELECT bp.title, bp.content, u.first_name, u.last_name ";
		$query .= "FROM blog_posts bp ";
		$query .= "JOIN users u ";
		$query .= "ON bp.author = u.id";

		$this->dbManager->prepare($query);
		$this->dbManager->execute();

		while($row = $this->dbManager->fetch()) {
			$postTitle = $row["title"];
			$postContent = $row["content"];
			$postAuthor = $row["first_name"] . " " . $row["last_name"];
			$this->printArticle($postTitle, $postContent, $postAuthor);
		}

		//echo $this->printNoArticles();
	}

	function printArticle($title, $content, $author) {
		$articleOutput = "<article class=\"blogArticle\">";
		
		$articleOutput .= "<div class=\"blogArticleHeader\">";
		$articleOutput .= "<h1>" . $title . "</h1>";
		$articleOutput .= "</div>";

		$articleOutput .= "<div class=\"blogArticleContent\">";
		$articleOutput .= "<i>" . $content . "</i>";
		$articleOutput .= "</div>";

		$articleOutput .= "<div class=\"blogAuthor\">";
		$articleOutput .= "<i>Av: " . $author . "</i>";
		$articleOutput .= "</div>";

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