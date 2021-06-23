<?php
    function get_list_country()
    {
        $conn = mysqli_connect('localhost', 'root', 'root');
		if ($conn->connect_error) 
        {
			return false;
		}

        $rows=[];
        
		mysqli_select_db($conn, "base");

		if ($result = mysqli_query($conn, "SELECT * FROM user"))
		{
			while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
                $rows[]=$row ;
			}
			mysqli_free_result($result);
		}
		mysqli_close($conn);
		
        return $rows;
    }

	function add_user($login, $tel, $description)
	{
		$conn = mysqli_connect('localhost', 'root', 'root');
		if ($conn->connect_error) 
        {
			return false;
		}
		mysqli_select_db($conn, "base");
		$result = mysqli_query($conn, "insert into `user` (`login`, `tel`, `description`) values ('$login', '$tel', '$description')");
		mysqli_close($conn);
		return $result;
	}

	function delete_user($id)
	{
		$conn = mysqli_connect('localhost', 'root', 'root');
		if ($conn->connect_error) 
        {
			return false;
		}
		mysqli_select_db($conn, "base");
		$result = mysqli_query($conn, "DELETE FROM `user` WHERE `id` = $id");
		mysqli_close($conn);
		return $result;
	}

	function update_user($id,$login, $tel, $description)
	{
		$conn = mysqli_connect('localhost', 'root', 'root');
		if ($conn->connect_error) 
        {
			return false;
		}
		mysqli_select_db($conn, "base");
		$query = 'UPDATE `user` set ';
		if(strlen($login)> 0)
		{
			$query .= "`login` = '$login'"; 
		}
		if(strlen($tel) > 0)
		{
			if(strlen($login) > 0)
			{
				$query .= ',';
			}
			$query .= "`tel` = '$tel'";
		}
		if(strlen($description) > 0)
		{
			if(strlen($login) > 0 || strlen($tel) > 0)
			{
				$query .= ',';
			}
			$query .= "`description` = '$description'";
		}
		$query .= " WHERE `id` = $id";
		print_r($query);
		$result = mysqli_query($conn, $query);
		mysqli_close($conn);
		return $result;
	}
?>