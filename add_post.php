<?php

 require ('header.php');

?>
<div class="add-post">
	<form>
		<div>
			<span>Введите логин: </span>
			<input type="text" name="username" placeholder="Введите имя пользователя" autofocus class="username-add-post">
		</div>
		<div>
			<div class="add-photo-button">
				<label>
					<input type="file" name="URL-to-photo-hidden">
					<input type="text" name="URL-to-photo-visiable" placeholder="<?php echo @$_GET['URL-to-photo-hidden']; ?>" class="choose-file" disabled>
					<div class="add-photo-button-visiable">
						<span> Добавить фотографию </span>
					</div>
				</label>
			</div>
		</div>
		<div>
			<span>Добавьте комментарий: </span>
			<input type="text" name="comment" placeholder="Введите комментарий" class="add-photo-comment">
		</div>
		<div>
			<input type="image" name="send-data-new-post" value="Добавить пост" class="button-add-new-post">
		</div>
	</form>
</div>
<?php

require ('footer.php');

?>