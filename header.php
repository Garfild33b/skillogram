<!DOCTYPE HTML>
<html>
<head>
	<title> test-page </title>
	<meta http-equiv="X-UA-Compatible" content="IE=10"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<?php date_default_timezone_set ('UTC');

	$now = time();

	$now_moscow_time = time() + 60*60*3;
	?>
	<header class="head">
		<div class="logotip">
			<a href=index.php> <img src="images\logotip.jpg" id="logotip" alt="skilogram"> </a>
		</div>
		<div class="top-right">
			<div>
				<ol class="link">
					<li>
						<a href="add_post.php"> Добавить пост </a>
					</li>
					<li>
						<a href="about_project.php"> О проекте </a>
					</li>
					<li>
						<a href="contacts.php"> Контакты </a>
					</li>
				</ol>
			</div>
			<div class="search-form" spellcheck="true">
				<form>
					<input type="search" name="search" placeholder="Поиск...">
					<input type="submit" value="Ок" class="search-button">
				</form>
			</div>
		</div>
	</header>
	<!--The-end-of-the-top-->
