<?php

	function getUsers() 
	{
	    global $db;
	    $query = 'SELECT * FROM accounts
	              ORDER BY id';
	    $statement = $db->prepare($query);
	    $statement->execute();
	    return $statement; 

	}



	class UserDB 
	{
	    public static function getUsers() 
	    {
	        $db = Database::getDB();
	        $query = 'SELECT * FROM accounts'
	        $statement = $db->prepare($query);
	        $statement->execute();
	        
	        $accounts = array();
	        foreach ($statement as $row)
	        {
	            $account = new User($row['email'],$row['fname'],$row['lname'],$row['phone'],$row['birthday'],$row['gender'],$row['password']);

	            $accounts[] = $account;
	        }
	        return $accounts;
	    }

	    public static function insertUser( $Email, $Fname, $Lname, $Phone, $Birthday, $Gender, $Password)
	    {
	    	$db = Database::getDB();
	    	$query = "INSERT INTO accounts( email, fname, lname, phone, birthday, gender, password ) VALUES (:email, :fname, :lname, :phone, :birthday, :gender, :password ) ";

	    	$statement = $db->prepare ($query);
	    	$statement->bindValue (':email', $Email);
	    	$statement->bindValue (':fname', $Fname);
	    	$statement->bindValue (':lname', $Lname);
	    	$statement->bindValue (':phone', $Phone);
	    	$statement->bindValue (':birthday',$Birthday);
	    	$statement->bindValue (':gender', $Gender);
	    	$statement->bindValue (':password', $Password);
	    	$statement->execute();
	    	$statement->closeCursor();

		}

		public static function updateUser($ID, $newPassword)
		{
			$db = Database::getDB();
			$query = "UPDATE accounts SET password = :password WHERE id = :id" ;

			$statement = $db->prepare($query);
			$statement->bindValue(':password', $newPassword);
			$statement->bindValue(':id', $ID);
			$statement->execute();
			$statement->closeCursor();

		}

		public static function deleteUser($ID)
		{
			$db = Database::getDB();
			$query = "DELETE FROM accounts WHERE id = :id";
			$statement = $db->prepare($query);
			$statement->bindValue(':id', $ID);
			$statement->execute();
			$statement->closeCursor();
			
		}

	}
}
?>













































