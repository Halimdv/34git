<form method="POST" enctype="multipart/form-data">
	<input type="file" name="photo">
	<button name="submit">Envoyer le fichier</button>
</form>

<?php

if(isset($_FILES['photo'])){
	var_dump($_FILES);
	if(!is_dir('upload')){
		mkdir('upload');
	}
	$name = uniqid().$_FILES['photo']['name'];
	$extension = pathinfo($_FILES['photo']['name'])['extension'];
	move_uploaded_file($_FILES['photo']['tmp_name'], __DIR__."/upload/".$name.".".$extension);
}
?>