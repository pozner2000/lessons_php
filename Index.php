<?php
include_once 'db_function.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<?php
	include_once 'header.php';
	include_once 'main_menu.php';
	include_once 'main_content.php';
	include_once 'footer.php';
	?>
	<form action="/index.php" method="POST">
		<input type="text" name="id">
		<input type="text" name="login">
		<input type="text" name="tel">
		<textarea rows="5" cols="45" name="description"></textarea>
		<input type="submit">
	</form>
	<br>
	<?php
	$id = $_POST['id'];
	$login = $_POST['login'];
	$tel = $_POST['tel'];
	$description = $_POST['description'];
	if($id)
	{
		update_user($id, $login, $tel, $description);
	}
	else if ($login && $tel && $description) 
	{
		add_user($login, $tel, $description);
	}
	$list = get_list_country();
	?>

	<table border="1" width="600">
		<tr>
			<th>User ID</th>
			<th>Login</th>
			<th>Telephone</th>
			<th>Description</th>
		</tr>
		<?php
		foreach ($list as $row) {
			$id = $row["id"];
			$name = $row["login"];
			$tel = $row["tel"];
			$description = $row["description"];
			// echo "<option value=\"$id\">$name $tel $description</option>";
			echo '<tr>';
			echo '<td>' . $id . '</td>';
			echo '<td>' . $name . '</td>';
			echo '<td>' . $tel . '</td>';
			echo '<td>' . $description . '</td>';
			echo '</tr>';
		}
		?>
	</table>
	<br>
	<form action="/index.php" method="POST">
		<input type="text" name="id">
		<input type="submit" value="Удалить по ID">
		<input type="checkbox" name="yes" value="1">
	</form>
	<?php
	$id = $_POST['id'];
	$yes = $_POST['yes'];
	if ($id && $yes == '1') 
	{
		delete_user($id);
	}
	$list = get_list_country();
	?>
</body>

</html>