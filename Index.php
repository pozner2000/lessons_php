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
		<input type="text" name="login">
		<input type="text" name="tel">
		<textarea rows="5" cols="45" name="description"></textarea>
		<input type="submit">
	</form>
	<?php
		$login = $_POST['login'];
		$tel = $_POST['tel'];
		$description = $_POST['description'];
		if($login && $tel && $description)
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
			foreach ($list as $row) 
			{
				$id = $row["id"];
				$name = $row["login"];
				$tel = $row["tel"];
				$description = $row["description"];
				print_r($description);
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
	
</body>

</html>