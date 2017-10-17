<?php

require ('header.php');

define('HEART', '<img src="images\heart.jpg" id="heart" alt="heart">');

$data_base = [

	'ZvezdaUtuba' => [

		'avatarka' => 'ava_ZvezdaUtuba.jpg',
		'username' => 'ZvezdaUtuba',
		'time_last_seen' => date('Y-m-d H:i:s', $now_moscow_time - 60*60*2),							//- 2 часа (создание поста)
		'photo' => 'photo_ZvezdaUtuba.jpg',
		'likes_counter' => 103,
		'comment' => 'Ох корпоративчик',
		'hashtag' => [
			'pechalko.php',
			'pechalko.php',
			'pechalko.php'
		]
	],

	'Borodach' => [
		'avatarka' => 'ava_Borodach.jpg',
		'username' => 'Borodach',
		'time_last_seen' => date('Y-m-d H:i:s', $now_moscow_time - 60*60*24),							//- 24 часа (создание поста)
		'photo' => 'photo_Borodach.jpg',
		'likes_counter' => 42,
		'comment' => 'Завтра затусим',
		'hashtag' => [
			'pechalko.php',
			'pechalko.php',
			'pechalko.php'
		]

	],

	'iMedved' => [
		'avatarka' => 'ava_iMedved.jpg',
		'username' => 'iMedved',
		'time_last_seen' => date('Y-m-d H:i:s', $now_moscow_time - 60*60*36),							//- 36 часа (создание поста)
		'photo' => 'photo_iMedved.jpg',
		'likes_counter' => 1,
		'comment' => 'Опять подчиненные нажрутся',
		'hashtag' => [
			'pechalko.php',
			'pechalko.php',
			'pechalko.php'
		]


	]

];

foreach ($data_base as $key => $post) {

	if (!empty($_REQUEST['search']) &&
		strpos($post['username'], $_REQUEST['search']) === false
		&&
		strpos($post['comment'], $_REQUEST['search']) === false) {
			continue;
	}

?>

	<div class="post-form">
		<div class="avatarka">
			<img src="images\<?php echo $post['avatarka'] ?>" id="avatarka" alt="avatarka">
		</div>
		<div class="username-last-seen-block">
			<div class="username">
				<?php echo $post['username'] ?>
			</div>
			<div class="time_last_seen">
				<?php echo $post['time_last_seen'] ?>
			</div>
		</div>
		<div>
			<img src="images\<?php echo $post['photo'] ?>" id="photo" alt="photo">
		</div>
		<div>
			<?php echo HEART ?>
		</div>
		<div class="like">
			<?php echo $post['likes_counter'] ?>
		</div>
		<div>
			<?php echo $post['comment'] ?>
			<a href="<?php echo $post['hashtag'] [0]?>" class="hashtag"> #еда </a>
			<a href="<?php echo $post['hashtag'] [1]?>" class="hashtag"> #жизнь </a>
			<a href="<?php echo $post['hashtag'] [2]?>" class="hashtag"> #доволен </a>
		</div>
	</div>

	<!--The-end-of-block-->	

<?php
}
?>