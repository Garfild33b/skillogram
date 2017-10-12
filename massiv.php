<?php

	$post_massiv = [

		'ZvezdaUtuba' => [

			'avatarka' => '<img src="images\ava_ZvezdaUtuba.jpg" id="avatarka">',
			'username' => 'ZvezdaUtuba',
			'photo' => '<img src="images\photo.jpg" id="photo">',
			'likes_counter' => 22,
			'comment' => 'Плотно поел. Фото прилагаю. Очень доволен.
				<a href="pechalko.php" class="hashtag"> #еда </a>
				<a href="pechalko.php" class="hashtag"> #жизнь </a>
				<a href="pechalko.php" class="hashtag"> #доволен </a>'
		],

		'Borodach' => [

			'avatarka' => '<img src="images\ava_Borodach.jpg" id="avatarka">',
			'username' => 'Borodach',
			'photo' => '<img src="images\photo.jpg" id="photo">',
			'likes_counter' => 13,
			'comment' => 'Плотно поел. Фото прилагаю. Очень доволен.
				<a href="pechalko.php" class="hashtag"> #еда </a>
				<a href="pechalko.php" class="hashtag"> #жизнь </a>
				<a href="pechalko.php" class="hashtag"> #доволен </a>'
		],

		'iMedved' => [

			'avatarka' => '<img src="images\ava_iMedved.jpg" id="avatarka">',
			'username' => 'Borodach',
			'photo' => '<img src="images\photo.jpg" id="photo">',
			'likes_counter' => 13,
			'comment' => 'Плотно поел. Фото прилагаю. Очень доволен.
				<a href="pechalko.php" class="hashtag"> #еда </a>
				<a href="pechalko.php" class="hashtag"> #жизнь </a>
				<a href="pechalko.php" class="hashtag"> #доволен </a>'
		]

	];

		foreach ($post_massiv as $value) {
			echo $post_massiv['ZvezdaUtuba']['avatarka'] . '<br/>';
		}

/*while ($post_massiv==0) {
		foreach (post_massiv as $value) {
			echo $post_massiv [avatarka] . $post_massiv [username] . $post_massiv [photo] . "<img src='images\heart.jpg' id='avatarka'>" . $post_massiv [likes_counter] . $post_massiv [comment];
		}
	}

?>*/