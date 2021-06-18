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
?>